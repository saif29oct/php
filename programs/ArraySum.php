<?php
declare(strict_types=1);

$ary1 = [1,[23, 45, 23, [10, 345, 34 , 23], 34], [12, 56]];

function arraySum(array $ary): int
{
    $sum = 0;
    foreach ($ary as $value){
        if(is_array($value)){
            $sum += arraySum($value, $sum);
        }else{
            $sum += $value;
        }
    }
    return $sum;
}

function arraySum1(array $ary): int
{
    return array_reduce($ary, fn ($sum, $val) => is_array($val) ? $sum + arraySum1($val) : $sum + $val);
}

echo arraySum1($ary1);
