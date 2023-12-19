<?php
declare(strict_types=1);
/**
 * Problem: x = 1234 & Y = 5678. Find x*y
 *
 * <p>
 * Solution:
 *  x   = 1234
 *      = 12*10^2 + 34
 *      = a*10^(n/2) + b [ where n = digits in X]
 *
 *  y = c*10^(n/2) + d
 *
 *  x*y = ac.10^n + (ad+bc)*10^(n/2) + bd
 *      = ac.10^n + ((a+b)(c+d)-ac-bd) * 10^(n/2) + bd
 *      So we have to calculate
 *          1) ac = KaratSuba(a,c)
 *          2) bd = KaratSuba(b,d)
 *          3) (a+b)(c+d) = KaratSuba(a+b, c+d)
 * </p>
 */

function karatSuba(int $x, int $y): int
{
    $x = (string)$x;
    $y = (string)$y;
    if (strlen($x) === 1 && strlen($y) === 1) {
        return (int)$x * (int)$y;
    }

    $n = max(strlen($x), strlen($y));

    $hn = (int)ceil($n / 2);

    if($x < $y){
        $x = str_pad($x, $n, '0', STR_PAD_LEFT);
    }else{
        $y = str_pad($y, $n, '0', STR_PAD_LEFT);
    }

    $a = substr($x, 0, -$hn);
    $b = substr($x, -$hn);
    $c = substr($y, 0, -$hn);
    $d = substr($y, -$hn);

    $ac = karatSuba((int)$a, (int)$c);
    $bd = karatSuba((int)$b, (int)$d);
    $adPbc = karatSuba(((int)$a + (int)$b), ((int)$c + (int)$d)) - $ac - $bd;

    return $ac * pow(10, 2 * $hn) + $adPbc * pow(10, $hn) + $bd;
}

$result = karatSuba(12, 12);
echo $result.PHP_EOL;
