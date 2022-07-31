<?php

declare(strict_types=1);

$ary = [12, 3];

function mergeArray($ary1, $ary2)
{
    $mergeAry = [];

    $i = 0;
    $j = 0;
    $ary1Count = count($ary1);
    $ary2Count = count($ary2);
    $count = $ary1Count + $ary2Count;

    $k = 0;
    while ($k < $count) {
        if ($j != $ary2Count && ($i == $ary1Count || $ary2[$j] <= $ary1[$i])) {
            $mergeAry[] = $ary2[$j];
            $j++;
        } else {
            $mergeAry[] = $ary1[$i];
            $i++;
        }
        $k++;
    }

    return $mergeAry;
}

function mergeSort($ary)
{
    $arrayElements = count($ary);
    if ($arrayElements > 1) {
        $devidePointer =  intval(($arrayElements + 1) / 2);
        $splitedArray = array_chunk($ary, $devidePointer);
        $subArray1 = $splitedArray[0];
        $subArray2 = $splitedArray[1];
        if (count($subArray1) > 1) {
            $subArray1 = mergeSort($subArray1);
        }
        if (count($subArray2) > 1) {
            $subArray2 = mergeSort($subArray2);
        }
        return mergeArray($subArray1, $subArray2);
    }
}

$sortedArray = mergeSort($ary);

print_r($sortedArray);
