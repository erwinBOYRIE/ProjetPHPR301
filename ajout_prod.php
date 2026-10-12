<?php
    $nom = $_POST['nom'];
    $desc = $_POST['desc'];
    $prix = $_POST['prix'];
    $cath = $_POST['cath'];
    $photo1 = $_POST['photo1'];
    $photo2 = $_POST['photo2'];

    $bdd= "mpinkowski_bd"; //nom bd
    $host= "lakartxela.iutbayonne.univ-pau.fr";
    $user= "mpinkowski_bd"; //identifiant
    $pass= "mpinkowski_bd"; //mdp

    $nomtable= "ProjetR301_Produit"; /* Connection bdd */
    echo "Tentative de connexion sur sitebd<br>";

    $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");
    $link->set_charset("utf8mb4");

    $query= "INSERT INTO $nomtable VALUES('$nom', '$desc', '$prix', '$photo1', '$photo2', '$cath')";
    $result= mysqli_query($link, $query);

    //test pour verifier si tout c'est bien passe
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }