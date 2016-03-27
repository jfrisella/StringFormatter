<?php
/**
*   Urlencode Tests
*/


class UrlencodeTest extends PHPUnit_Framework_TestCase
{

    public function testUrlencode()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "%21%40%23%24%25%5E%26%2A%28%29+hello+world%21",
            $f->urlencode()->format("!@#$%^&*() hello world!")
        );
    }

}