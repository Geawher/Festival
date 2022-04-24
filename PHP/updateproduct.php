<?php

include "./config.php";
$base = connect ();


$id = $_GET ['id'];
$nom = $_POST ['nom'];
$description = $_POST ['description'];
$prix = $_POST ['prix'];
$nb_ticket = $_POST ['nb_ticket'];
$place = $_POST ['place'];
$date = $_POST ['date'];
$time = $_POST ['time'];
$category = $_POST ['category'];
 

$requette = "UPDATE evenement set nom='$nom',descriptionn='$description',price=$prix,nb_ticket=$nb_ticket,place='$place',date_event='$date',time_event='$time',category='$category' WHERE id_event=$id";

$lignes = $base->exec($requette);
if  ($lignes == 1)
header ('location:./all_products.php');

?>