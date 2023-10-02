<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class testAtividade extends TestCase
{
    /**
     * A basic test example.
     */
    public function soma(): void
    {
        $number1 = 5;
        $number2 = 5;
        $resultado = $number1 + $number2;

        $this->assertSame(15, $resultado);
    }
}