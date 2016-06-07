
<!--start - https://youtu.be/5YaF8xTmxs4?t=213
end - https://youtu.be/5YaF8xTmxs4?t=726-->
<html>
    <head>
        <title><?php echo "PHP Object Oriented Programming" ?> </title>
    </head>
</html>
<?php

class Animal {

    protected $name;
    protected $favorite_food;
    protected $sound;
    protected $id;
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
                echo $name ."Not found";
        }
        echo "Set " . $name . " to " . $value . "<br/>";
    }

}
