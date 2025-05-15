<?php
$certPath = __DIR__ . '/certs/DigiCert.pem';

if (file_exists($certPath)) {
    echo "✅ Certificat trouvé<br>";
    echo "Contenu :<br><pre>" . htmlspecialchars(file_get_contents($certPath)) . "</pre>";
} else {
    echo "❌ Certificat NON trouvé à l'emplacement : $certPath";
}
?>
