<?php
/**
*   Lowercase Tests
*/


class LowercaseTest extends PHPUnit_Framework_TestCase
{

    public function testLowercase()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "hello world",
            $f->lowercase()->format("HELLO WORLD")
        );
    }

}