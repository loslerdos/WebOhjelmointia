<?php
// PHP-tehtävä 7: Tilauslomakkeen prototyyppi

// Kopioidaan funktio tehtävästä 6
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
   
    


// Alustetaan muuttujat, jotta ne ovat olemassa, vaikka lomaketta ei olisi lähetetty
$yhteenveto = null;

// Tarkistetaan, onko lomake lähetetty
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haetaan tiedot lomakkeelta
    $valittu_tapa = $_POST["toimitustapa"];

   
    // Tuotetiedot
    
   
    // Laskutoimitukset

   
    // Rakennetaan yhteenveto-muuttuja tulostusta varten
    $maara = isset($_POST["määrä"]) ? (int)$_POST["määrä"] : 1;
    $toimituskulut = laske_toimituskulut($valittu_tapa);
    if ($toimituskulut != -1) {
        $yhteenveto = "<h2 class='yhteenveto-otsikko'>Tilauksen yhteenveto</h2>";
        $yhteenveto .= "Määrä: " . $maara . " kpl<br><br>";

        $välisumma = $maara * 349.90;
        $yhteenveto .= "Välisumma: " . number_format($välisumma, 2, ',', '') . " €<br><br>";

        $yhteenveto .= "Valittu toimitustapa: " . $valittu_tapa . "<br><br>";
        $kokonaishinta = $välisumma + $toimituskulut;
        
        $yhteenveto .= "Kokonaishinta: " . number_format($kokonaishinta, 2, ',', '') . " €<br><br>";    
        $yhteenveto .= "<strong>Toimituskulut: " . number_format($toimituskulut, 2, ',', '') . " €</strong>";
    } else {
        $yhteenveto = "Virheellinen toimitustapa.";
    }


}
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Tilauslomake</title>
    <style>
        
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container {
        background-color: white;
        padding: 30px;
        border-radius: 8px;
        width: 100%;
        max-width: 450px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        font-size: 24px;
        margin-top: 0;
    }
    h3 {
        font-size: 16px;
        color: #333;
    }
    label {
        display: block;
        margin-top: 15px;
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
    }
    input[type="number"], select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
    }
    input[type="submit"] {
        width: 100%;
        background-color: #007bff;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 20px;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    /* Yhtenveto-osuuden tyylit */
    h2.yhteenveto-otsikko {
        font-size: 20px;
        margin-top: 30px;
        border-top: 1px solid #eee;
        padding-top: 20px;
    }


    </style>
</head>
<body>
    <div class="container">
        <h1>Tilaa Tuote</h1>
       
        <h3>Tuote: Sähköpotkulauta (349,90 €/kpl)</h3>

        <form method="post" action="">
            <label for="määrä">Määrä:</label>
            <input type="number" name="määrä" id="määrä" value="1" min="1">
            <label for="toimitustapa">Valitse toimitustapa:</label>
            <select name="toimitustapa" id="toimitustapa">
                <option value="Postipaketti">Postipaketti</option>
                <option value="Kotiinkuljetus">Kotiinkuljetus</option>
                <option value="Nouto">Nouto</option>
            </select>
            <br><br>
            <input type="submit" value="Laske toimituskulut">
        </form>

        <?php
        // Tulostetaan yhteenveto, jos se on laskettu
        if ($yhteenveto !== null) {
            echo $yhteenveto;
        }

        ?>
    </div>
</body>
</html>