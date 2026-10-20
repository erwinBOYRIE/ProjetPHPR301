<?php
    session_start();
    $quantite = $_POST['quantite'];
    $lib = $_POST['lib_produit'];
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
        if ($quantite == 0) {
            unset($_SESSION['listePanier'][$lib]);
        }
        else {
            $_SESSION['listePanier'][$lib]['quantite'] = $quantite;
        }
    }

    echo '<meta http-equiv="refresh" content="0;URL=' . $_SERVER['HTTP_REFERER'] . '">';
