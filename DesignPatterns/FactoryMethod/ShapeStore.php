<?php

namespace Saif\Php\DesignPatterns\FactoryMethod;

class ShapeStore
{
    public static function createShape($shape, ...$shapeParameters): Shape
    {
        [$params] = $shapeParameters;
        $shape = "Saif\Php\DesignPatterns\FactoryMethod\\$shape";
        return new $shape($params);
    }
}
