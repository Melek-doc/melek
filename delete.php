<?php
include 'db.php';

if (isset($_GET['NO']) && !empty($_GET['NO']) && is_numeric($_GET['NO'])) {
    $NO = intval($_GET['NO']);
    $stmt = $conn->prepare("DELETE FROM products WHERE NO = ?");
    $stmt->bind_param("i", $NO);

    if ($stmt->execute() === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erreur : " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Invalid request";
}

$conn->close();
?>