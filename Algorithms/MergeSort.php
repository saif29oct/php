<?php

declare(strict_types=1);

function mergeArray(array $ary1, array $ary2): array
{
    $mergeAry = [];

    $i = 0;
    $j = 0;
    $ary1Count = count($ary1);
    $ary2Count = count($ary2);
    $count = $ary1Count + $ary2Count;

    $k = 0;
    while ($k < $count) {
        if ($j != $ary2Count && ($i == $ary1Count || ($ary2[$j] <= $ary1[$i]))) {
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

function mergeSort(array $ary): array
{
    $arrayElements = count($ary);
    if ($arrayElements === 1) return $ary;
    
    if ($arrayElements > 1) {
        $devidePointer = intval(($arrayElements + 1) / 2);
        $splitedArray = array_chunk($ary, $devidePointer);
        $subArray1 = $splitedArray[0];
        $subArray2 = $splitedArray[1];
        if (count($subArray1) > 1) {
            $subArray1 = mergeSort($subArray1);
        }
        if (count($subArray2) > 1) {
            $subArray2 = mergeSort($subArray2);
        }
        return mergeArray($subArray1, $subArray2); //logN(base 2)
    }
 return $ary;
}

$ary = [12, 1, 5, 23, 45, 3];
$sortedArray = mergeSort($ary);

print_r($sortedArray);
