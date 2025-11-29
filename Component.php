<?php

namespace Easyui;

use BadMethodCallException;
use Exception;

use JsonSerializable;
use LogicException;

use function lcfirst;

class Component implements JsonSerializable
{
    /**
     * @var string|null
     */
    protected string|null $id;
    /**
     * @var array
     */
    protected array $appends = [];
    /**
     * @var array
     */
    protected array $properties = [];
    /**
     * @var string
     */
    protected string $method;
    /**
     * @var bool
     */
    protected bool $asSelector;

    /**
     * @var string
     */
    protected string $endSymbols;
    /**
     * @var string|null
     */
    protected ?string $exportMode = null;
    /**
     * @var string
     */
    protected string $prefixVarId = 'id_';
    /**
     * @var string|null
     */
    protected ?string $suffixVarId = null;

    public function __construct(string|null $id, bool $asSelector = true, string $endSymbols = ';' . PHP_EOL)
    {
        if (!defined(static::class . '::COMPONENT_NAME')) {
            throw new LogicException("Class " . static::class . " must have const COMPONENT_NAME.");
        }

        $this->id = $id;
        $this->asSelector = $asSelector;
        $this->endSymbols = $endSymbols;
    }

    /**
     * @throws Exception
     */
    public function __call(string $name, array $arguments)
    {
        $key = substr($name, 0, 1);
        $value = lcfirst(substr($name, 1));

        $argument = $arguments[0] ?? null;

        return match ($key) {
            'p' => $this->addProperty($value, $argument),
            'e' => $this->addEvent($value, $argument),
            'm' => $this->addMethod($value, $argument),
            default => throw new BadMethodCallException("Unknown method prefix '{$key}' in {$name}."),
        };
    }

    /**
     * @param string $propertyName
     * @param $propertyValue
     * @return $this
     */
    protected function addProperty(string $propertyName, $propertyValue): static
    {
        $this->properties[$propertyName] = $propertyValue;
        return $this;
    }

    /**
     * @param string $eventName
     * @param $eventValue
     * @return $this
     */
    protected function addEvent(string $eventName, $eventValue): static
    {
        if ($eventValue instanceof Js) {
            $event = $eventValue;
        } else {
            $event = new Js($eventValue);
        }

        $this->properties[$eventName] = $event;
        return $this;
    }

    /**
     * @param string $methodName
     * @param $methodValue
     * @return $this
     * @throws Exception
     */
    protected function addMethod(string $methodName, $methodValue): static
    {
        if ($methodValue === null) {
            $method = "('{$methodName}')";
        } else {
            $args = Encode::json($methodValue);
            $method = "('{$methodName}', {$args})";
        }

        if ($this->id === null and !$this->asSelector) {
            if ($methodValue === null) {
                $method = ".{$methodName}()";
            } else {
                $method = ".{$methodName}({$methodValue})";
            }
        }

        $this->method = $method;
        return $this;
    }

    /**
     * @param string $id
     * @return array|string
     */
    protected function cleanId(string $id): array|string
    {
        return str_ireplace(['-'], ['_'], $id);
    }

    /**
     * @param $component
     * @return $this
     */
    public function append($component): static
    {
        $this->appends[] = $component;
        return $this;
    }

    /**
     * @return $this
     */
    public function asSelector(): static
    {
        $this->asSelector = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function asNotSelector(): static
    {
        $this->asSelector = false;
        return $this;
    }

    /**
     * @param string $endSymbols
     * @return $this
     */
    public function setEndSymbols(string $endSymbols): static
    {
        $this->endSymbols = $endSymbols;
        return $this;
    }

    /**
     * @return $this
     */
    public function asSetVar(): static
    {
        $this->exportMode = 'var';
        return $this;
    }

    /**
     * @return $this
     */
    public function asUseVar(): static
    {
        $this->exportMode = 'use';
        return $this;
    }

    /**
     * @return $this
     */
    public function asNameVar(): static
    {
        $this->exportMode = 'name';
        return $this;
    }

    /**
     * @param string $prefixVarId
     * @return $this
     */
    public function setPrefixVarId(string $prefixVarId): static
    {
        $this->prefixVarId = $prefixVarId;
        return $this;
    }

    /**
     * @param string $suffixVarId
     * @return $this
     */
    public function setSuffixVarId(string $suffixVarId): static
    {
        $this->suffixVarId = $suffixVarId;
        return $this;
    }

    /**
     * @throws Exception
     */
    public function __toString()
    {
        $appends = $this->appends;

        $data = $this->method ?? '(' . Encode::json($this) . ')';

        $id = $this->id;
        $prefixVarId = $this->cleanId($this->prefixVarId);
        $suffixVarId = $this->cleanId($this->suffixVarId ?: '_' . static::COMPONENT_NAME);
        $selector = '';
        $end = '';

        if ($id !== null) {
            $end = $this->endSymbols;
            $selector = "$({$id}).";

            if ($this->asSelector) {
                $selector = "$(\"#{$id}\").";
            }
        } elseif (!$this->asSelector) {
            $end = $this->endSymbols;
            $selector = '$.';
        }

        $components = '';
        if ($appends) {
            foreach ($appends as $append) {
                $components .= '.' . $append;
            }
        }

        $outputData = static::COMPONENT_NAME . $data . $components . $end;
        $output = $selector . $outputData;

        if ($this->exportMode === 'name') {
            if ($id === null || $id === '') {
                $warn = "console.warn('Cannot get name var: component id is not set');" . PHP_EOL;
                return $warn . $output;
            }
            $cleanId = $this->cleanId($id);

            return "{$prefixVarId}{$cleanId}{$suffixVarId}";
        }

        if ($this->exportMode === 'var') {
            if ($id === null || $id === '') {
                $warn = "console.warn('Cannot export as var: component id is not set');" . PHP_EOL;
                return $warn . $output;
            }
            $cleanId = $this->cleanId($id);

            return "var {$prefixVarId}{$cleanId}{$suffixVarId} = {$output}";
        }

        if ($this->exportMode === 'use') {
            if ($id === null || $id === '') {
                $warn = "console.warn('Cannot use var: component id is not set');" . PHP_EOL;
                return $warn . $output;
            }
            $cleanId = $this->cleanId($id);
            return "{$prefixVarId}{$cleanId}{$suffixVarId}.{$outputData}";
        }

        return $output;
    }

    /**
     * @return array|null
     */
    public function jsonSerialize(): ?array
    {
        return $this->properties ?: null;
    }
}