<?php
require_once __DIR__ . '/classes/Shop.php';

// inclusioni Alimentazione
require_once __DIR__ . '/classes/alimentazione/Food.php';
require_once __DIR__ . '/classes/alimentazione/obj.php';
// inclusioni Alimentazione
require_once __DIR__ . '/classes/accessori/Games.php';
require_once __DIR__ . '/classes/accessori/obj.php';


// Food
echo "<h1>Food</h1>";
foreach($foods as $food){
    $cibo = new Food($food['marca'],$food['tipo'],$food['animale'],$food['prezzo'],$food['descrizione']);

    echo "<h3>Marca: ". $cibo->marca ."</h3>";
    echo "<p>Tipo: ". $cibo->tipo ."</p>";
    echo "<p>Animale: ". $cibo->animale ."</p>";
    echo "<p>Prezzo: ". $cibo->prezzo ." &euro;</p>";
    echo "<p>Descrizione prodotto: ". $cibo->descrizione ."</p>";
    echo "<hr>";
}

//Games
echo "<h1>Games</h1>";
foreach($games as $game){
    $gioco = new Food($game['marca'],$game['tipo'],$game['animale'],$game['prezzo'],$game['descrizione']);

    echo "<h3>Marca: ". $gioco->marca ."</h3>";
    echo "<p>Tipo: ". $gioco->tipo ."</p>";
    echo "<p>Animale: ". $gioco->animale ."</p>";
    echo "<p>Prezzo: ". $gioco->prezzo ." &euro;</p>";
    echo "<p>Descrizione prodotto: ". $gioco->descrizione ."</p>";
    echo "<hr>";
}


