<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class AtividadeTest extends TestCase
{
    public function desconto(): void
    {
        $preco = 100;
        $desconto = 10;
        $precoFinal = $preco - ($preco * ($desconto/100));
        $this->assertTrue($precoFinal > 0);
    }
}