<?php
/**
*   Lowercase
*/
namespace Formatter\Calls;

class Lowercase implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str)
    {
        return strtolower($str);
    }

}