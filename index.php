<?php
require_once __DIR__ . '/classes/Shop.php';

// inclusioni Alimentazione
require_once __DIR__ . '/classes/alimentazione/Food.php';
require_once __DIR__ . '/classes/alimentazione/obj.php';

require_once __DIR__ . '/classes/accessori/Games.php';


// Food
echo "<h1>Food</h1>";
foreach($foods as $food){
    $cibo = new Food($food['marca'],$food['tipo'],$food['animale'],$food['prezzo'],$food['descrizione']);

    echo "<h3>Marca: ". $cibo->marca ."</h3>";
    echo "<p>Tipo: ". $cibo->tipo ."</p>";
    echo "<p>Animale: ". $cibo->animale ."</p>";
    echo "<p>Prezzo: ". $cibo->prezzo ." &euro;</p>";
    echo "<p>Descrizione prodotto: ". $cibo->descrizione ."</p>";
    
}

//Games
$cuccia = new Games('Domus',"Cuccia da interno","cane", 124.99, "Cuccia per cani in legno di pino nordico Domus Ferplast");
$pesce = new Games("Gioco pesce Guizzante per gatto","Gomma","gatto",8.70,"Trixie pesce guizzante farà divertire il tuo gatto e si dimena irregolarmente quando viene toccato. Arresto automatico dopo 15 secondi. Ricarica tramite cavo USB.");


