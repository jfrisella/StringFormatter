<?php
/**
*   Rtrim
*/
namespace Formatter\Calls;

class Rtrim implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str, $characterMask = " \t\n\r\0\x0B")
    {
        return rtrim($str, $characterMask);
    }

}