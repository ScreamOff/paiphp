<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <form action="a2.php" method="post">
        <label for="name">Imię:</label>
        <input type="text" id="name" name="name"><br>
        <label for="age">Wiek:</label>
        <input type="number" id="age" name="age"><br>
        <label>Płeć:</label>
        <input type="radio" name="gender" value="Mężczyzna">Mężczyzna
        <input type="radio" name="gender" value="Kobieta">Kobieta<br>
        <label>Zainteresowania:</label>
        <input type="checkbox" name="hobby[]" value="Sport">Sport
        <input type="checkbox" name="hobby[]" value="Muzyka">Muzyka<br>
        <label for="city">Miasto:</label>
        <select id="city" name="city">
            <option value="Warszawa">Warszawa</option>
            <option value="Kraków">Kraków</option>
        </select><br>
        <input type="submit" value="Wyślij">
    </form>
</body>
</html>
