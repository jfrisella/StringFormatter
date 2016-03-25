<?php
/**
*   Tests
*/

include_once "../vendor/autoload.php";

$str = "hello world!";

try{

    $f = \Formatter\StringFormatter::get();
    echo $f->testCall()->format($str);

    echo "<br>";

}catch(\Exception $e){
    echo $e->getMessage();
}


echo "<br>";