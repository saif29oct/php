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
// $v2 = 7.5;
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
// echo "v7: ".gettype($v7).PHP_EOL;
echo "v8: ".gettype($v8).PHP_EOL;
echo "v9: ".gettype($v9).PHP_EOL;
echo "v10: ".gettype($v10).PHP_EOL;

$v1 = json_encode($v1);
$v2 = json_encode($v2);
$v3 = json_encode($v3);
$v4 = json_encode($v4);
$v5 = json_encode($v5);
$v6 = json_encode($v6);
$v8 = json_encode($v8);
$v9 = json_encode($v9);
$v10 = json_encode($v10);

echo "-------------------------------";
print_r($v1);
echo PHP_EOL;
print_r($v2);
echo PHP_EOL;
print_r($v3);
echo PHP_EOL;
print_r($v4);
echo PHP_EOL;
print_r($v5);
echo PHP_EOL;
print_r($v6);
echo PHP_EOL;
print_r($v8);
echo PHP_EOL;
print_r($v9);
echo PHP_EOL;
print_r($v10);
echo PHP_EOL;


echo "-------------------------------";
print_r(json_decode($v1, true));
echo PHP_EOL;
print_r(json_decode($v2, true));
echo PHP_EOL;
print_r(json_decode($v3, true));
echo PHP_EOL;
print_r(json_decode($v4, true));
echo PHP_EOL;
print_r(json_decode($v5, true));
echo PHP_EOL;
print_r(json_decode($v6, true));
echo PHP_EOL;
print_r(json_decode($v8, true));
echo PHP_EOL;
print_r(json_decode($v9, true));
echo PHP_EOL;
print_r(json_decode($v10, true));
echo PHP_EOL;
echo "-----------------------------------------------------------".PHP_EOL;

$v1 = $v10;
echo PHP_EOL.gettype($v1).PHP_EOL;
$v1 = json_encode($v1);
echo $v1;
$v1 = json_decode($v1, true);
echo PHP_EOL.gettype($v1).PHP_EOL;
var_dump($v1);


