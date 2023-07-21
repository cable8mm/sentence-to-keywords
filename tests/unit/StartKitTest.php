<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class StartKitTest extends TestCase
{
    /** @test */
    public function testGetProjectVersion()
    {
        $this->assertEquals(Cable8mm\SentenceToWords\StartKit::VER, '1.24');
    }
}
