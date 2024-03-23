<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SymbolTest extends TestCase
{
    
    public function test_Contain_@_In_Email(): void
    {
        $email = 'usuario@example.com';

        $this->assertStringContainsString('com', $email);
    }
}
