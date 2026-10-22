<?php 
    session_start();

    $panier = $_SESSION['listePanier'];
    $prixPanier = 0;
    foreach ($panier as $key => $value) {
        $prixPanier = $prixPanier + $value['prix'];
    }
?>

    <form action="validationPaiement.php" method="POST">
        <p> Numéro de carte <input type="text" name="NumCarte" ></p>

        <p>Date d'expiration <input type="text" name="DateExpi"></p>
        
        <br>
        <input type="submit" name="validerPaiement" value="Payer">
    </form>


    

