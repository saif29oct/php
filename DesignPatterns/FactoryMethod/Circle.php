<?php

namespace Saif\Php\DesignPatterns\FactoryMethod;

class Circle implements Shape
{
    public function __construct(private float $radius)
    {
    }

    public function area(): float
    {
        return 3.1416*pow($this->radius,2);
    }

    public function volume(): float
    {
        return 3.1416*pow($this->radius,3);
    }
}
