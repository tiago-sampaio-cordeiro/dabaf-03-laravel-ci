<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase
{
    public function test_Sum_Of_Two_Numbers(): void
    {
        $numero1 = 10;
        $numero2 = 20;
        $resultado = $numero1 + $numero2;


        $this->assertEquals(30, $resultado);
    }
}
