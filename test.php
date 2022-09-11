<?php

declare(strict_types=1);

$ary = [1, 2, [3, 4, [5, 6, [9,], 7, 8], 10, [11, 12]]];

function arraySum($ary)
{
  $sum = 0;
  foreach ($ary as $value) {
    if (is_array($value)) {
      $sum += arraySum($value);
    } else {
      $sum += $value;
    }
  }
  return $sum;
}

echo arraySum($ary);
