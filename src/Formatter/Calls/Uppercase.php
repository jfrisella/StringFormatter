<?php
/**
*   Uppercase
*/
namespace Formatter\Calls;

class Uppercase implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str)
    {
        return strtoupper($str);
    }

}