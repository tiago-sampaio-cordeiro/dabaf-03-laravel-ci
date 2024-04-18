<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
   
    public function test_To_Check_If_The_Element_Exists_Within_The_Array(): void
    {
        $numbers = [1,2,3,4];

        $this->assertContains(2, $numbers);
    }
}
