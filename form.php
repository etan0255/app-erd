<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de contact</title>
</head>
<body>
    <h2>Ajouter un contact</h2>
    <form action="insert.php" method="POST">
        Nom : <input type="text" name="nom" required><br>
        Email : <input type="email" name="email" required><br>
        Message : <textarea name="message" required></textarea><br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
