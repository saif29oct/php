<?php
/**
 * A valid constant name starts with a letter or underscore (no $ sign before the constant name)
 * 
 * Note: Unlike variables, constants are automatically global across the entire script.
 * 
 * Syntax: define(name, value, case-insensitive)
 * 
 */

 // Example-1:
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING.PHP_EOL;

//  Example-2:
// define("HELPING", "Welcome to W3Schools.com!", true);   // case-insensitive is depricated
// echo HELPING;

// Example-3:
define("cars", ["Alfa Romeo", "BMW","Toyota"]);
echo cars[0].PHP_EOL;


function testConstant(){
    define("GREETING2", "Welcome Inside Function");
    echo GREETING2.PHP_EOL;
}
// echo GREETING2.PHP_EOL; // Can't access it.

testConstant();