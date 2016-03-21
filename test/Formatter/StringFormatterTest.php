<?php
/**
*   String Formatter Tests
*/


class StringFormatterTest extends PHPUnit_Framework_TestCase
{


    public function testGetInstance()
    {
        $f = \Formatter\StringFormatter::get();

        $this->assertInstanceOf(
            "\Formatter\StringFormatter",
            $f
        );
    }

    public function testAddingCallSetsName()
    {
        $f = \Formatter\StringFormatter::get();
        $f->testCall();
        $name = $f->getCalls();

        $this->assertEquals(
            "Testcall",
            $name[0]->name
        );
    }

    public function testAddingCallsSetsArgs()
    {
        $f = \Formatter\StringFormatter::get();
        $f->testCall("arguments", "test");
        $args = $f->getCalls();

        $this->assertEquals(
            array("arguments", "test"),
            $args[0]->args
        );
        
    }

}