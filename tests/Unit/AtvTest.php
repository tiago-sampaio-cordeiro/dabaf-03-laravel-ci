<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

final class AtvTest extends TestCase
{
    public function idade()
     {
        $anoNascimento = 1960;
        $anoAtual = 2023;
        $idade = $anoAtual - $anoNascimento;

        $this->assertSame(35, $idade);
    }
}