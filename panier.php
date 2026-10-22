<?php
    session_start();
    $lib = $_POST['lib_produit'];
    $tabDonnee = array();
    
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
        //connexion bd
        $bdd= "mpinkowski_bd"; //nom bd
<<<<<<< HEAD
        $host= "localhost";
        //$host= "lakartxela.iutbayonne.univ-pau.fr";
        //$user= "mpinkowski_bd"; //identifiant
        $user= "root"; //identifiant ---
        $pass= ""; //mdp
        //$pass= "mpinkowski_bd"; //mdp
=======
        $host= "lakartxela.iutbayonne.univ-pau.fr";
        $user= "mpinkowski_bd"; //identifiant
        $pass= "mpinkowski_bd"; //mdp
>>>>>>> f58512eb5578916936c5a20b49d73370758ee163
        $nomtable= "ProjetR301_Produit"; /* Connection bdd */

        $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");
        $link->set_charset("utf8mb4");

        $query= "SELECT * FROM $nomtable WHERE ProjetLibelle LIKE '$lib%'";
        $result= mysqli_query($link, $query);

        //test pour verifier si tout c'est bien passe
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        while ($donnees=mysqli_fetch_assoc($result)) {
            $libelle = $donnees['ProjetLibelle'];
            $prix = $donnees['ProjetPrix'];
            $image = $donnees['ProjetPhoto'];
            $image2 = $donnees['ProjetPhoto2'];
            $monimage1 = "." . $image . "_edited.jpg";
            $monimage2 = "." . $image2 . "_edited.jpg";
            $quantiteMax = $donnees['ProjetQuantite'];

            if (isset($_SESSION['listePanier'][$lib])) {
                $_SESSION['listePanier'][$lib]['quantite'] += 1;
            }
            else {
                $_SESSION['listePanier'][$lib] = array(
                    'libelle'=> $libelle,
                    'image' => $monimage1,
                    'image2' => $monimage2,
                    'prix' => $prix,
                    'quantite' => 1,
                    'quantiteMax' => $quantiteMax
                );
            }

        }
        echo '<body onLoad="alert(\'Produit ajouté au panier !\')">';
        echo '<meta http-equiv="refresh" content="0;URL=' . $_SERVER['HTTP_REFERER'] . '">';

        mysqli_close($link);
    }
    else {
        echo "Erreur";
    }