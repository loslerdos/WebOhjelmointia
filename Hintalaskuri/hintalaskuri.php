<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Hintalaskuri</title>
</head>
<body>
    <h1>Tuotteen hintatiedot</h1>

    <?php
    
    $tuotteen_nimi = "Sähköpotkulauta";
    $hinta_kpl = 349.90;
    $kappalemäärä = 2;
    $alennusprosentti = 15;

    $välisumma = $hinta_kpl * $kappalemäärä;
    $alennus_eur = $välisumma * ($alennusprosentti / 100);
    $loppusumma = $välisumma - $alennus_eur;    

    $hinta_kpl_fmt = number_format($hinta_kpl, 2, ',', '');
    $välisumma_fmt = number_format($välisumma, 2, ',', '');
    $alennus_eur_fmt = number_format($alennus_eur, 2, ',', '');
    $loppusumma_fmt = number_format($loppusumma, 2, ',', '');

    echo "Tuote: $tuotteen_nimi<br>";
    echo "Kappalehinta: $hinta_kpl_fmt €<br>";
    echo "Määrä: $kappalemäärä kpl<br>";
    echo "-----------------------------------<br>";
    echo "Välisumma: $välisumma_fmt €<br>";
    echo "Alennus ($alennusprosentti%): $alennus_eur_fmt €<br>";
    echo "-----------------------------------<br>";
    echo "<strong>Lopullinen hinta: $loppusumma_fmt €</strong><br>";
    ?>

</body>
</html>