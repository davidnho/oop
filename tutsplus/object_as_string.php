<?php
//Note: toString is another example of a magic method
class MyClass {

    public $prop1 = "I'm a class property ";

    public function __construct() {
        //__CLASSS_ is an example of a magic constant
        echo 'The class "', __CLASS__, '" was initiated </br>';
    }

    //When the end of a file is reached, PHP automatically releases all resources..to explicitly destroy the object, use the unset function
    public function __destruct() {
        echo 'The class "',__CLASS__,'"was destroyed.</br>';
    }

    public function __toString() {
        echo "Using the toString method";
        return $this->getProperty();
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

//attempt to output the object as string without adding the __toString function would result on an error
echo $obj;

//destroy the object explicitly
unset($obj);

//output a message at the end of the file
echo "End of file .<br>";