<?php

namespace Saif\Php\DesignPatterns\BuilderPattern;

class KhataBuilder implements ProductBuilderInterface
{

    public static function build(array $productFields): ProductInterface
    {
        $product = new Khata();
        $product -> validateMustHaveProperties(array_keys($productFields));
        foreach ($productFields as $field => $value) {
            $method = 'set_'.$field;
            call_user_func_array(array($product, $method), [$value]);
        }
        return $product;
    }

    public static function store(ProductInterface $khata)
    {
    }


}
