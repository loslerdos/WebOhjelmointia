<?php
// Alustetaan muuttujat, jotta ne ovat olemassa
$viesti_lahetetty = false;
$nimi = "";
$aihe = "";
$palaute = "";

// Tarkistetaan, onko lomake lähetetty POST-metodilla
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimi = isset($_POST["nimi"]) ? $_POST["nimi"] : "";
    $aihe = isset($_POST["aihe"]) ? $_POST["aihe"] : "";
    $palaute = isset($_POST["viesti"]) ? $_POST["viesti"] : "";
    
    // Tarkistetaan, että kentät eivät ole tyhjiä
    if (!empty($nimi) && !empty($aihe) && !empty($palaute)) {
        $viesti_lahetetty = true;
    }
}
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Yhteystiedot - Meidän Firma</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include 'navigaatio.php'; ?>
    </header>
    <main>
        <h1>Kirjoita runosi tänne</h1>
        <p>Voit lähettää meille runosi alla olevalla lomakkeella.</p>

        <?php if ($viesti_lahetetty): ?>
            <!-- Tämä näytetään, kun lomake on lähetetty onnistuneesti -->
            <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
                <h3>Kiitos runostasi, <?php echo htmlspecialchars($nimi); ?>!</h3>
                <p>Valittu aihe: <strong><?php echo htmlspecialchars($aihe); ?></strong></p>
                <p>Runosi on vastaanotettu:</p>
                <!-- Lisätty white-space: pre-line, jotta kaikki rivit näkyvät -->
                <p style="white-space: pre-line; background: #fff; padding: 15px; border-radius: 4px; border: 1px solid #c3e6cb;"><em>"<?php echo htmlspecialchars($palaute); ?>"</em></p>
            </div>
        <?php else: ?>
            <!-- Itse lomake, joka näytetään ennen lähetystä -->
            <form action="" method="post">
                <p>
                    <label for="nimi">Nimi:</label><br>
                    <input type="text" name="nimi" id="nimi" required style="width: 100%; max-width: 500px; padding: 10px; box-sizing: border-box;">
                </p>
                
                <!-- Lisätty aihevalikko, joka vastaa Aiheet-sivua -->
                <p>
                    <label for="aihe">Valitse aihe:</label><br>
                    <select name="aihe" id="aihe" required style="width: 100%; max-width: 500px; padding: 10px; box-sizing: border-box;">
                        <option value="">-- Valitse aihe --</option>
                        <option value="Vessa">Vessa</option>
                        <option value="Poro">Poro</option>
                        <option value="Ämpäri">Ämpäri</option>
                    </select>
                </p>

                <p>
                    <label for="viesti">Runo:</label><br>
                    <textarea name="viesti" id="viesti" rows="8" required style="width: 100%; max-width: 500px; padding: 10px; box-sizing: border-box; resize: vertical;"></textarea>
                </p>
                <p>
                    <input type="submit" value="Lähetä">
                </p>
            </form>
        <?php endif; ?>

        <div style="margin-top: 40px;">
            <h3>Muut yhteystiedot</h3>
            <p>Soita numeroon 453-1234567</p>
            <p>Sähköposti: info@meidanfirma.fi</p>
        </div>
    </main>
</body>
</html>