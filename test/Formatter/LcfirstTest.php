<?php
/**
*   Lcfirst Tests
*/


class LcfirstTest extends PHPUnit_Framework_TestCase
{

    public function testLcfirst()
    {
        $f = \Formatter\StringFormatter::get();
        
        $this->assertEquals(
            "hELLO WORLD",
            $f->lcfirst()->format("HELLO WORLD")
        );
    }

}