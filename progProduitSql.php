<?php
    function sql($cate) {
        $bdd= "mpinkowski_bd"; //nom bd
        $host= "lakartxela.iutbayonne.univ-pau.fr";
        $user= "mpinkowski_bd"; //identifiant
        $pass= "mpinkowski_bd"; //mdp
        include_once('../progReImage.php');
        include_once('../progCreationPage.php');
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
            $quantite = $donnees['ProjetQuantite'];
            
            if ($categorie == $cate) {
                
                $imageSrc  = ".." . $image . ".jpg";
                $imageDest = ".." . $image . "_edited.jpg";
                redimage($imageSrc, $imageDest, 200, 200);
                $imageSrc2  = ".." . $image2 . ".jpg";
                $imageDest2 = ".." . $image2 . "_edited.jpg";
                redimage($imageSrc2, $imageDest2, 200, 200);
                $html = ' 
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>'. $libelle.'</title>
                            <link rel="stylesheet" href="../style.css">

                        </head>
                        <body>
                        <div class= "item"> <a href="'. $imageSrc.'"> <img src="'. $imageDest .'" alt="'.$imageDest.'"></a>
                        <a href="'. $imageSrc2.'"> <img src="'. $imageDest2 .'" alt="'.$imageDest2.'"></a>
                        <ul> <br>' .
                        '<li><p class = "nomBooster"> Nom du booster : ' . $libelle . '</p></li> ' . 
                        '<li><p class = "description">'. $description . '</li></p>' .
                        '<li><p class = "prixBooster"> Prix du booster : ' . $prix . ' € </p> ' . 
                        '<li><p class = "quantiteBooster"> Quantité max du booster : ' . $quantite . '</p></li> ' . 
                        ' </ul> </div>    
                        </body>
                        </html>';                

                createPage($libelle.'.html',$html);
                
               

                //affichage des produits sur la page
                echo '<a href="./'.$libelle.'.html">
                    <li class= "item"> <img src="'. $imageDest .'" alt="'.$imageDest.'">
                    <ul> <br>' .
                    '<li><p class = "nomBooster"> Nom du booster : ' . $libelle . '</p></li> ' . 
                    '<li><p class = "prixBooster"> Prix du booster : ' . $prix . ' € </p> ' .  
                    '<li><p class = "quantiteBooster"> Quantité max du booster : ' . $quantite . '</p></li> ' .
                    ' </ul> </li>
                    </a>';
                echo "<ul> 
                    <form method=\"POST\" action=\"../panier.php\"  >
                        <input type=\"hidden\" name=\"lib_produit\" value=$libelle>
                        <li>Ajouter au panier <button type=\"submit\"> Ajout </button></li>
                    </form>
                    </ul>";
                echo '<br>';
        }
        }
        mysqli_close($link);
    }
   
?>