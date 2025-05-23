<?php
include 'config.php';

// Vérifie si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sécuriser les entrées utilisateur
    $nom = htmlspecialchars($_POST['nom']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Vérifie l'email
    if (!$email) {
        exit("Email invalide.");
    }

    // Insérer dans la BDD
    $stmt = $pdo->prepare("INSERT INTO contacts (nom, email, message) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $email, $message]);

    echo "Votre message a été envoyé avec succès !";
} else {
    echo "Erreur : méthode invalide.";
}

