<?php

class Alimentazione {
    public $marca;
    public $tipo;
    public $animale;


    public function __construct($marca, $tipo, $animale) {
        $this->marca = $marca;
        $this->tipo = $tipo;
        $this->animale = $animale;
    }

};