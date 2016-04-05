<?php
/**
*   Sha1
*/
namespace Formatter\Calls;

class Sha1 implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str)
    {
        return sha1($str);
    }

}