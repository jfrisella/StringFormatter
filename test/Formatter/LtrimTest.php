<?php
/**
*   Ltrim Tests
*/


class LtrimTest extends PHPUnit_Framework_TestCase
{

    public function testLtrim()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "hello world  ",
            $f->ltrim()->format("  hello world  ")
        );
    }
    
    public function testLtrimCustomCharacter()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "hello world%%",
            $f->ltrim("%")->format("%%hello world%%")
        );
    }

}