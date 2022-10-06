<?php

namespace Saif\Php\DesignPatterns\BuilderPattern;

class ProductCreator
{
    public function __construct(private ProductBuilderInterface $builder)
    {
    }

    public function buildProduct(){
        $this->builder->store();
    }
}
