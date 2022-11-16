<?php
require "classes/Car.php";
require "classes/Tesla.php";

$e300 = new Car("Toyota");
echo $e300->getName();
echo "<br>";
$e300->setModel("Premio");
echo $e300->getModel();

$tesla = new Tesla();
echo "<br>";
echo $tesla->engine;