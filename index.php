<?php
require_once __DIR__ . '/classes/Shop.php';

// inclusioni Alimentazione
require_once __DIR__ . '/classes/alimentazione/Food.php';
require_once __DIR__ . '/classes/alimentazione/obj.php';
// inclusioni Alimentazione
require_once __DIR__ . '/classes/accessori/Games.php';
require_once __DIR__ . '/classes/accessori/obj.php';
// inclusioni Cura e salute
require_once __DIR__ . '/classes/Benessere/health.php';
require_once __DIR__ . '/classes/Benessere/obj.php';


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
    $gioco = new Games($game['marca'],$game['tipo'],$game['animale'],$game['prezzo'],$game['descrizione']);

    echo "<h3>Marca: ". $gioco->marca ."</h3>";
    echo "<p>Tipo: ". $gioco->tipo ."</p>";
    echo "<p>Animale: ". $gioco->animale ."</p>";
    echo "<p>Prezzo: ". $gioco->prezzo ." &euro;</p>";
    echo "<p>Descrizione prodotto: ". $gioco->descrizione ."</p>";
    echo "<hr>";
}

//Cura e salute
echo "<h1>Cura e Benessere</h1>";
foreach($healths as $health){
    $cura = new Health($health['marca'],$health['tipo'],$health['animale'],$health['prezzo'],$health['descrizione']);

    echo "<h3>Marca: ". $cura->marca ."</h3>";
    echo "<p>Tipo: ". $cura->tipo ."</p>";
    echo "<p>Animale: ". $cura->animale ."</p>";
    echo "<p>Prezzo: ". $cura->prezzo ." &euro;</p>";
    echo "<p>Descrizione prodotto: ". $cura->descrizione ."</p>";
    echo "<hr>";
}


