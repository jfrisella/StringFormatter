<?php
/**
*   Tests
*/

include_once "../vendor/autoload.php";

$str = "hello world!";

try{

    $f = \Formatter\StringFormatter::get();
    $f->testCall("hello", "test");

    $c = $f->getCalls();

    echo gettype($c[0]->name) . "<br>";
    echo gettype($c[0]->args) . "<br>";

    var_dump($c[0]->args);
    echo "<br>";
    var_dump(array("hello", "test"));


}catch(\Exception $e){
    echo $e->getMessage();
}


echo "<br>";