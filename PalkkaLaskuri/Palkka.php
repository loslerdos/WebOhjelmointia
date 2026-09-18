<?php
$tuntipalkka = $_POST["tuntipalkka"] ?? 0;
$tuntimaara = $_POST["tuntimaara"] ?? 0;
$viikonloppulisa = $_POST["viikonloppulisa"] ?? 0;
$viikonloppujen_maara = $_POST["viikonloppujen_maara"] ?? 0;

$yhteispalkka_ilman_viikonloppulisia = $tuntipalkka * $tuntimaara;
$viikonloppulisa_yhteensa = $viikonloppulisa * $viikonloppujen_maara;
$yhteispalkka_viikonloppulisalla = $yhteispalkka_ilman_viikonloppulisia + $viikonloppulisa_yhteensa;

echo "Yhteispalkka ilman viikonloppulisiä: " . $yhteispalkka_ilman_viikonloppulisia . "<br>";
echo "Yhteispalkka viikonloppulisällä: " . $yhteispalkka_viikonloppulisalla;
?>