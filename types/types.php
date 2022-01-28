<?php
/**
 * 
 * Four scalar types:
 *      bool, int, float (aka double), string
 * 
 * Four compound types:
 *      array, object, callable, iterable
 * 
 * Two special types:
 *      resource, NULL
 * 
 * 
 */

class myClass{

}



$v1 = "adfadf";
$v2 = 5;
$v2 = 7.5;
$v3 = 67.3435345345345345;
$v4 = ["dsfad","adf",45];
$v5 = [
    "adf"=>343, 
    "va2"=>["v3"=>5, "v4"]
];
$v6 = null;

$v7;
$v8 = "";
$v9 = 0;
$v10 = new myClass();




echo "v1: ".gettype($v1).PHP_EOL;
echo "v2: ".gettype($v2).PHP_EOL;
echo "v3: ".gettype($v3).PHP_EOL;
echo "v4: ".gettype($v4).PHP_EOL;
echo "v5: ".gettype($v5).PHP_EOL;
echo "v6: ".gettype($v6).PHP_EOL;
echo "v7: ".gettype($v7).PHP_EOL;
echo "v8: ".gettype($v8).PHP_EOL;
echo "v9: ".gettype($v9).PHP_EOL;
echo "v10: ".gettype($v10).PHP_EOL;
