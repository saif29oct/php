<?php
declare(strict_types=1);

namespace Saif\Php\DesignPatterns\FactoryMethod;

Interface Shape
{
    public function area(): float;
    public function volume(): float;
}
