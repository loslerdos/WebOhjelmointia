<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Toimituskululaskuri</title>
</head>
<body>
    <h1>Laske toimituskulut</h1>
    <?php
    // 1. Switch-lausekkeen sisältävän funktion määrittely
    function laske_toimituskulut($tapa) {   
        switch ($tapa) {
            case "Postipaketti":
                return 6.90;
            case "Kotiinkuljetus":
                return 12.50;
            case "Nouto":
                return 0;
            default:
                return -1;
        }
    }
   
    // 2. Funktion kutsuminen ja tulosten käsittely
    $valittu_tapa = "Postipaketti";
    
    // if-lauseke tuloksen tulostamiseksi (jos hinta-muuttuja ei ole -1)
    $hinta = laske_toimituskulut($valittu_tapa);
    if ($hinta != -1) {
        echo "Valittu toimitustapa: " . $valittu_tapa . "<br><br>";
        echo "<strong>Toimituskulut: " . number_format($hinta, 2, ',', '') . " €</strong>";
    } else {
        echo "Virheellinen toimitustapa.";
    }
    ?>
</body>
</html>