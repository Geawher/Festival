<?php

include "./config.php";
$base = connect ();

$id = $_GET ['id'];

$requette = "INSERT INTO panier VALUES ($id)";

$lignes = $base->exec($requette);
if  ($lignes == 1)
header ('location:./Home.php');
else 
header ('location:./');

?>