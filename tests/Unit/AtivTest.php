<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

final class AtivTest extends TestCase
{
    public function desconto()
    {
        $preco = 100;
        $desconto = 10;
        $precoFinal = $preco - ($preco * ($desconto/100));
        $this->assertTrue($precoFinal > 0);
    }
}