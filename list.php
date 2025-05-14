<?php
require 'config.php';
$stmt = $pdo->query("SELECT * FROM users");
echo "<h2>Liste des utilisateurs</h2><ul>";
while ($row = $stmt->fetch()) {
    echo "<li>{$row['name']} ({$row['email']})</li>";
}
echo "</ul><a href='index.php'>Retour</a>";
?>