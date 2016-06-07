<?php

class MyClass{
    public $prop1 = "I'm a class property";
}

$obj = new MyClass();

//show contents
var_dump($obj);

//print on screen
echo $obj->prop1;

