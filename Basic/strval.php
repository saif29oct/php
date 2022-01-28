<?php
/**
 * strval( $variable ) 
 * The strval() function is an inbuilt function in PHP and is used to convert any scalar value (string, integer, or double) to a string. We cannot use strval() on arrays or on object, if applied then this function only returns the type name of the value being converted.
 */


$var_name = 32.360;

// prints the value of above variable
// as a string
$new_val = strval($var_name);
echo $new_val. PHP_EOL;
echo getType($new_val). PHP_EOL;

// Situation 2
class geeksforgeeks
{
    public function __toString()
    {   
        // returns the class name 
        return __CLASS__;
    }
}
  
// prints the name of above class as
// a string
echo strval(new geeksforgeeks);
?>
