<?php

namespace Saif\Php\DesignPatterns\BuilderPattern;

class KhataBuilder implements ProductBuilderInterface
{

    public static function build(array $others):ProductInterface
    {
        $productFields = $others;
        $product = new Khata();
        foreach ($productFields as $field => $value) {
            $method = 'set_' . $field;
            call_user_func_array(array($product, $method), [$value]);
        }
        return $product;
    }

    public function store(ProductInterface $khata){

    }



}
