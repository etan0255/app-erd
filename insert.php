<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération sécurisée des entrées
    $nom = htmlspecialchars($_POST['nom']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    if (!$email) {
        exit("Erreur : email invalide !");
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO contacts (nom, email, message) VALUES (?, ?, ?)");
        $stmt->execute([$nom, $email, $message]);
        echo "✅ Contact ajouté avec succès ! <a href='list.php'>Voir les contacts</a>";
    } catch (PDOException $e) {
        exit("Erreur lors de l'insertion : " . $e->getMessage());
    }
} else {
    exit("Méthode invalide.");
}
