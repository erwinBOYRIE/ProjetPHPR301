<?php
    session_start();
    $lib = $_POST['lib_produit'];
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
        //connexion bd
        $bdd= "mpinkowski_bd"; //nom bd
        $host= "lakartxela.iutbayonne.univ-pau.fr";
        $user= "mpinkowski_bd"; //identifiant
        $pass= "mpinkowski_bd"; //mdp
        // include_once('../progReImage.php');
        // include_once('../progCreationPage.php');
        $nomtable= "ProjetR301_Produit"; /* Connection bdd */

        $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");
        $link->set_charset("utf8mb4");

        $query= "SELECT * FROM $nomtable WHERE ProjetLibelle LIKE '$lib%'";
        $result= mysqli_query($link, $query);

        while ($donnees=mysqli_fetch_assoc($result)) {
            $libelle = $donnees['ProjetLibelle'];
            $description = $donnees['ProjetDescription'];
            $prix = $donnees['ProjetPrix'];
            $image = $donnees['ProjetPhoto'];
            $image2 = $donnees['ProjetPhoto2'];
            $categorie = $donnees['ProjetCategorie'];

            $_SESSION['listePanier'][$lib] = 1;
        }
        echo '<body onLoad="alert(\'Produit ajouté au panier !\')">';
        echo '<meta http-equiv="refresh" content="0;URL=afficher_panier.php">';
    }
    else {
        echo "Erreur";
    }