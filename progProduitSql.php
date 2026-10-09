<?php
    header('Content-Type: text/html; charset=utf-8');
    $bdd= "mpinkowski_bd";
    $host= "lakartxela.iutbayonne.univ-pau.fr";
    $user= "mpinkowski_bd";
    $pass= "mpinkowski_bd";

    $nomtable= "ProjetR301_Produit"; /* Connection bdd */
    //print "Tentative de connexion sur sitebd<br>";

    $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");

    $query= "SELECT * FROM $nomtable";
    $result= mysqli_query($link, $query);
    $link->set_charset("utf8");

    while ($donnees=mysqli_fetch_assoc($result)) {
        $libelle = $donnees['ProjetLibelle'];
        $description = $donnees['ProjetDescription'];
        $prix = $donnees['ProjetPrix'];
        $photo = $donnees['ProjetPhoto'];
        $categorie = $donnees['ProjetCategorie'];

        echo $libelle . '<br>' . $description . '<br>' .  $prix . '<br>' .  
            $photo . '<br>' . $categorie . '<br>';
    }
?>