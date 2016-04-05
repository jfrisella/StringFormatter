<?php
/**
*   Trim Tests
*/


class TrimTest extends PHPUnit_Framework_TestCase
{

    public function testTrim()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "hello world",
            $f->trim()->format("  hello world  ")
        );
    }

    public function testTrimCustomCharacter()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "hello world",
            $f->trim("%")->format("%%hello world%%")
        );
    }

}