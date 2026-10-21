<?php
    if (isset($_POST['NumCarte']) && isset($_POST['DateExpi'])) {
       $numCarte = $_POST['NumCarte'];
       $dateExpi = $_POST['DateExpi']; 

       if ($numCarte[0] == $numCarte[-1]) {
            $dateDuJ = new DateTime();
            $dateDuJ->modify('+3 month');

           
            $dateExpiFormatFinal = DateTime::createFromFormat('!m/y', $dateExpi);

            
            if ($dateExpiFormatFinal && $dateExpiFormatFinal > $dateDuJ) {
                echo "Paiement Validé <br>
                <a href='./index.php'> Retour à l'accueil </a>";
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
?>
