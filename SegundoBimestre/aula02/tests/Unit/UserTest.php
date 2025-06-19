<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_example2()
    {
        $charliXcx = ['hifn', 'crash', 'brat'];
        $this->assertContains('crash', $charliXcx);
    }

    public function test_example3()
    {
        $partyGirl = 360 + 5;
        $this->assertEquals(365, $partyGirl);
    }
}
