<?php

namespace Saif\Php\DesignPatterns\FactoryMethod;

use phpDocumentor\Reflection\Types\Callable_;

class ShapeStore
{
    public static function createShape($shape, ...$shapeParameters): Shape
    {
        [$params] = $shapeParameters;
        return new $shape($params);
    }
}
