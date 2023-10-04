<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

final class Atividade2Test extends TestCase
{
    public function idade(): void
     {
        $anoNascimento = 1960;
        $anoAtual = date('Y');
        $idade = $anoAtual - $anoNascimento;
        $this->assertSame(35, $idade);
    }
}