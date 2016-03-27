<?php
/**
*   Rawurlencode
*/
namespace Formatter\Calls;

class Rawurlencode implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str)
    {
        return rawurlencode($str);
    }

}