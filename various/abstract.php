<?php

//http://www.techflirt.com/tutorials/oop-in-php/abstract-classes-interface.html

abstract class testParent {

    public function abc() {
//body of your funciton
    }

}

class testChild extends testParent {

    public function xyz() {
//body of your function
    }

}

$a = new testChild();
