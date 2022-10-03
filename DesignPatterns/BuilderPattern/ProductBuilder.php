<?php

namespace Saif\Php\DesignPatterns\BuilderPattern;

use Cassandra\Column;

class ProductBuilder implements ProductBuilderInterface
{
    private array $productFields;

    public function __construct(private string $name, private int $price, array $others)
    {

        $this->productFields = $others;
        $this->productFields['name'] = $this->name;
        $this->productFields['price'] = $this->price;
    }

    public function buildProduct($product):ProductInterface
    {
        $product = new $product();
        foreach ($this->productFields as $field => $value) {
            $method = 'set_' . $field;
            call_user_func_array(array($product, $method), [$value]);
        }
        return $product;
    }


}
