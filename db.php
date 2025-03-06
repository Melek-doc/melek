<?php
$host = "localhost";
$user = "root"; // Change si besoin
$pass = ""; // Mot de passe si nécessaire
$dbname = "product_management";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
}
?>