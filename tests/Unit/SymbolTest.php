<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SymbolTest extends TestCase
{
    
    public function test_Formato_Email(): void
    {
        $email = "usuarioemail.com";

        $format_email = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

        $this->assertMatchesRegularExpression($format_email , $email);
    }
}
