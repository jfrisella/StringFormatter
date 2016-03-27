<?php
/**
*   Ucfirst
*/
namespace Formatter\Calls;

class Ucfirst implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str)
    {
        return ucfirst($str);
    }

}