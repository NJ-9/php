<?php

session_start(); 
if(empty($_SESSION["email"])) {
    header('Location: register_form.php');
    exit;
}
$email = $_SESSION["email"]; 


?>
<a href="deconnexion.php">Se déconnecter</a>