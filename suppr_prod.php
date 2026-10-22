<?php
    $bdd= "mpinkowski_bd"; //nom bd
    $host= "lakartxela.iutbayonne.univ-pau.fr";
    $user= "mpinkowski_bd"; //identifiant
    $pass= "mpinkowski_bd"; //mdp

    $nomtable= "ProjetR301_Produit"; /* Connection bdd */
    echo "Tentative de connexion sur sitebd<br>";

    $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");
    $link->set_charset("utf8mb4");


    if (isset($_POST['lib_produit'])) {
        $lib = $_POST['lib_produit'];

        //requète parametrée
        $query= "DELETE FROM $nomtable WHERE ProjetLibelle = ?";
        $sql = $link->prepare($query);
    
        $sql->execute([$lib]);
    }

    //pop-up
    echo '<body onLoad="alert(\'Le produit a été supprimé\')">';
    //redirige vers backoffice 
    echo '<meta http-equiv="refresh" content="0;URL=backoffice.php">';


    //test pour verifier si tout c'est bien passe
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    mysqli_close($link);