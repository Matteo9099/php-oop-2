<?php
require_once __DIR__ . '/../Product.php';

class Food extends Product{

    public $expiration;

    public function __construct($name,$description,$price,$animals,$expiration){

        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->animals = $animals;
        $this->expiration = $expiration;
    }

}