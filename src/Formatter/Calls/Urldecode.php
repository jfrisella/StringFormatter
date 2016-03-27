<?php
/**
*   Urldecode
*/
namespace Formatter\Calls;

class Urldecode implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str)
    {
        return urldecode($str);
    }

}