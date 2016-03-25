<?php
/**
*   String Formatter Class
*/
namespace Formatter;

class StringFormatter
{
    
    const NSCALL = "\Formatter\Calls\\";
    private $calls;
    private $throwException = false;
    private $originalWithException = false;

    public function __construct()
    {
        //Maybe add some options
        $this->calls = array();
    }
    
    public static function get()
    {
        return new self();
    }

    public function getCalls()
    {
        return $this->calls;
    }

    public function clear()
    {
        $this->calls = array();
        return $this;
    }

    public function throwException($throw = true)
    {
        $this->throwException = $throw;
        return $this;
    }

    public function originalWithException($original = true)
    {
        $this->originalWithException = $original;
        return $this;
    }

    public function format($str = "")
    {
        if(!is_string($str))
        {
            throw new \Exception(__CLASS__ . "::format - " . "parameter is invalid type, must be string", 400);
        }

        $orginal = $str;

        foreach($this->calls as $call)
        {
            try{

                $str = call_user_func(
                    array(
                        SELF::NSCALL . $call->name, 
                        "format"
                    ), 
                    $str,
                    $call->args
                );

            }catch(\Exception $e){
                if($this->throwException)
                {
                    throw new \Exception($e->getMessage(), $e->getCode());
                }
                if($this->originalWithException)
                {
                    return $original;
                }
            }
        }

        return $str;
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

        return $this;
    }
    
}