<?php

namespace Saif\Php\DesignPatterns\BuilderPattern;

class WeightUnit implements UnitInterface
{

    public function getUnit(): string
    {
        return 'KG';
    }
}