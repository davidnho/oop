<?php

class MyClass
{
    public $prop1 = "I'm a classs property";
    public function setProperty($newval){
        $this->prop1 = $newval;
    }
    public function getProperty(){
        return $this->prop1 . "</br>";
    }
}

$obj = new MyClass();
$obj2 = new MyClass();

echo $obj->getProperty();
echo $obj2->getProperty();

$obj->setProperty("I'm a new property value!");
$obj2->setProperty("I belong to the second instance!");

echo $obj->getProperty();
echo $obj2->getProperty();


