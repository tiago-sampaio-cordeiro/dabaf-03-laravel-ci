<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class calculadora extends TestCase

{    
    public function test_soma_de_variaveis()
    {
        $number1 = 5;
        $number2 = 5;
        $resultado = $number1 + $number2;
        $this->assertSame(10, $resultado);
    }
}