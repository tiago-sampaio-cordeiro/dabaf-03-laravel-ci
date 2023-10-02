<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
}



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