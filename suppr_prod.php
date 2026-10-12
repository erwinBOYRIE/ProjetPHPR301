<?php
    $bdd= "mpinkowski_bd"; //nom bd
    $host= "lakartxela.iutbayonne.univ-pau.fr";
    $user= "mpinkowski_bd"; //identifiant
    $pass= "mpinkowski_bd"; //mdp

    $nomtable= "ProjetR301_Produit"; /* Connection bdd */
    echo "Tentative de connexion sur sitebd<br>";

    $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");
    $link->set_charset("utf8mb4");

    //$query= "DELETE FROM $nomtable WHERE ";
    $result= mysqli_query($link, $query);

    //test pour verifier si tout c'est bien passe
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }