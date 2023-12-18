<?php
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

//function karatSuba(int $x, int $y): int
//{
//    if ($x < 10 || $y < 10) {
//        return $x * $y;
//    }
//    $astr = (string)$x;
//    $bstr = (string)$y;
//    $n = strlen($astr);
//    $hn = ceil($n / 2);
//    $a = (int)(substr($astr, 0, $hn));
//    $b = (int)(substr($astr, $hn, $n));
//    $c = (int)(substr($bstr, 0, $hn));
//    $d = (int)(substr($bstr, $hn, $n));
//
//    echo $a.PHP_EOL." ".$b.PHP_EOL." ".$c.PHP_EOL." ".$d.PHP_EOL;
//    echo '--------------------------'.PHP_EOL;
//    $ac = karatSuba($a, $c);
//
//    $bd = karatSuba($b, $d);
//
//    $adPbc = karatSuba(($a + $b), ($c + $d));
//
//    return $ac * pow(10, $n) + ($adPbc - ($ac + $bd)) * pow(10, $hn) + $bd;
//}
//
//echo karatSuba(123, 123).PHP_EOL;

function karatSuba(int $x, int $y): int
{
    if ($x < 10 || $y < 10) {
        return $x * $y;
    }

    $astr = (string)$x;
    $bstr = (string)$y;
    $n = max(strlen($astr), strlen($bstr));
    $hn = intval(ceil($n / 2));

    $a = (int)(substr($astr, 0, -$hn));
    $b = (int)(substr($astr, -$hn));
    $c = (int)(substr($bstr, 0, -$hn));
    $d = (int)(substr($bstr, -$hn));

    $ac = karatSuba($a, $c);
    $bd = karatSuba($b, $d);
    $adPbc = karatSuba(($a + $b), ($c + $d)) - $ac - $bd;

    return $ac * pow(10, 2 * $hn) + $adPbc * pow(10, $hn) + $bd;
}

// Example usage:
$result = karatSuba(123, 123);
echo $result;
