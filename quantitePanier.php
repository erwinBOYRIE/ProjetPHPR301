<?php
    session_start();
    $quantite = $_POST['quantite'];
    $lib = $_POST['lib_produit'];
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
        $quantiteMax = $_SESSION['listePanier'][$lib];
        if ($quantite < $quantiteMax && $quantite != 0) {
            $_SESSION['listePanier'][$lib]['quantite'] = $quantite;
        }
        elseif ($quantite > $quantiteMax) {
            echo "Impossible quantité max possible pour ce produit : $quantiteMax";
        } 
        elseif ($quantite == 0) {
            unset($_SESSION['listePanier'][$lib]);
        }
    }

    echo '<meta http-equiv="refresh" content="0;URL=' . $_SERVER['HTTP_REFERER'] . '">';
