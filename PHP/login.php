<?php

include "./config.php";
$base = connect ();

$email = $_POST ['email'];
$password = $_POST ['password'];
//row_count
//deplace image vers assests + stocker nom.extention de l'image dans la base de donner
$requette = "SELECT role from personne where email='$email' and password='$password'";
$data =$base->query($requette);
$role=$data->fetchObject();
if ($role==null)
header('location:./../HTML/login.html');
else if ($role->role=="admin")
header ('location:./all_products.php');
else 
header('location:./Home.php?id=ALL');

?>