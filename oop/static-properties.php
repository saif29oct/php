<?php
/**
 * Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. These can also be accessed statically within an instantiated class object.
 * Because static methods are callable without an instance of the object created, the pseudo-variable $this is not available inside methods declared as static.
 * 
 * Warning: Calling non-static methods statically throws an Error.
 * 
 * Scope Resulation Operator (::)
 * 
 * We can access static properties from an non static method
 */

class Person{
    private $name;

    public static $drinkingAge = 21;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDrinkingAge()
    {
        // Scope Resulation Operator (::)
        return self::$drinkingAge;
    }

    public static function setDrinkingAgeStatic($age)
    {
        self::$drinkingAge = $age;
    }

    public static function setDrinkingAgeNonStatic($age)
    {
        self::$drinkingAge = $age;
    }

}

