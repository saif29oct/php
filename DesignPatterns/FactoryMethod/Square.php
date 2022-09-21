<?php

namespace Saif\Php\DesignPatterns\FactoryMethod;

class Square implements Shape
{
    public function __construct(private float $length)
    {
    }

    public function area(): float
    {
        return pow($this->length,2);
    }

    public function volume(): float
    {
        return pow($this->length,3);
    }
}
