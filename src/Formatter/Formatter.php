<?php
/**
*   Formatter Class
*/
namespace Formatter;

class Formatter
{
    
    public function __construct(){
        //Maybe add some options
    }
    
    public function string($string = ""){
        if(!is_string($string)){
            throw new \InvalidArgumentException("Formatter : string : string is invalid format", 400);
        }
        return new \Formatter\StringFormatter($string);
    }
    
}