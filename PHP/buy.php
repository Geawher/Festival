<?php

include "./config.php";
$base = connect ();

$id = $_GET ['id'];
$qte = $_POST ['a'];
$nb_ticket=$_GET ['nb'];

$requette = "UPDATE evenement set nb_ticket=$nb_ticket-$qte WHERE id_event=$id";
echo "UPDATE evenement set nb_ticket=$nb_ticket-$qte WHERE id_event=$id";
$lignes = $base->exec($requette);

$requette = "DELETE FROM panier where id=$id";
echo "DELETE FROM panier where id=$id";
$lignes = $base->exec($requette);


header ('location:./Home.php');

?>