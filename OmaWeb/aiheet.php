<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Aiheet - Edgar Allan Poe -runokilpailu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include 'navigaatio.php'; ?>
    </header>
    <main style="text-align: center;">
        <h1>Valitse runosi aihe</h1>
        <p>Valitse alta yksi kolmesta teemasta ja kuvasta inspiraatioksi runollesi. Voit mainita valitsemasi aiheen kilpailulomakkeella!</p>
        
        <!-- Kolme kuvaa ja aihetta rinnakkain -->
        <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; margin-top: 30px;">
            
            <div style="max-width: 250px;">
                <!-- Muuta tiedostonimi tarvittaessa vastaamaan omaa kuvaasi -->
                <img src="Kuvat/vessa.png" alt="Korpin varjo" style="width: 100%; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <h3>Vessa</h3>
                <p>Katoavaisuus, pölyttyneet huoneet ja menneisyyden varjot.</p>
                
            </div>

            <div style="max-width: 250px;">
                <img src="Kuvat/poro.png" alt="Autio kartano" style="width: 100%; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <h3>Poro</h3>
                <p>Katoavaisuus, pölyttyneet huoneet ja menneisyyden varjot.</p>
                
            </div>

            <div style="max-width: 250px;">
                <img src="Kuvat/ampari.png" alt="Keskiyön hetki" style="width: 100%; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <h3>Ämpari</h3>
                <p>Ajan pysähtyminen, täysikuu ja unennäön rajamaat.</p>
            </div>

        </div>
    </main>
</body>
</html>