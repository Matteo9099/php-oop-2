<?php
require_once __DIR__ . '/classes/Shop.php';
require_once __DIR__ . '/classes/alimentazione/Food.php';
require_once __DIR__ . '/classes/accessori/Games.php';


// Food
$virtus = new Food('Virtus',"Cibo secco","cane", 14, "cibo secco ricco di proteine e povero di cereali");
$next = new Food('Next',"Cibo umido","gatto", 6.50, "ideate per chi svolge maggiore attività fisica;");


//Games
$cuccia = new Games('Domus',"Cuccia da interno","cane", 124.99, "Cuccia per cani in legno di pino nordico Domus Ferplast");
$pesce = new Games("Gioco pesce Guizzante per gatto","Gomma","gatto",8.70,"Trixie pesce guizzante farà divertire il tuo gatto e si dimena irregolarmente quando viene toccato. Arresto automatico dopo 15 secondi. Ricarica tramite cavo USB.");


var_dump($virtus);
var_dump($next);

var_dump($cuccia);
var_dump($pesce);