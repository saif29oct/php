<?php
declare(strict_types=1);

function flipBits1($n) {
    $flippedBits = ~$n & 0xFFFFFFFF;  // Perform bitwise NOT and mask with 32 ones
    return $flippedBits;
}

function flipBits2($n) {
    $flippedBits = 0xFFFFFFFF - $n;
    return $flippedBits;
}

function flipBits3($n) {
    $flippedBits = 0;
    for ($i = 0; $i < 32; $i++) {
        $flippedBits <<= 1;
        $flippedBits |= ($n & 1) ^ 1;
        $n >>= 1;
    }
    return $flippedBits;
}
