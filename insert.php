<?php
// insert.php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("INSERT INTO contacts (nom, email) VALUES (?, ?)");
    $stmt->execute([$nom, $email]);

    echo "Utilisateur ajouté avec succès !";
} else {
    echo "Méthode invalide.";
}
?>
