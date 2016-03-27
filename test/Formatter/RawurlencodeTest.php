<?php
/**
*   Rawurlencode Tests
*/


class RawurlencodeTest extends PHPUnit_Framework_TestCase
{

    public function testRawurlencode()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "%21%40%23%24%25%5E%26%2A%28%29%20hello%20world%21",
            $f->rawurlencode()->format("!@#$%^&*() hello world!")
        );
    }

}