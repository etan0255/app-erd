<?php
$host = 'mysql-app-erd-v2.mysql.database.azure.com';
$db   = 'appdb';
$user = 'adminuser';
$pass = 'Etan2025!';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     exit("Échec de la connexion : " . $e->getMessage());
}
?>
