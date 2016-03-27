<?php
/**
*   Uppercase Tests
*/


class UppercaseTest extends PHPUnit_Framework_TestCase
{

    public function testUppercase()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "HELLO WORLD",
            $f->uppercase()->format("hello world")
        );
    }

}