<?php
$host = 'mysql-app-erd-v2.mysql.database.azure.com';
$db   = 'appdb';
$user = 'adminuser';
$pass = 'Test2025!';
$charset = 'utf8mb4';

$cert_path = __DIR__ . '/certs/BaltimoreCyberTrustRoot.pem';

echo "<pre>";
echo "DSN utilisé : mysql:host=$host;port=3306;dbname=$db;charset=$charset;sslmode=verify_ca\n";
echo "Utilisateur : $user\n";
echo "Certificat : $cert_path\n";
echo "Fichier existe ? " . (file_exists($cert_path) ? 'oui' : 'non') . "\n";
echo "</pre>";

$dsn = "mysql:host=$host;port=3306;dbname=$db;charset=$charset;sslmode=verify_ca";
$options = [
    PDO::MYSQL_ATTR_SSL_CA => $cert_path,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "✅ Connexion réussie.";
} catch (\PDOException $e) {
    die("❌ Erreur connexion DB : " . $e->getMessage());
}
?>
