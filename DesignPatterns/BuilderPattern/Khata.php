<?php

namespace Saif\Php\DesignPatterns\BuilderPattern;

class Khata implements ProductInterface
{
    private int $price;
    private string $title;
    private string $category;
    private int $units;
    private string $unitName;

    public function set_name(string $name)
    {
        $this -> price = $name;
    }

    public function set_price(int $price)
    {
        $this -> price = $price;
    }

    public function set_title(string $title)
    {
        $this -> title = $title;
    }

    public function validateMustHaveProperties(array $properties): void
    {
        $mustHaveProperties = [
            'name',
            'title'
        ];
        $isValid = array_diff($mustHaveProperties, $properties) === [];
        if(!$isValid){
            trigger_error('error');
        }
    }

    public function set_category(int $units)
    {
        $this -> category = get_class();
        $this -> units = $units;
        $this -> unitName = KhataUnit ::getUnit();
    }

}
