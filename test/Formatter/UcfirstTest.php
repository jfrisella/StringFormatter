<?php
/**
*   Ucfirst Tests
*/


class UcfirstTest extends PHPUnit_Framework_TestCase
{

    public function testUcfirst()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "Hello world",
            $f->ucfirst()->format("hello world")
        );
    }

}