<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

final class AtividadeTest extends TestCase
{
    public function testSoma()
    {
        $num1 = 10;
        $num2 = 15;
        $resultado = $num1 + $num2;

        $this->assertEquals(10, $resultado);
    }

    public function testIdade()
    {
       $anoNascimento = 1960;
       $anoAtual = date('Y');
       $idade = $anoAtual - $anoNascimento;

       $this->assertSame(40, $idade);
    }

    public function testDesconto()
    {
        $preco = 100;
        $desconto = 10;
        $precoFinal = $preco - ($preco * ($desconto/100));

        $this->assertTrue($precoFinal = 90);
    }

}
