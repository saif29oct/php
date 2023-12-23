<?php
declare(strict_types=1);

function marsExploration(string $s): int{
    $strAry = str_split($s, 3);
    $count = 0;
    foreach($strAry as $str){
        $str = str_split($str);
        if($str[0] !== 'S') $count++;
        if($str[1] !== 'O') $count++;
        if($str[2] !== 'S') $count++;
    }
    return $count;
}

echo marsExploration('SOSSPSSQSSOR');
