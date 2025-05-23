<?php
session_start();

$database = "appdb";
$user = "adminuser";
$pass = "Test2025!";
$host = "mysql-app-erd-v2.mysql.database.azure.com";
$dsn = "mysql:host=$host;port=3306;dbname=$database;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    exit("Erreur de connexion : " . $e->getMessage());
}
