<?php
require_once __DIR__ . '/classes/Shop.php';
require_once __DIR__ . '/classes/alimentazione/Food.php';

$virtus = new Food('Virtus',"Cibo secco","cane", 14, "cibo secco ricco di proteine e povero di cereali");

$next = new Food('Next',"Cibo umido","gatto", 6.50, "ideate per chi svolge maggiore attività fisica;");


var_dump($virtus);
var_dump($next);