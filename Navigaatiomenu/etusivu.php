<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Etusivu - Meidän Firma</title>
    <style>
        /* Perustyylit navigaatiolle, jotta siitä tulee tuon esimerkkikuvan näköinen */
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333;
            overflow: hidden;
        }
        nav ul li {
            float: left;
        }
        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav ul li a:hover {
            background-color: #111;
        }
        /* Aktiivisen linkin korostus (tämä oli osittain valmiina ohjeessa) */
        nav ul li.active a {
            background-color: #007bff;
            color: white;
        }

        /* Muita perusmuotoiluja sivulle */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        main {
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <?php include 'navigaatio.php'; ?>
    </header>
    <main>
        <h1>Tervetuloa etusivulle!</h1>
        <p>Tämä on dynaamisella navigaatiolla varustetun sivustomme pääsivu.</p>
    </main>
</body>
</html>