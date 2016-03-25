<?php
/**
*   Test Call
*/
namespace Formatter\Calls;

class Testcall implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str, $args = array())
    {
        if(!isset($args[0]))
        {
            throw new \InvalidArgumentException(__CLASS__ . "::format - missing argument 0", 400);
        }
        return $str . " - " . $args[0];
    }

}