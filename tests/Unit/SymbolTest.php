<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SymbolTest extends TestCase
{
    
    public function test_Formato(): void
    {
        $arquivo = arquivo.zip;

        $this->assertStringMatchesFormatFile('arquivo.zip', '$arquivo');
    }
}
