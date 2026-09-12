<!DOCTYPE html>
<html>
  <head>
    <title>Ensimmäinen PHP-sivu</title>
  </head>
  <body>
    <h2>HTML lomakeharjoitus</h2>
    
    <form action="/action_page.php">
        <label for="fname">Lemmikin nimi:</label><br>
        <input type="text" id="fname" name="fname" value="Karvinen"><br>
        <label for="fname">Lemmikin syntymäaika:</label><br>
        <input type="date" id="fname" name="fname" value="Karvinen"><br>
      
        <p>Lemmikin eläinlaji:</p>
    
    
        <input type="radio" id="kissa" name="fav_language" value="Kissa">
        <label for="kissa">Kissa</label><br>
        <input type="radio" id="koira" name="fav_language" value="Koira">
        <label for="koira">Koira</label><br>
        <input type="radio" id="hamsteri" name="fav_language" value="Hamsteri">
        <label for="hamsteri">Hamsteri</label><br>
        <input type="radio" id="käärme" name="fav_language" value="Käärme">
        <label for="käärme">Käärme</label><br>
      

    <p>Lemmikin lempiasiat:</p>

    
        <input type="checkbox" id="nukkuminen" name="nukkuminen" value="Nukkuminen">
        <label for="nukkuminen"> Nukkuminen</label><br>
        <input type="checkbox" id="leikkiminen" name="leikkiminen" value="Leikkiminen">
        <label for="leikkiminen"> Leikkiminen</label><br>
        <input type="checkbox" id="syöminen" name="syöminen" value="Syöminen">
        <label for="syöminen"> Syöminen</label><br>
        <input type="checkbox" id="juokseminen" name="juokseminen" value="Juokseminen">
        <label for="juokseminen"> Juokseminen</label><br>
     

    <p>Lemmikin väri:</p>

    
        <label for="favcolor">Valitse väri:</label>
        <input type="color" id="favcolor" name="favcolor" value="#ff0000">
      

    <p>Lemmikin varusteet:</p>

    
  <label for="cars">Varusteet:</label>
  <select name="cars" id="cars" multiple size="4">
    <option value="panta" Selected>Panta</option>
    <option value="hihna">Hihna</option>
    <option value="kuljetuslaatikko">Kuljetuslaatikko</option>
    <option value="lelut">Lelut</option>
    
  </select>
  <br><br>
    <input type="submit" value="Lähetä">
    <input type="reset" value="Resetoi">
</form>

  </body>
</html>