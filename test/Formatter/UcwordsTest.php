<?php
/**
*   Ucwords Tests
*/


class UcwordsTest extends PHPUnit_Framework_TestCase
{

    public function testUcwords()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "Hello World",
            $f->ucwords()->format("hello world")
        );
    }
    
    public function testUcwordsDeliminator()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "Hello|World",
            $f->ucwords("|")->format("hello|world")
        );
    }
}