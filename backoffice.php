<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>AjoutProd</title>
</head>
<body>
    <h2>Liste des produits</h2>
    <a href="./logout.php">Déconnexion</a>
    <br>

    <?php 
        echo "<br>";
        echo "<table>
            <thead>
                <tr>
                    <th scope=\"col\">Image</th>
                    <th scope=\"col\">Image 2</th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Catégorie</th>
                    <th scope=\"col\">Prix</th>
                    <th scope=\"col\">Quantite</th>
                    <th scope=\"col\">Supprimer un produit ?</th>
                </tr>
            </thead>
            <tbody>";


        // BDD
        $bdd= "mpinkowski_bd"; //nom bd
        //$host= "lakartxela.iutbayonne.univ-pau.fr";
        $host= "localhost";
        $user="root"; //identifiant
        $pass=""; //mdp
        //$user= "mpinkowski_bd"; //identifiant
        //$pass= "mpinkowski_bd"; //mdp
        include_once('./progReImage.php');

        $nomtable= "ProjetR301_Produit"; /* Connection bdd */
        //print "Tentative de connexion sur sitebd<br>";

        $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");
        $link->set_charset("utf8mb4");

        $query= "SELECT * FROM $nomtable";
        $result= mysqli_query($link, $query);

        //test pour verifier si tout c'est bien passe
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        while ($donnees=mysqli_fetch_assoc($result)) {
            $libelle = $donnees['ProjetLibelle'];
            $description = $donnees['ProjetDescription'];
            $prix = $donnees['ProjetPrix'];
            $image = $donnees['ProjetPhoto'];
            $image2 = $donnees['ProjetPhoto2'];
            $categorie = $donnees['ProjetCategorie'];
            $quantite = $donnees['ProjetQuantite'];
            $monimage1 = "." . $image . "_edited.jpg";
            $monimage2 = "." . $image2 . "_edited.jpg";
            echo"<tr>
                    <td scope=\"row\"><img src='$monimage1' alt='$monimage1'></td>
                    <td><img src='$monimage2' alt='$monimage2'></td>
                    <td>$libelle</td>
                    <td>$description</td>
                    <td>$categorie</td>
                    <td>$prix €</td>
                    <td> 
                        <form method=\"POST\" action=\"./modifQuantite_Prod.php\">
                            <input type=\"hidden\" name=\"lib_produit\" value='$libelle'>
                            <input type=\"number\" name=\"quantite\" value='$quantite'>
                            <button type=\"submit\">Modifier la quantité</button>
                        </form>
                    </td>
                    <td>
                        <form method=\"POST\" action=\"./suppr_prod.php\">
                            <input type=\"hidden\" name=\"lib_produit\" value='$libelle'>
                            <button type=\"submit\">Supprimer</button>
                        </form>
                    </td>
                </tr>";

        }
        echo "</tbody>
        </table>" ;

        mysqli_close($link);
    
    ?>
    
    <h2>Ajouter des produits</h2>
    <form action="./ajout_prod.php" method="POST">
        <label>Nom du produit : </label>
        <input name="nom" type="text"> <br>
        <label>Description du produit : </label>
        <input name="desc" type="text"> <br>
        <label>Prix du produit : </label>
        <input name="prix" type="number"> <br>
        <label>Categorie du produit : </label>
        <input name="cath" type="text"> <br>
        <label>Quantité en stock du produit : </label>
        <input name="quant" type="number"> <br>
        <label>Photo 1 du produit : </label>
        <input name="photo1" type="text"> <br>
        <label>Photo 2 du produit : </label>
        <input name="photo2" type="text"> <br>
        <input type="submit" value="Validez">
    </form>
</body>
</html>