<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SymbolTest extends TestCase
{
    
    public function test_Formato_Email(): void
    {
        $email = "usuario@email.com";

        $format_email = "%s@%s.%s"

        $this->assertMatchesRegularExpression($format_email , $email);
    }
}
