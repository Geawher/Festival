<?php

include "./config.php";
$base = connect ();

$nom = $_POST ['nom'];
$description = $_POST ['description'];
$prix = $_POST ['prix'];
$nb_ticket = $_POST ['nb_ticket'];
$place = $_POST ['place'];
$date = $_POST ['date'];
$time = $_POST ['time'];
$pic = $_POST ['pic'];
$category = $_POST ['category'];
$requette = "INSERT INTO evenement VALUES (null,'$nom','$description',$prix,$nb_ticket,'$place','$date','$time','$pic','$category')";

$lignes = $base->exec($requette);
if  ($lignes == 1)
header ('location:./all_products.php');
else 
header ('location:./../HTML/add_product.html');

?>