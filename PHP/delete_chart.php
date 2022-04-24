<?php

include "./config.php";
$base = connect ();

$id = $_GET ['id'];

$requette = "DELETE FROM panier where id=$id";

$lignes = $base->exec($requette);
if  ($lignes == 1)
header ('location:./chart.php');
else 
header ('location:./');

?>