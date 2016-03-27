<?php
/**
*   Tests
*/

include_once "../vendor/autoload.php";

$str = "hello|world something!";

try{

    $f = \Formatter\StringFormatter::get();
    echo $f->ucwords()->lcfirst()->format($str);

    echo "<br>";

}catch(\Exception $e){
    echo $e->getMessage();
}


echo "<br>";