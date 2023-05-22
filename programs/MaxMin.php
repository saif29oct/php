<?php

// Find kth highest and lowest element of an array
$ary = [5, 7, 3, 2, 8, 6];
/**
 * 3rd highest element of $ary is 6
 * 3rd lowest element of $ary is 5
 */

//---------------  Method-1  ---------------------
$aryLength = count($ary);
$loopCount = $aryLength - 1;

$kthPosition = 3;

for ($i = 0; $i < $kthPosition; $i++) {
    for ($j = $i; $j < $loopCount; $j++) {
        if ($ary[$i] < $ary[$j + 1]) {
            $temp = $ary[$i];
            $ary[$i] = $ary[$j + 1];
            $ary[$j + 1] = $temp;
        }
    }
}

echo "Highest Value of kth position: " . $ary[$kthPosition - 1];



// -------------------------------------   Mehod-2   -------------------------------
$descAry = $ary;
$ascAry = $ary;
$kthPosition = 3;
$maxPosition = 0;
$minPosition = 0;
for ($i = 0; $i < $kthPosition; $i++) {
    $max = 0;
    $min = INF;
    for ($j = 0; $j < count($descAry); $j++) {
        if ($descAry[$j] > $max) {
            $max = $descAry[$j];
            $maxPosition = $j;
        }
        
        if ($ascAry[$j] < $min) {
            $min = $ascAry[$j];
            $minPosition = $j;
        }
    }
    unset($descAry[$maxPosition]);
    $descAry = array_values($descAry);
    
    unset($ascAry[$minPosition]);
    $ascAry = array_values($ascAry);
    
    echo "<pre>" . "max: " . $max . "  min: " . $min . "<pre>";
}

