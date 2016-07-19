<?php

function greatestCommonDivisor ($a, $b) {
    $r = 0;
    do{
        $r = $a % $b;
        $a = $b;
        $b = $r;
    } while ($b != 0);
    return $a;
}

function leastCommonMultiple ($a, $b) {
    ($a * $b)/greatestCommonDivisor($a, $b);
}

for ($i = 1; $i <= 20; $i++) {
    echo(greatestCommonDivisor($i, $i + 1));
    echo leastCommonMultiple($i, $i+1);
}
