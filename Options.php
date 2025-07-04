<?php

namespace Easyui;

use Exception;
use JsonSerializable;

class Options implements JsonSerializable
{
    /**
     * @var array
     */
    protected array $options;

    /**
     * @param string $name
     * @param array $arguments
     * @return $this
     */
    public function __call(string $name, array $arguments)
    {
        $argument = $arguments[0] ?? null;
        $this->options[$name] = $argument;
        return $this;
    }

    /**
     * @return array|null
     */
    public function jsonSerialize(): ?array
    {
        return $this->options ?: null;
    }

    /**
     * @throws Exception
     */
    public function __toString()
    {
        return Encode::json($this->options);
    }
}