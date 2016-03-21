<?php
/**
*   String Formatter Class
*/
namespace Formatter;

class StringFormatter
{
    
    const NSCALL = "\Formatter\Calls\\";
    private $calls;

    public function __construct()
    {
        //Maybe add some options
        $this->calls = array();
    }
    
    public static function get()
    {
        return new self();
    }

    public function clear()
    {
        $this->calls = array();
    }

    public function getCalls()
    {
        return $this->calls;
    }

    public function format($str = "", $throwException = false)
    {
        if(!is_string($str))
        {
            throw new \Exception(__CLASS__ . "::format - " . "parameter is invalid type, must be string", 400);
        }

        foreach($this->calls as $call)
        {
            
        }
    }

    public function __call($name, $args)
    {
        //Change name so it is capitalized
        $name = ucfirst(strtolower($name));

        //Test if class exists
        if(!class_exists(SELF::NSCALL . $name))
        {
            throw new \Exception(__CLASS__ . "::" . $name . " - method does not exist", 400);
        }

        $t = new \stdClass();
        $t->name = $name;
        $t->args = $args;
        $this->calls[] = $t;
    }
    
}