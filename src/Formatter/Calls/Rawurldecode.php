<?php
/**
*   Rawurldecode
*/
namespace Formatter\Calls;

class Rawurldecode implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str)
    {
        return rawurldecode($str);
    }

}