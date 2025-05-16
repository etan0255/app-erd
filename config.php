<?php
session_start();
$username = $_POST['adminuser'] ?? '';
$password = $_POST['Test2025!'] ?? '';

// Connexion PDO avec la chaîne de connexion SQL Server en forçant SQL Authentication
$serverName = "tcp:sqlserver-partiel.database.windows.net,1433";
$database = "appdb";
$user = "adminuser";
$pass = "Test2025!";

// Construction de la chaîne de connexion
$dsn = "sqlsrv:Server=$serverName;Database=$database;Encrypt=true;TrustServerCertificate=false;";
try {
    // Connexion PDO avec SQL Authentication
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !";
} catch (Exception $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
