<?php

//A property or method declared private is accessible only from within the class that defines it. 

class MyClass {

    public $prop1 = "I'm a class property!";

    public function __construct() {
        echo "The class ," . __CLASS__ . ", was initiated ";
    }

    public function __destruct() {
        echo "The class ," . __CLASS__ . ", was initiated! </br>";
    }

    public function __toString() {
        echo "Using __toString method";
        return $this->getProperty;
    }

    public function setProperty($newval) {
        $this->prop1 = $newval;
    }

    private function getProperty() {
        return $this->prop1 . "</br>";
    }

}


class MyOtherClass extends MyClass {

    public function __construct() {
        parent::__construct();
    }

    public function newMethod() {
        echo "From a new method in  " . __CLASS__ . ".</br>";
    }

    public function callProtected() {
        return $this->getProperty();
    }

}


// Create a new object
$newobj = new MyOtherClass;
 
// Attempting to call a private method even from a subclass still throws an error
echo $newobj->callProtected();
 
?>