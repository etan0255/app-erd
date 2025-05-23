<?php
require 'config.php';

try {
    $stmt = $pdo->query("SELECT * FROM contacts");
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$contacts) {
        echo "Aucun contact trouvé.";
    } else {
        echo "<h2>Liste des contacts</h2><ul>";
        foreach ($contacts as $contact) {
            echo "<li>" . htmlspecialchars($contact['nom']) . " (" . htmlspecialchars($contact['email']) . ") : " . htmlspecialchars($contact['message']) . "</li>";
        }
        echo "</ul>";
    }
} catch (Exception $e) {
    exit("Erreur lors de la récupération des contacts : " . $e->getMessage());
}
?>

<a href='index.php'>Retour</a>
