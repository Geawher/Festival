<?php

include "./config.php";
$base = connect ();

$id = $_GET ['id'];

$requette = "DELETE FROM evenement WHERE id_event=$id";

$lignes = $base->exec($requette);

header ('location:./all_products.php');

?>