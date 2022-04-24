<?php

include "./config.php";
$base = connect ();

$nom = $_POST ['nom'];
$prenom = $_POST ['prenom'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$sexe = $_POST['gender'];
$birth = $_POST['datenaiss'];
$requette = "INSERT INTO personne VALUES (null,'$nom','$prenom','$email','$password','$sexe','$birth','user')";

$lignes = $base->exec($requette);
if  ($lignes == 1)
header ('location:');
else 
header ('location:./../HTML/inscription.html');

?>