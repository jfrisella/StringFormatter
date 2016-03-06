<?php
/**
*   String Formatter Class
*/
namespace Formatter;

class StringFormatter
{
    
    const CLASSNAME = "StringFormatter";
    private static final $UTIL = array(
        "stateShort" => ["AK", "AL", "AR", "AZ", "CA", "CO", "CT", "DC", "DE", "FL", "GA", "GU", "HI", "IA", "ID", "IL", "IN", "KS", "KY", "LA", "MA", "MD", "ME", "MI", "MN", "MO", "MS", "MT", "NC", "ND", "NE", "NH", "NJ", "NM", "NV", "NY", "OH", "OK", "OR", "PA", "PR", "RI", "SC", "SD", "TN", "TX", "UT", "VA", "VI", "VT", "WA", "WI", "WV", "WY"],
        "stateLong" => ["alaska", "alabama", "arkansas", "arizona", "california", "colorado", "connecticut", "district of columbia", "delaware", "florida", "georgia", "guam", "hawaii", "iowa", "idaho", "illinois", "indiana", "kansas", "kentucky", "louisiana", "massachusetts", "maryland", "maine", "michigan", "minnesota", "missouri", "mississippi", "montana", "north carolina", "north dakota", "nebraska", "new hampshire", "new jersey", "new mexico", "nevada", "new york", "ohio", "oklahoma", "oregon", "pennsylvania", "puerto rico", "rhode island", "south carolina", "south dakota", "tennessee", "texas", "utah", "virginia", "virgin islands", "vermont", "washington", "wisconsin", "west virginia", "wyoming"]
    );

    /**
    *   Throw Exceptions
    *
    *   @param boolean
    */
    private $throw = false;
    
    /**
    *   Original String
    *
    *   @param string
    */
    private $originalStr;
    
    /**
    *   Current Parsed String
    *
    *   @param string
    */
    private $str;
    
    
  
    
    
    public function __construct($string = "")
    {
        if(!is_string($string)){
            throw new \InvalidArgumentException(self::CLASSNAME . " : construct : string is invalid format", 400);
        }
        $this->originalStr = $string;
        $this->str = $string;
    }
    
    public function format()
    {
        return $this->str;
    }
    public function throwException()
    {
        $this->throw = true;
        return $this;
    }
    public function urlDecode()
    {
        $this->str = urldecode($this->str);
        return $this;
    }
    public function urlEncode()
    {
        $this->str = urlencode($this->str);
        return $this;
    }
    public function rawUrlDecode()
    {
        $this->str = rawurldecode($this->str);
        return $this;
    }
    public function rawUrlEncode()
    {
        $this->str = rawurlencode($this->str);
        return $this;
    }
    public function parse($callable)
    {
        if(!is_callable($callable)){
            if($this->throw){
                throw new \InvalidArgumentException(self::CLASSNAME . " : parse : parameter is not callable", 400);
            }
        }else{
            $this->str = $callable();
        }
        return $this;
    }
    public function number($decimals = 0)
    {
        $decimals = (is_int($decimals)) ? $decimals : 0;
        try{
            $str = preg_replace("/[^0-9.]/", "", $this->str);
            $str = number_format(floatval($str), $decimals);
            $this->str = $str;
        }catch(\Exception $e){
            if($this->throw){
                throw new \Exception(self::CLASSNAME . " : number : " . $e->getMessage(), 400);
            }
        }
        return $this;
    }
    public function money()
    {
        $this->number(2);
        $this->str = "$" . $this->str;
        return $this;
    }
    public function split($del)
    {
        if(!isset($del) || !is_string($del)){
            if($this->throw){
                throw new \InvalidArgumentException(self::CLASSNAME . " : split : deliminator is not valid format", 400);
            }
        }else{
            try{
                $str = explode($del, $this->str);
                $this->str = $str;
            }catch(\Exception $e){
                if($this->throw){
                    throw new \Exception(self::CLASSNAME . " : split : " . $e->getMessage(), 400);
                }
            }
        }
        return $this;
    }
    public function stateLong()
    {
        $str = $this->str;
        $stateShort = self::$CONST["stateShort"];
        $stateLong = self::$CONST["stateLong"];
        if(!in_array(strtoupper($str), $stateShort)){
            if($this->throw){
                throw new \InvalidArgumentException(self::CLASSNAME . " : stateLong : state short is not a valid format", 400);
            }
        }else{
            $index = array_search(strtoupper($str), $stateShort);
            $this->str = $stateLong[$index];
        }
        return $this;
    }
    public function stateShort()
    {
        $str = $this->str;
        $stateShort = self::$CONST["stateShort"];
        $stateLong = self::$CONST["stateLong"];
        if(!in_array(strtolower($str), $stateLong)){
            if($this->throw){
                throw new \InvalidArgumentException(self::CLASSNAME . " : stateLong : state long is not a valid format", 400);
            }
        }else{
            $index = array_search(strtolower($str), $stateLong);
            $this->str = $stateShort[$index];
        }
        return $this;
    }
    public function percent(){
        $this->number(0);
        $this->str = $this->str . "%";
        return $this;
    }
    public function length($length, $addEllipse = false){
        if(!is_int($length)){
            if($this->throw){
                throw new \InvalidArgumentException(self::CLASSNAME . " : charLength: length is invalid format", 400);
            }
        }else{
            try{
                $len = strlen($this->str);
                $str = substr($this->str, 0, $length);
                $str .= ($addEllipse && $len > strlen($str)) ? "..." : "";
                $this->str = $str;
            }catch(\Exception $e){
                if($this->throw){
                    throw new \Exception(self::CLASSNAME . " : length : " . $e->getMessage(), 400);
                }
            }
        }
        return $this;
    }
    

    public function phone(){
        //first test if correct format
        $str = preg_replace("/[^0-9]/i", "", $this->str);
        $len = strlen($str);
        if(!in_array($len, array(7,10,11)) || ($len === 11 && $str[0] !== "1")){
            if($this->throw){
                throw new \InvalidArgumentException("StringFormatter : phone : phone is invalid format", 400);
            }
        }else{
            if($len === 7){
                $str = preg_replace("/([0-9]{3})\.?([0-9]{4})/", "$1-$2", $str);
            }else if($len === 10 || $len === 11){
                $str = ($len === 11) ? substr($str, 1) : $str;
                $str = preg_replace("/([0-9]{3})\.?([0-9]{3})\.?([0-9]{4})/", "($1) $2-$3", $str);
            }
            $this->str = $str;
        }
        return $this;
    }
    public function lengthByWord(){
        
        return $this;
    }
    
}