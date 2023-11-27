<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <form action="process.php" method="GET">
        <label for="paragraph">Inserisci il paragrafo:</label>
        <textarea name="paragraph" id="paragraph" maxlength="20" required></textarea>

        <label for="badWord">Parola da censurare:</label>
        <input type="text" name="badWord" id="badWord" required>

        <button type="submit">Invia</button>
    </form>
</body>

</html>