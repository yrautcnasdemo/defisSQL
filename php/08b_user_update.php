<?php
require_once("./src/connect.php");

// Requête SQL pour modifier l'adresse e-mail du nouvel utilisateur
$sql = "UPDATE users SET email = 'Yrautcnas@google.com' ORDER BY id DESC LIMIT 1;";


// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->execute();

require_once("./src/close.php");

// Redirection vers la page d'accueil
header('Location: ./index.php');
?>
