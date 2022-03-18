<?php
require_once __DIR__ . '/../Product.php';



class Toys extends Product {

    public $color;

    public function __construct($name,$description,$price,$animals,$color){

        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->animals = $animals;
        $this->color = $color;
    }

}


