<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane formularza</title>
</head>
<body>
    <h1>Wprowadzone dane</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
        $gender = htmlspecialchars($_POST['gender']);
        $city = htmlspecialchars($_POST['city']);
        $hobbies = isset($_POST['hobby']) ? $_POST['hobby'] : [];

        echo "<p>Imię: $name</p>";
        echo "<p>Wiek: $age</p>";
        echo "<p>Płeć: $gender</p>";
        echo "<p>Miasto: $city</p>";
        echo "<p>Zainteresowania: " . implode(", ", $hobbies) . "</p>";
    }
    ?>
</body>
</html>
