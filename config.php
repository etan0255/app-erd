<?php
$host = 'mysql-app-erd-v2.mysql.database.azure.com';
$db   = 'app-erd';
$user = 'adminuser@mysql-app-erd-v2';
$pass = 'Etan2025!';
$charset = 'utf8mb4';

// Utilise le chemin relatif correct
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


$options = [
    //PDO::MYSQL_ATTR_SSL_CA    => __DIR__ . '/certs/DigiCert.pem',
    PDO::ATTR_ERRMODE         => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];


try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Échec de la connexion : " . $e->getMessage());
}
?>
