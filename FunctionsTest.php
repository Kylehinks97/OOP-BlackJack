<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/functions.php';

class FunctionsTest extends TestCase
{
    public function testSwap()
    {
        $a = 5;
        $b = 10;
        $result = swapNumbers($a, $b);

        $this->assertEquals([10, 5], $result);

        $arr1 = [1, 2, 3];
        $arr2 = [4, 5, 6];

        $result2 = swapNumbers($arr1, $arr2);

        $this->assertEquals([[4, 5, 6], [1, 2, 3]], $result2);
    }
}
