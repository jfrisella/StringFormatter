<?php
/**
*   Rawurldecode Tests
*/


class RawurldecodeTest extends PHPUnit_Framework_TestCase
{

    public function testRawurldecode()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "!@#$%^&*() hello world!",
            $f->rawurldecode()->format("%21%40%23%24%25%5E%26%2A%28%29%20hello%20world%21")
        );
    }

}