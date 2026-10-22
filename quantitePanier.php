<?php
    session_start();
    $quantite = $_POST['quantite'];
    $lib = $_POST['lib_produit'];
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
        $quantiteMax = $_SESSION['listePanier'][$lib]['quantiteMax'];
        if ($quantite <= $quantiteMax && $quantite != 0) {
            $_SESSION['listePanier'][$lib]['quantite'] = $quantite;
        }
        elseif ($quantite > $quantiteMax) {
            //pop-up
<<<<<<< HEAD
            echo '<body onLoad="alert(\'Impossible de modifier, la quantité choisi dépasse la quantité en stock du produit\')">';
=======
            echo "<body onLoad=\"alert('Impossible de modifier la quantité. Quantité max : $quantiteMax ' )\">";
>>>>>>> f58512eb5578916936c5a20b49d73370758ee163
            //redirection vers le panier
            echo '<meta http-equiv="refresh" content="0;URL=afficher_panier.php">';
        } 
        elseif ($quantite == 0) {
            unset($_SESSION['listePanier'][$lib]);
        }
    }

    echo '<meta http-equiv="refresh" content="0;URL=' . $_SERVER['HTTP_REFERER'] . '">';