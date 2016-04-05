<?php
/**
*   Md5 Tests
*/


class Md5Test extends PHPUnit_Framework_TestCase
{

    public function testMd5()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "5eb63bbbe01eeed093cb22bb8f5acdc3",
            $f->md5()->format("hello world")
        );
    }

}