<?php 
    $panier = $_SESSION['listePanier'];
    $prixPanier = 0;
    foreach ($panier as $key => $value) {
        $prixPanier = $prixPanier + $value['prix'];
    }
    echo $prixPanier;