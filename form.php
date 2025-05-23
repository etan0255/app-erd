<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de contact</title>
</head>
<body>
    <h2>Formulaire de Contact</h2>
    <form action="insert.php" method="POST">
        <label>Nom :</label><br>
        <input type="text" name="nom" required><br>

        <label>Email :</label><br>
        <input type="email" name="email" required><br>

        <label>Message :</label><br>
        <textarea name="message" required></textarea><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
