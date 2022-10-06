<?php

namespace Saif\Php\DesignPatterns\BuilderPattern;

class Product implements ProductInterface
{
    public function set_name(string $name)
    {
        $this->price = $name;
    }

    public function set_price(int $price)
    {
        $this->price = $price;
    }
    public function set_title(string $title)
    {
        $this->title = $title;
    }

    public function set_category(String $category){
        $this->category = $category;
    }
}
