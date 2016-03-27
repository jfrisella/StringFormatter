<?php
/**
*   Test Call
*/
namespace Formatter\Calls;

class Testcall implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str, $end = "")
    {
        if(isset($end) && !is_string($end))
        {
            throw new \Exception(__CLASS__ . "::format - end is invalid argument type - must be string", 400);
        }
        return $str . " - " . $end;
    }

}