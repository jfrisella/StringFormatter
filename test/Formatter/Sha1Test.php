<?php
/**
*   Sha1 Tests
*/


class Sha1Test extends PHPUnit_Framework_TestCase
{

    public function testSha1()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "2aae6c35c94fcfb415dbe95f408b9ce91ee846ed",
            $f->sha1()->format("hello world")
        );
    }

}