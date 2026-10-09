<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="accueilHeader">
        <nav class="navbar">
            <ul>
                <li>
                    <a href="./pages/Pokemon.php">Pokemon</a>
                </li>  
                <li>
                    <a href="./pages/Magic.php">Magic</a>
                </li>
                <li>
                   <a href="./pages/Yugioh.php">Yu-Gi-Oh!</a> 
                </li>
                <li>
                    <a href="./pages/wankul.php">Wankul</a>
                </li>
            </ul>
        </nav>
    </header>
    <?php
    $bdd = "mpinkowski_bd"; // Base de données
    $host = "lakartxela.iutbayonne.univ-pau.fr";
    $user = "mpinkowski_bd"; // Utilisateur
    $pass = "mpinkowski_bd"; // mp
    $nomtable = "ProjetR301_Produit"; /* Connection bdd */
    $link = mysqli_connect($host, $user, $pass, $bdd) or die("Impossible de se connecter à la base de
    données");

    $sql = "SELECT * FROM $nomtable ";
    $result = mysqli_query($link, $sql);
    while ($donnees = mysqli_fetch_assoc($result)) {
        $ch1 = $donnees["ProjetLibelle"];
        $ch2 = $donnees["ProjetDescription"];
        
        echo $ch1 . "<br>". $ch2;
        echo "<br>";
    }
    ?>
</body>
</html>