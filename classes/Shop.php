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

    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setAnimale($animale){
        $this->animale = $animale;
    }

};