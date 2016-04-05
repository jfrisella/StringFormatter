<?php
/**
*   Ltrim
*/
namespace Formatter\Calls;

class Ltrim implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str, $characterMask = " \t\n\r\0\x0B")
    {
        return ltrim($str, $characterMask);
    }

}