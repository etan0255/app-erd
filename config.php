<?php
$host = 'mysql-app-erd-v2.mysql.database.azure.com';
$db   = 'appdb';
$user = 'adminuser';
$pass = 'azerty11@';
$charset = 'utf8mb4';

// Utilise le chemin relatif correct
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;sslmode=verify-ca";

$options = [
    PDO::MYSQL_ATTR_SSL_CA => '/home/site/wwwroot/certs/Baltimore.pem',
    PDO::ATTR_ERRMODE         => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];


try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Échec de la connexion : " . $e->getMessage());
}
?>
