<?php
declare(strict_types=1);

$str = " Hi! Mr Smith. Good Day.";

$matchName = preg_match('/\bM(r|s|rs)\s\b[A-Z][a-z.]*\b/i',$str, $matches);

//echo "<pre>";
//print_r($matches[0]);

echo "<pre>";
print_r(str_split(str_replace( ' ', '', "Hi I am a good boy"), 1));

