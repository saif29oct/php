<?php

namespace Saif\Php\DesignPatterns\BuilderPattern;

class Khata implements ProductInterface
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

    public function set_category(int $units){
        $this->category = get_class();
        $this->units = $units;
        $this->unitName = KhataUnit::getUnit();
    }

}
