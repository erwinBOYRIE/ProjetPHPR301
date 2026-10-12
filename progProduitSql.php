<?php
    function sql($cate) {
        $bdd= "mpinkowski_bd"; //nom bd
        $host= "lakartxela.iutbayonne.univ-pau.fr";
        $user= "mpinkowski_bd"; //identifiant
        $pass= "mpinkowski_bd"; //mdp
        include_once('../progReImage.php');

        $nomtable= "ProjetR301_Produit"; /* Connection bdd */
        //print "Tentative de connexion sur sitebd<br>";

        $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");
        $link->set_charset("utf8mb4");

        $query= "SELECT * FROM $nomtable";
        $result= mysqli_query($link, $query);

        while ($donnees=mysqli_fetch_assoc($result)) {
            $libelle = $donnees['ProjetLibelle'];
            $description = $donnees['ProjetDescription'];
            $prix = $donnees['ProjetPrix'];
            $image = $donnees['ProjetPhoto'];
            $image2 = $donnees['ProjetPhoto2'];
            $categorie = $donnees['ProjetCategorie'];

            if ($categorie == $cate) {
                $imageSrc  = ".." . $image . ".jpg";
                $imageDest = ".." . $image . "_edited.jpg";
                redimage($imageSrc, $imageDest, 200, 200);
                $imageSrc2  = ".." . $image2 . ".jpg";
                $imageDest2 = ".." . $image2 . "_edited.jpg";
                redimage($imageSrc2, $imageDest2, 200, 200);


                echo '<li class= "item"> <img src="'. $imageDest .'" alt="'.$imageDest.'">
                    <img src="'.$imageDest2 . '"" alt="'.$imageDest2.'">
                    <ul> <br>' .
                    '<li><p class = "nomBooster"> Nom du booster : ' . $libelle . '</p></li> ' . 
                    '<li><p class = "description">'. $description . '</li></p>' .
                    '<li><p class = "prixBooster"> Prix du booster : ' . $prix . ' € </p> ' .  
                    ' </ul> </li>';
                echo '<br>';
        }
        }
    }
   
?>