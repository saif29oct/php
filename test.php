<?php

$ary1 = [2, 5, 9];
$ary2 = [1, 7, 10];
$ary1_length = 3;
$ary2_length = 3;


$m = 0;
$n = 0;
$sA = [];
$cI=0;
for($i=0; $i<6; $i++){
    if($m >= $ary1_length){
        $sA = array_merge($sA, array_slice($ary2, $n,$ary2_length-$n));
        break;
    }
    if($n >= $ary2_length){
        $sA = array_merge($sA, array_slice($ary1, $m, $ary1_length-$m));
        break;
    }
    if($ary1[$m] <= $ary2[$n]){
        $sA[] = $ary1[$m];
        $m++;
    }else{
        $cI += count(array_slice($ary1, $m, $ary1_length-$m));
        $sA[] = $ary2[$n];
        $n++;
    }
}

echo $cI;

