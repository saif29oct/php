<?php
/**
 * The Scope Resolution Operator (also called Paamayim Nekudotayim) or in simpler terms, the double colon, is a token that allows access to static, constant, and overridden properties or methods of a class.
 * When referencing these items from outside the class definition, use the name of the class.
 * It's possible to reference the class using a variable. The variable's value can not be a keyword (e.g. self, parent and static).
 * Three special keywords self, parent and static are used to access properties or methods from inside the class definition.
 */

 // Example 1
class MyClass {
    const CONST_VALUE = 'A constant value';

    protected function myFunc() {
        echo "MyClass::myFunc()\n";
    }
}

$classname = 'MyClass';
echo $classname::CONST_VALUE;

echo MyClass::CONST_VALUE;



// Exaple -2
class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }


    // Override parent's definition
    public function myFunc()
    {
        // But still call the parent function
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$classname = 'OtherClass';
$classname::doubleColon();

OtherClass::doubleColon();