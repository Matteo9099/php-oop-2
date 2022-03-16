<?php

class Shop {
    public $marca;
    public $tipo;
    public $animale;


    public function __construct($marca, $tipo, $animale) {
        $this->marca = $marca;
        $this->tipo = $tipo;
        $this->animale = $animale;
    }

};