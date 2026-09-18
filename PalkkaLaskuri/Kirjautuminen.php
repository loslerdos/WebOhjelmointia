<?php
//Tarkistetaan onko lomake lähetetty
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Lisää alle koodi joka ottaa vastaan lomakkeen tiedot
    $username = $_POST["username"] ?? "";
    $pwd = $_POST["pwd"] ?? "";


    //Korjaa ja täydennä alla oleva if-lause joka tarkistaa käyttäjätunnuksen ja salasanan
    if ($username === "admin" && $pwd === "kissa123") { 
        
        //Kirjautuminen onnistui

        //Alla oleva koodi ohjaa käyttäjän palkkalaskuriin 2 sekunnin kuluttua
        header("Refresh: 2; URL=Palkkalaskuri.php");
        echo "<h1>Tervetuloa admin!</h1>";
        echo "<p>Sinut ohjataan palkkalaskuriin muutaman sekunnin kuluttua...</p>";
    } else {
        //Kirjautuminen epäonnistui
        header("Refresh: 2; URL=palkkalaskuri_kirjautuminen.html");
        echo "Virheellinen käyttäjätunnus tai salasana.";
        //header("Refresh: 2; URL=palkkalaskuri_kirjautuminen.html");

    }
}
?>