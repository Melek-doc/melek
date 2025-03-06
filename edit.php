<?php
include 'db.php';

$NO = $_GET['NO'];
$product = $conn->query("SELECT * FROM products WHERE NO=$NO")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $details = $_POST['details'];
    $conn->query("UPDATE products SET name='$name', details='$details' WHERE NO=$NO");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Produit</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="container mt-4">

<h2>Modifier un Produit</h2>

<form method="POST">
    <div class="mb-3">
        <label>Nom</label>
        <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($product['name']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Détails</label>
        <textarea name="details" class="form-control" required><?= htmlspecialchars($product['details']) ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
    <a href="index.php" class="btn btn-secondary">Retour</a>
</form>

</body>
</html>
