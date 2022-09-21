<?php
declare(strict_types=1);

include '../../vendor/autoload.php';

use Saif\Php\DesignPatterns\FactoryMethod\{ShapeStore, Circle, Square};

$shape = ShapeStore::createShape('Circle', 5.5);

echo $shape->area();
