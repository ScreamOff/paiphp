<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrycowe Menu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Zespół: Maciej Kujbida, Seweryn Kawecki</h1>
    </header>
    <nav id="menu-top">
        <ul>
            <li><a href="?poziom=poziom1" class="<?= isset($_GET['poziom']) && $_GET['poziom'] === 'poziom1' ? 'active' : '' ?>">Poziom_1</a></li>
            <li><a href="?poziom=poziom2" class="<?= isset($_GET['poziom']) && $_GET['poziom'] === 'poziom2' ? 'active' : '' ?>">Poziom_2</a></li>
            <li><a href="?poziom=poziom3" class="<?= isset($_GET['poziom']) && $_GET['poziom'] === 'poziom3' ? 'active' : '' ?>">Poziom_3</a></li>
        </ul>
    </nav>
    <div id="container">
        <nav id="menu-left">
            <ul>
                <li><a href="?pion=pion1&poziom=<?= $_GET['poziom'] ?? '' ?>" class="<?= isset($_GET['pion']) && $_GET['pion'] === 'pion1' ? 'active' : '' ?>">Pion_1</a></li>
                <li><a href="?pion=pion2&poziom=<?= $_GET['poziom'] ?? '' ?>" class="<?= isset($_GET['pion']) && $_GET['pion'] === 'pion2' ? 'active' : '' ?>">Pion_2</a></li>
                <li><a href="?pion=pion3&poziom=<?= $_GET['poziom'] ?? '' ?>" class="<?= isset($_GET['pion']) && $_GET['pion'] === 'pion3' ? 'active' : '' ?>">Pion_3</a></li>
            </ul>
        </nav>
        <main id="content">
            <?php
            $pion = $_GET['pion'] ?? null;
            $poziom = $_GET['poziom'] ?? null;

            if ($pion && $poziom) {
                if ($pion === 'pion1' && $poziom === 'poziom1') {
                    echo "<p>Dane osób wykonujących ćwiczenie - Maciej Kujbida, Seweryn Kawecki.</p>";
                } elseif ($pion === 'pion1' && $poziom === 'poziom2') {
                    echo "<p>Pion_1, Poziom_2: Formatowanie tekstu z class i id.</p>
                          <div class='example'>
                              <p class='highlight'>Przykład z class</p>
                              <p id='highlight-id'>Przykład z id</p>
                          </div>";
                } elseif ($pion === 'pion1' && $poziom === 'poziom3') {
                    echo "<p>Pion_1, Poziom_3: Elementy ramek, padding, border, margin.</p>
                                    <div class='frame'>Przykład ramek</div>
          <div class='padding-example'>Przykład paddingu</div>
          <div class='border-example'>Przykład obramowania</div>
          <div class='margin-example'>Przykład marginesu</div>";;
                } elseif ($pion === 'pion2' && $poziom === 'poziom1') {
                    echo "<iframe src='https://tu.kielce.pl' width='100%' height='400px'></iframe>";
                } elseif ($pion === 'pion2' && $poziom === 'poziom2') {
                    echo "<Pion_2, Poziom_2: Osadzone elementy graficzne.</p>
                          <img src='a.jpg' alt='Obraz 1' class='responsive-img'>
                            <img src='b.jpg' alt='Obraz 2' class='responsive-img'>";
                } elseif ($pion === 'pion2' && $poziom === 'poziom3') {
                    echo "<p>Pion_2, Poziom_3: Własna inwencja twórcza - link do formularza.</p>
                            <a href='a1.php' class='link-form'>Przejdź do formularza</a>";
                } else {
                    echo "<p>Nieznana opcja.</p>";
                }
            } else {
                echo "<p>Wybierz opcję z menu.</p>";
            }
            ?>
        </main>
    </div>
    <footer>
        <p>Data wykonania: 09.12.2024</p>
    </footer>
</body>
</html>
