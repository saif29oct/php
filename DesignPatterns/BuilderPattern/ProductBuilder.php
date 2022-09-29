<?php

namespace Saif\Php\DesignPatterns\BuilderPattern;

use Cassandra\Column;

class ProductBuilder implements ProductBuilderInterface
{
    private array $productFields;

    public function __construct(private string $name, private int $price, ...$others)
    {
        [$this->productFields] = $others;
        $this->productFields[] = $this->name;
        $this->productFields[] = $this->price;
    }

    public function buildProduct()
    {
        $product = new Product();
        foreach ($this->productFields as $field => $value) {
            $method = 'set_' . $field;
            call_user_func_array(array($product, $method), [$value]);
        }
    }
}
