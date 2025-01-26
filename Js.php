<?php

namespace Easyui;

class Js implements \JsonSerializable
{
    /**
     * @var string
     */
    protected string $value;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function jsonSerialize(): string
    {
        return "::JS::{$this->value}::JS::";
    }
}