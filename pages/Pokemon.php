<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AchetezVosBooster - Pokémon</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header class="accueilHeader">
        <nav class="navbar">
            <ul>
                <li>
                    <a href="./Pokemon.php">Pokemon</a>
                </li>  
                <li>
                    <a href="./Magic.php">Magic</a>
                </li>
                <li>
                   <a href="./Yugioh.php">Yu-Gi-Oh!</a> 
                </li>
                <li>
                    <a href="./wankul.php">Wankul</a>
                </li>
            </ul>
        </nav>
    </header>
    <?php
        include_once('../progProduitSql.php');
        sql('pokemon');
    ?>
</body>
</html>