<?php
    function sql ($cate) {
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

            if ($categorie == $cate) {
            echo '<li> <img src="../'. $photo .'" alt="caca"> <br>' .
                '<p class = "nomBooster"> Nom du booster : ' . $libelle . '</p> <br>' . 
                 $description . '<br>' .
                 '<p class = "prixBooster"> Prix du booster : ' . $prix . ' € </p> <br>' .  
                 $categorie . '<br> </li>';
            echo '<br>';
        }
        }  
    }
   
?>