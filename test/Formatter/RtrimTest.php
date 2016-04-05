<?php
/**
*   Rtrim Tests
*/


class RtrimTest extends PHPUnit_Framework_TestCase
{

    public function testRtrim()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "  hello world",
            $f->rtrim()->format("  hello world  ")
        );
    }

    public function testRtrimCustomCharacter()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "%%hello world",
            $f->rtrim("%")->format("%%hello world%%")
        );
    }

}