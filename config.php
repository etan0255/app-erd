<?php
$host = 'mysql-app-erd-v2.mysql.database.azure.com'; // ton host Azure
$db   = 'app_erd'; // ton nom de base
$user = 'adminuser@mysql-app-erd-v2'; // utilisateur complet
$pass = 'Etan2025!'; // mot de passe que tu as défini
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;sslmode=require";

// Option supplémentaire pour Azure
$options = [
    PDO::MYSQL_ATTR_SSL_CA    => '/path/to/BaltimoreCyberTrustRoot.crt.pem',
    PDO::ATTR_ERRMODE         => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Échec de la connexion : " . $e->getMessage());
}
?>
