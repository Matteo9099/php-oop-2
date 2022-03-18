<?php
require_once __DIR__ . 'User.php';


class UserSigned extends User{

    private $discount = 20;


    // funzione che debba essere un numero maggiore di e minore di 100
    public function setDiscount($number){
        if($number >=0 && $number <= 100) {
            $this->discount = $number;
        }
    }

}

