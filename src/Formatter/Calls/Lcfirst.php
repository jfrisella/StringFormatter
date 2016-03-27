<?php
/**
*   Lcfirst
*/
namespace Formatter\Calls;

class Lcfirst implements \Formatter\Calls\CallsInterface
{
    
    public static function format($str)
    {
        return lcfirst($str);
    }

}