
<!--
start -  https://youtu.be/5YaF8xTmxs4?t=726
end - https://youtu.be/5YaF8xTmxs4?t=915
-->
<html>
    <head>
        <title><?php echo "PHP Object Oriented Programming" ?> </title>
    </head>
</html>
<?php

class Animal {

    public $name;
    public $favorite_food;
    public $sound;
    public $id;
    public static $number_of_animals = 0;

    const PI = "3.14159";

    function getName() {
        return $this->name;
    }

    function __construct() {
        $this->id = rand(100, 100000);
        Animal::$number_of_animals++;
    }

    public function __destruct() {
        echo $this->name . "is being destroyed";
    }

    function __get($name) {
        echo "Asked for " . $name . "<br/>";
        return $this->name;
    }

    function __set($name, $value) {
        switch ($name) {
            case "name":
                $this->name = $value;
                break;

            case "favorite_food":
                $this->favorite_food = $value;
                break;
            case "sound":
                $this->sound = $value;
                break;

            default :
                echo $name . "Not found";
        }
        echo "Set " . $name . " to " . $value . "<br/>";
    }
    function  run(){
        echo $this->name .  "  runs "  ."<br />";
    }
    
}
class Dog extends Animal{
    function run() {
        echo $this->name . " runs like crazy " ."<br />";
    }
}

$animal_one = new Animal();
$animal_one->name = "Spot";
$animal_one->favorite_food = "Meat";
$animal_one->sound = "Ruff";

echo  $animal_one->name . " says " . $animal_one->sound .
        " give some " . $animal_one->favorite_food . " my id is " .$animal_one->id . " total animals " . 
        Animal::$number_of_animals . "<br /><br />";

echo $animal_one->id;