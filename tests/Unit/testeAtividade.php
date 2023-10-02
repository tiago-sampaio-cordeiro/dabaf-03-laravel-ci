<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class testeAtividade extends TestCase
{
    /**
     * A basic test example.
     */
    function somar($numero1, $numero2) {
        return $numero1 + $numero2;
    
    
    // Exemplo de uso da função
    $numero1 = 5;
    $numero2 = 5;
    $resultado = somar($numero1, $numero2);
   
    {
        $this->assertEquals(15,$resultado);
    }
}
}


