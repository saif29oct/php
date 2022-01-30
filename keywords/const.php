<?php
/**
 * Constants cannot be changed once it is declared.
 * 
 * Class constants can be useful if you need to define some constant data within a class.
 * 
 * A class constant is declared inside a class with the const keyword. 
 * 
 * Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.
 * 
 * We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name
 * 
 */

const LEAVING_MESSAGE3 = "Leaving Message: 3";

//  Example-1:
class Goodbye1 {
    // define("HABIB3",4); // Invalid as Class Properties.
    const LEAVING_MESSAGE1 = "Thank you for visiting W3Schools.com!";
}
echo Goodbye1::LEAVING_MESSAGE1.PHP_EOL;

//  Example-2:
class Goodbye2 {
const LEAVING_MESSAGE2 = "Thank you for visiting W3Schools.com!";
public function byebye() {
        define("HABIB",4);
        // const ROFIQ = 5;    //  Invalied inside a function.
        echo self::LEAVING_MESSAGE2.PHP_EOL;
        echo LEAVING_MESSAGE3.PHP_EOL;
    }
}

$goodbye = new Goodbye2();
$goodbye->byebye();