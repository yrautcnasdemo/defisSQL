<?php
require_once("./src/connect.php");

// Requête SQL pour insérer un nouvel utilisateur
$sql = "INSERT INTO users (first_name, last_name, email, gender, birth_date, country)
VALUES ('Guilain', 'De Meyer', 'GuilainDemeyer@google.com', 'Male', '1984-06-13', 'France');";


// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->execute();

require_once("./src/close.php");

// Redirection vers la page d'accueil
header('Location: ./index.php');
?>
