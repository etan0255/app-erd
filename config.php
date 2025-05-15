<?php
$host = 'mysql-app-erd-v2.mysql.database.azure.com';
$db   = 'appdb';
$user = 'adminuser';
$pass = 'Test2025!';
$charset = 'utf8mb4';

$certPath = __DIR__ . '/certs/BaltimoreCyberTrustRoot.pem'; // <- Assure-toi que ce chemin est exact

// 🟡 TEST : Vérifie si le fichier certificat est bien trouvé
echo "<pre>";
echo "Chemin du certificat : " . $certPath . "\n";
echo "Fichier existe ? " . (file_exists($certPath) ? 'oui ✅' : 'non ❌') . "\n";
echo "</pre>";

// DSN avec SSL requis
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Options SSL
$options = [
    PDO::MYSQL_ATTR_SSL_CA => $certPath,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "✅ Connexion réussie avec SSL.";
} catch (\PDOException $e) {
    die("❌ Erreur SSL : " . $e->getMessage());
}
?>
