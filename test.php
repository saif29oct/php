<?php

declare(strict_types=1);

include './vendor/autoload.php';

use \Saif\Php\DesignPatterns\BuilderPattern\KhataBuilder;

//$productBuilder = new KhataBuilder('sampleKhata', 20, ['title'=>'khata']);
//$productBuilder->buildProduct(Khata::class);
//var_dump($productBuilder);

$productBuilder = KhataBuilder::build(['name'=>'khata-1', 'title'=>'khata']);
