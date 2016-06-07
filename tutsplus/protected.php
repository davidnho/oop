<?php

class MyClass{
    public $prop1 = "I'm a class property!";
    public function __construct() {
        echo "The class ,".__CLASS__.", was initiated! </br>" ;
    }
    public function __destruct() {
        echo "The class, ".__CLASS__.", was destroyed.</br>";
    }
    public function __toString() {
        echo "Using the the __toString method";
        return $this->getProperty();
    }
    public function setProperty($newval){
        $this->prop1 = $newval;
    }
    protected function getProperty(){
        return $this->prop1 . "</br>";
    }
}

class MyOtherClass extends MyClass{
    public function __construct() {
        parent::__construct();
        echo "A new constructor in " .__CLASS__."</br>";
    }
    
    public function newMethod(){
        echo "From a new method in ". __CLASS__ . "</br>";
    }
    
    public function callProtected(){
        return $this->getProperty();
    }
}

//create a new object
$newobj = new MyOtherClass();

////Attempt to call a protected Method-will result in an error
//echo $newobj->getProperty();

//call a protected method from within a public method:
echo $newobj->callProtected();