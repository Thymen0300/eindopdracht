<?php

require_once ('figuur.class.php');
require_once ('cilinder.class.php');
require_once ('vierkant.class.php');
require_once ('mijnbureau.class.php');
require_once ('mijnlaptop.class.php');



$vierkant = new vierkant(5,5);
$cilinder = new cilinder(10,3);
$mijn_bureau = new mijnbureau(189,90);
$mijn_laptop = new mijnlaptop(50,35);

echo $vierkant->oppervlakteBerekenen();
"<br>";
echo $cilinder->oppervlakteBerekenen();
"<br>";
echo $mijn_bureau->oppervlakteBerekenen();
"<br>";
echo $mijn_laptop->oppervlakteBerekenen();

?>
