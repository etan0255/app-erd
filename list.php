<?php
require 'config.php';
$stmt = $pdo->query("SELECT * FROM contacts");
echo "<h2></h2><ul>";
while ($row = $stmt->fetch()) {
    echo "<li>{$row['nom']} ({$row['email']})</li>";
}
echo "</ul><a href='index.php'>Retour</a>";
?>
