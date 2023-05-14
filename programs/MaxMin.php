<?php
// Find 2nd min value and 2nd max value from an given array;

$ary = [9 ,5, 7, 15, 2, 13, 4];
$loopLimit = count($ary)-1;
$min2nd = 0;
$max2nd = 0;
for($i=0; $i<2; $i++){
    for($j=$i; $j<$loopLimit; $j++){
        $min2nd = min($ary[$j], $ary[$j+1]);
        $max2nd = max($ary[$j], $ary[$j+1]);
    }
}

echo "min:$min2nd,  max:$max2nd";