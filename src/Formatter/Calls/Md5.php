<?php
/**
*   Md5
*/
namespace Formatter\Calls;

class Md5 implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str)
    {
        return md5($str);
    }

}