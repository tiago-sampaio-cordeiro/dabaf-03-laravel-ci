<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SymbolTest extends TestCase
{
    
    public function test_Formato_Email(): void
    {
        $email = "usuario@email.com";

        $this->assertStringMatchesFormatFile('~/example-app/email/format_email', '$email');
    }
}
