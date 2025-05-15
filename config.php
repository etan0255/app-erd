<?php
$host = 'mysql-app-erd-v2.mysql.database.azure.com';
$db   = 'appdb';
$user = 'adminuser';
$pass = 'Test2025!';
$charset = 'utf8mb4';

// Utilise le chemin relatif correct
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;sslmode=verify-ca";

$options = [
    PDO::MYSQL_ATTR_SSL_CA => __DIR__ . '/certs/BaltimoreCyberTrustRoot.pem',
    PDO::ATTR_ERRMODE         => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];


try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "✅ Connexion réussie sans SSL.";
} catch (\PDOException $e) {
    die("❌ Erreur sans SSL : " . $e->getMessage());
}
?>
