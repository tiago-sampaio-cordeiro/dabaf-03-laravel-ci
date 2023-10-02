<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class testeAtividade extends TestCase
{
    public function testFailure(): void
    {
        $this->assertSame('2204', '220');
    }
}