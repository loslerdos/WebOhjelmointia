<?php

// Määritellään sivut taulukkoon, viimeistele taulukon luonti alle
$sivut = [
    'Etusivu' => 'etusivu.php',
    'Tuotteet' => 'tuotteet.php',
    'Ota yhteyttä' => 'yhteystiedot.php'
];

// Haetaan nykyisen sivun tiedostonimi
$nykyinen_sivu = basename($_SERVER['PHP_SELF']);
?>
<nav>
    <ul>
       <!-- Käydään sivut läpi foreach-lauseella. Asetetaan nykyisen sivun <li>-elementille class="active". Muodostetaan href-linkit silmukassa. -->
        <?php foreach ($sivut as $nimi => $url): ?>
            <li class="<?php if ($nykyinen_sivu == $url) echo 'active'; ?>">
                <a href="<?php echo $url; ?>"><?php echo $nimi; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>