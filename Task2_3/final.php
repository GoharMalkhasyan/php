<?php
echo "<h1>Task_3</h1> <br>" ;
require_once"Audi.php";
require_once "Volvo.php";
require_once "Car.php";

$volvo = new Volvo("Volvo", 2004, "blue");
echo $volvo->intro();
echo "<br>";

$volvo = new Volvo("Volvo", 2004, "blue");
echo $volvo->intro();
echo "<br>";
