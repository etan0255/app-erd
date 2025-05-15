<?php
$host = 'mysql-app-erd-v2.mysql.database.azure.com';
$db   = 'appdb';
$user = 'adminuser'; // SANS le @mysql-app-erd-v2 ici !
$pass = 'Test2025!';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;sslmode=require";

$options = [
    PDO::MYSQL_ATTR_SSL_CA => __DIR__ . '/certs/BaltimoreCyberTrustRoot.pem',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

echo "<pre>";
echo "DSN utilisé : $dsn\n";
echo "Utilisateur : $user\n";
echo "Certificat : " . (__DIR__ . '/certs/BaltimoreCyberTrustRoot.pem') . "\n";
echo "Fichier existe ? " . (file_exists(__DIR__ . '/certs/BaltimoreCyberTrustRoot.pem') ? 'oui' : 'non') . "\n";
echo "</pre>";


try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("❌ Erreur connexion DB : " . $e->getMessage());
}
?>
