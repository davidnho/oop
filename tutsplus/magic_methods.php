<?php

class MyClass {

    public $prop1 = "I'm a class property";

    public function __construct() {
        //__CLASSS_ is an example of a magic constant
        echo 'The class "', __CLASS__, '" was initiated </br>';
    }

    //When the end of a file is reached, PHP automatically releases all resources..to explicitly destroy the object, use the unset function
    public function __destruct() {
        echo 'The class "',__CLASS__,'"was destroyed.</br>';
    }


    public function setProperty($newval) {
        $this->prop1 = $newval;
    }

    public function getProperty() {
        return $this->prop1 . "</br>";
    }

}

//create a new object
$obj = new MyClass();

//get the value of $prop1
echo $obj->getProperty();

//destroy the object explicitly
unset($obj);

//output a message at the end of the file
echo "End of file .<br>";