<?php
/*
 * Problem: x = 1234 & Y = 5687. Find x*y
 *
 * Solution:
 *  x   = 1234
 *      = 12*10^2 + 34
 *      = a*10^(n/2) + b [ where n = dgits in X]
 *
 *  y = c*10^(n/2) + d
 *
 *  x*y = ac.10^n + (ad+bc)*10^(n/2) + bd
 *      = ac.10^n + ((a+b)(c+d)-ac-bd) * 10^(n/2) + bd
 *      So we have to calculate
 *          1) ac = KaratSuba(a,c)
 *          2) bd = KaratSuba(b,d)
 *          3) (a+b)(c+d) = KaratSuba(a+b, c+d)
 */

function karatSuba(int $x, int $y): int
{
    if ($x < 10 || $y < 10) {
        return $x * $y;
    }
    $astr = (string)$x;
    $bstr = (string)$y;
    $nx = strlen($astr);
    $ny = strlen($bstr);
    $a = (int)(substr($astr, 0, intval(($nx + 1) / 2)));
    $b = (int)(substr($astr, intval(($nx + 1) / 2), $nx));
    $c = (int)(substr($bstr, 0, intval(($ny + 1) / 2)));
    $d = (int)(substr($bstr, intval(($ny + 1) / 2), $ny));

    $ac = karatSuba($a, $c);

    $bd = karatSuba($b, $d);

    $adPbc = karatSuba(($a + $b), ($c + $d));

    $mul = $ac * pow(10, $nx) + ($adPbc - ($ac + $bd)) * pow(10, $nx / 2) + $bd;

    return $mul;
}

echo karatSuba(12, 10);
