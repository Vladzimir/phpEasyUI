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
     * @param $component
     * @return $this
     */
    public function append($component): static
    {
        $this->appends[] = $component;
        return $this;
    }

    /**
     * @throws Exception
     */
    public function __toString()
    {
        $appends = $this->appends;

        $data = $this->method ?? '(' . Encode::json($this) . ')';

        $selector = '';
        $end = '';

        if ($this->id !== null) {
            $end = $this->endSymbols;
            $selector = '$(' . $this->id . ').';

            if ($this->asSelector) {
                $selector = '$("#' . $this->id . '").';
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

        return $selector . static::COMPONENT_NAME . $data . $components . $end;
    }

    /**
     * @return array|null
     */
    public function jsonSerialize(): ?array
    {
        return $this->properties ?: null;
    }
}