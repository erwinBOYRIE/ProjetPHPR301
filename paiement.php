<?php 
    session_start();
    $panier = $_SESSION['listePanier'];
    $prixPanier = 0;
    foreach ($panier as $key => $value) {
        $prixPanier = $prixPanier + $value['prix'];
    }
    echo "
    <form action=\"validationPaiement.php\" method=\"POST\">
        <input type=\"text\" name=\"NumCarte\" >
        <input type=\"text\" name=\"DateExpi\">
        <input type=\"submit\" name=\"validerPaiement\" value=\"Payer\">
    </form>";



?>
