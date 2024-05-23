<?php
if($_POST){
 $house_name = $_POST["name"];
 $house_square = $_POST["square"];
 $house_rooms = $_POST["rooms"];
 $house_car = $_POST["car"];
 $house_img = $_POST["img"];
 $house_cost = $_POST["cost"];
}

 class House{
    public $name;
    public $square;
    public $rooms;
    public $car;
    public $img;
    public $cost;
    public $id;

    public function __construct($house_name, $house_square, $house_rooms, $house_car, $house_img, $house_cost){
        $this->id = uniqid();
        $this->name = $house_name;
        $this->square = $house_square;
        $this->rooms = $house_rooms;
        $this->car = $house_car;
        $this->img = $house_img;
        $this->cost = $house_cost;
    }
    
    public static function saveHousesToFile($file, $houses){
        $json = json_encode($houses, JSON_PRETTY_PRINT);
        if (file_put_contents($file, $json) === false) {
            die("Error writing JSON data to file.");
        }
    }
}

?>