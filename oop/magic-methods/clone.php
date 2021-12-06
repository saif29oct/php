<?php

/*
    When an object is cloned, PHP will perform a shallow copy of all of 
    the object's properties. Any properties that are references to other 
    variables will remain references.

    Once the cloning is complete, if a __clone() method is defined, 
    then the newly created object's __clone() method will be called, 
    to allow any necessary properties that need to be changed.
*/

class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        // Force a copy of this->object, otherwise
        // it will point to same object.
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;


print("Original Object:\n");
print_r($obj);

print("Cloned Object:\n");
print_r($obj2);
