<?php
require_once "animal.php";
require_once "frog.php";
require_once "ape.php";

$sheep = new animal("shaun");
echo "Name:" . $sheep->name . "<br>";
echo "legs:" .$sheep->legs . "<br>";
echo "cold blooded: " .  $sheep->cold_blood . "<br>";

echo "<br>";

$sungokong = new frog("Buduk"); 
echo "Name: ". $sungokong->name . "<br>";
echo "Legs ". $sungokong->legs . "<br>";
echo "cold blooded: ". $sungokong->cold_blood . "<br>";
echo "Jump : "; 
$sungokong->jump();

echo "<br><br>";

$kodok = new ape("Kera sakti");
echo "Name: ". $kodok->name . "<br>";
echo "legs: ". $kodok->legs . "<br>";
echo "cold blooded: ". $kodok->cold_blood . "<br>";
echo "Yell : ";
$kodok->yell();


?>

