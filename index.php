<?php
// User
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/CreditCard.php';
//entertainment
require_once __DIR__ . '/classes/entertainment/ShopToys.php';
require_once __DIR__ . '/classes/entertainment/Toys.php';
// power Supply
require_once __DIR__ . '/classes/powerSupply/ShopFood.php';
require_once __DIR__ . '/classes/powerSupply/Food.php';





$myUser = new User("Matteo", "Morganti", "info@morga.it");

$myCreditCard = new CreditCard();

$myCreditCard->setExpirationMonth('04');
$myCreditCard->setExpirationYear('22');
$myCreditCard->setCvv('123');
$myCreditCard->setNumber('4242424242424242');

$myCreditCard->owner = "Matteo Morganti";

try{
    $myCreditCard->isExpired();
    $myUser->setCreditCard($myCreditCard); 
}catch(Exception $e){
    echo $e->getMessage();
}


foreach($toys as $toy){
    $toyGame = new Toys($toy['name'],$toy['description'],$toy['price'],$toy['animals'],$toy['color']);

    echo "<h3>Nome: ". $toyGame->name ."</h3>";
    echo "<p>Descrizione: ". $toyGame->description ."</p>";
    echo "<p>Prezzo: ". $toyGame->getPrice() ." &euro;</p>";
    echo "<p>Animale: ". $toyGame->getAnimals() ."</p>";
    echo "<p>Colore: ". $toyGame->color ."</p>";
    echo "<hr>";
}

foreach($foods as $food){
    $value = new Food($food['name'],$food['description'],$food['price'],$food['animals'],$food['expiration']);

    echo "<h3>Nome: ". $value->name ."</h3>";
    echo "<p>Descrizione: ". $value->description ."</p>";
    echo "<p>Prezzo: ". $value->getPrice() ." &euro;</p>";
    echo "<p>Animale: ". $value->getAnimals() ."</p>";
    echo "<p>Scadenza: ". $value->expiration ."</p>";
    echo "<hr>";
}





