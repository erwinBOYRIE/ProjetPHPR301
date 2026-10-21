<?php

    if (isset($_POST['NumCarte']) && isset($_POST['DateExpi'])) {
       $numCarte = $_POST['NumCarte'];
       $dateExpi = $_POST['DateExpi'];
       if ($numCarte[0]==$numCarte[-1]) {
        $dateDuJ = new DateTime();
        $dateDuJ->modify('+3 month');
        $dateExpiFormate = new DateTime($dateExpi);
        if ($dateExpiFormate>$dateDuJ) {
            echo" Paiement Validé";
        }

       }
    }
?>