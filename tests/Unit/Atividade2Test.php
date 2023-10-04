<?php

namespace Tests\Unit;

use PhpParser\Node\Stmt\Echo_;
use PHPUnit\Framework\TestCase;

final class Atividade2Test extends TestCase
{
    public function idade() {
        $anoNascimento = 1960;
        $anoAtual = date('Y');
        $idade = $anoAtual - $anoNascimento;
        $this->assertSame(35, $idade);
    }
}