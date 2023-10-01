<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class calculadora extends TestCase

{

    function somar($numero1, $numero2) {
        $numero1 = 5;
        $numero2 = 5;
        $resultado = $numero1 + $numero2;
        return $resultado;
        $this->assertSame(5, $resultado);
    }

}


