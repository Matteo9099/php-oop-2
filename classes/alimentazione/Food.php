<?php
require_once __DIR__ . '/../Shop.php';

class Food extends Shop{
    public $prezzo;
    public $descrizione;

    public function __construct($marca, $tipo, $animale, $prezzo, $descrizione) {
        
        parent::__construct($marca, $tipo, $animale);

        $this->prezzo = $prezzo;
        $this->descrizione = $descrizione;
    }

    public function setPrezzo($prezzo){
        if(is_numeric($prezzo) && $prezzo >= 0){
            $this->prezzo = $prezzo;
        }
    }
}