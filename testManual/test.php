<?php
/**
*   Tests
*/

include_once "../vendor/autoload.php";

$str = "hello|world something!";
echo rawurlencode("!@#$%^&*() hello world!");
exit;

try{

    $f = \Formatter\StringFormatter::get();
    echo $f->ucwords()->lcfirst()->format($str);

    echo "<br>";

}catch(\Exception $e){
    echo $e->getMessage();
}


echo "<br>";