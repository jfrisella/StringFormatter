<?php
/**
*   Trim
*/
namespace Formatter\Calls;

class Trim implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str, $characterMask = " \t\n\r\0\x0B")
    {
        return trim($str, $characterMask);
    }

}