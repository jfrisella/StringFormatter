<?php
/**
*   Urldecode Tests
*/


class UrldecodeTest extends PHPUnit_Framework_TestCase
{

    public function testUrldecode()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "!@#$%^&*() hello world!",
            $f->urldecode()->format("%21%40%23%24%25%5E%26%2A%28%29+hello+world%21")
        );
    }

}