<?php
/**
*   Urlencode
*/
namespace Formatter\Calls;

class Urlencode implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str)
    {
        return urlencode($str);
    }

}