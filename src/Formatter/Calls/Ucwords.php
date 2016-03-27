<?php
/**
*   Ucfirst
*/
namespace Formatter\Calls;

class Ucwords implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str, $del = " \t\r\n\f\v")
    {
        return ucwords($str, $del);
    }

}