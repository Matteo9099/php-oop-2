<?php
require_once __DIR__ . '/alimentazione.php';

class Food extends Alimentazione{
    public $prezzo;
    public $descrizione;

    public function __construct($marca, $tipo, $animale, $prezzo, $descrizione) {
        
        parent::__construct($marca, $tipo, $animale);

        $this->prezzo = $prezzo;
        $this->descrizione = $descrizione;
    }
}