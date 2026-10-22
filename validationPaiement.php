<?php
    session_start();
    $panier = $_SESSION['listePanier'];


    // BDD
    $bdd= "mpinkowski_bd"; //nom bd
    $host= "lakartxela.iutbayonne.univ-pau.fr";
    $user= "mpinkowski_bd"; //identifiant
    $pass= "mpinkowski_bd"; //mdp
    $nomtable= "ProjetR301_Produit";/* Connection bdd */
    $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");
    $link->set_charset("utf8mb4");

    
    if (isset($_POST['NumCarte']) && isset($_POST['DateExpi'])) {
       $numCarte = $_POST['NumCarte'];
       $dateExpi = $_POST['DateExpi']; 

       if ($numCarte[0] == $numCarte[-1]) {
            $dateDuJ = new DateTime();
            $dateDuJ->modify('+3 month');

            $dateExpiFormatFinal = DateTime::createFromFormat('!m/y', $dateExpi);
            
            if ($dateExpiFormatFinal && $dateExpiFormatFinal > $dateDuJ) {
                echo "Paiement Validé <br>
                <a href='./accueil.php'> Retour à l'accueil </a>";
                foreach ($panier as $key => $value) {
                    $query2 = "UPDATE $nomtable SET 'ProjetQuantite' = ". $value['quantiteMax'] -  $value['quantite'];
                    mysqli_query($link, $query2);
                }

                //test pour verifier si tout c'est bien passe
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    exit();
                }

            } else {
                echo "Carte expirée ou date invalide <br>
                            <a href='./afficher_panier.php'> Retour Au panier </a>";
            }
        }
        else {
            echo "Numéro de carte invalide <br>
            <a href='./afficher_panier.php'> Retour Au panier </a>";
       }
    }
    else {
        echo "Veuillez remplir toute les informations Merci <br>
        <a href='./afficher_panier.php'> Retour Au panier </a>";
    }
    mysqli_close($link);
?>
