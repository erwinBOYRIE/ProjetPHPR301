<?php
    // On definit un login et un mot de passe de base
    $login_valide = "admin";
    $pwd_valide = "adminpwd";

    // on teste si nos variables sont definies
    if (isset($_POST['login']) && isset($_POST['pwd'])) {
    // on verifie les informations saisies
        if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {
            session_start ();
            // on enregistre les parametres de notre visiteur comme variables de session ($login et $pwd) (
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['pwd'] = $_POST['pwd'];
            // on redirige notre visiteur vers une page de notre section membre
            header ('location: ');
        }
        else {
            echo '<body onLoad="alert(\'Membre non reconnu...\')">';
            // puis on le redirige vers la page d'accueil
            echo '<meta http-equiv="refresh" content="0;URL=index.html">';
        }
    } 
    else {
    echo 'Les variables du formulaire ne sont pas declarees.';
    }
?>