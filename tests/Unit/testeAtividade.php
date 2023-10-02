<?php

namespace testAtividade;

use PHPUnit\Framework\TestCase;

class testeAtividade extends TestCase
{
    public function testFailure(): void
    {
        $this->assertSame('2204', '220');
    }
}