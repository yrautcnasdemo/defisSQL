<?php
require_once("./src/connect.php");

// Requête SQL pour supprimer le nouvel utilisateur
$sql = "";


// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->execute();
// Stockage du résultat dans un tableau associatif [personne1, personne2, ...]
$result = $query->fetchAll(PDO::FETCH_ASSOC);

require_once("./src/close.php");
header('Location: ./index.php');
?>
