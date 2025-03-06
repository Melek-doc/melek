<<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $details = $_POST['details'];
    $conn->query("INSERT INTO products (name, details) VALUES ('$name', '$details')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Produit</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="container mt-4">

<h2>Ajouter un Produit</h2>

<form method="POST">
    <div class="mb-3">
        <label>Nom</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Détails</label>
        <textarea name="details" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Ajouter</button>
    <a href="index.php" class="btn btn-secondary">Retour</a>
</form>

</body>
</html>
