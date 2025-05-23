<?php
session_start();
$username = $_POST['adminuser'] ?? '';
$password = $_POST['Test2025!'] ?? '';

// Connexion PDO avec la chaîne de connexion SQL Server en forçant SQL Authentication
$serverName = "tcp:mysql-app-erd-v2.mysql.database.azure.com,1433";
$database = "appdb";
$user = "adminuser";
$pass = "Test2025!";

// Construction de la chaîne de connexion
$dsn = "mysql:host=mysql-app-erd-v2.mysql.database.azure.com;port=3306;dbname=appdb;charset=utf8mb4";
try {
    // Connexion PDO avec SQL Authentication
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connexion réussie !";
} catch (Exception $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
