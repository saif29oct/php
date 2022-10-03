<?php

declare(strict_types=1);

include './vendor/autoload.php';

use \Saif\Php\DesignPatterns\BuilderPattern\ProductBuilder;
use \Saif\Php\DesignPatterns\BuilderPattern\Product;

$productBuilder = new ProductBuilder('sampleKhata', 20, ['title'=>'khata']);
$productBuilder->buildProduct(Product::class);
var_dump($productBuilder);
