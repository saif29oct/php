<?php
function makeDiamond(int $arrayLength, int $mid, int $diamondCount=1): void{
    $spaceArray = array_fill(0,$mid, chr(32));
    $diamondArray = array_fill($mid, $diamondCount, '*');
    $mid = $mid - 1;
    $diamondCount += 2;
    echo implode('',$spaceArray).implode('',$diamondArray).implode('',$spaceArray)."\n";
    if($mid === 0){
        echo implode('',array_fill(0, $arrayLength, '*'));
    }else{
        makeDiamond($arrayLength, $mid, $diamondCount);
    }
}

echo "<pre>";
makeDiamond(5, 2);