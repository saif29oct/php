<?php

namespace Saif\Php\DesignPatterns\BuilderPattern;

class KhataUnit implements UnitInterface
{

    public static function getUnit(): string
    {
        return 'SHT';
    }
}