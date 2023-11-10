<?php 

function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;

    return [$a, $b];
}