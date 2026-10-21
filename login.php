<?php
    // On definit un login et un mot de passe de base
    $login_valide_admin = "admin";
    $pwd_valide_admin = "adminpwd";

    $login_valide_user = "user";
    $pwd_valide_user = "userpwd";

    // on teste si nos variables sont definies
    if (isset($_POST['login']) && isset($_POST['pwd'])) {
    // on verifie les informations saisies
        if ($login_valide_admin == $_POST['login'] && $pwd_valide_admin == $_POST['pwd']) {
            session_start ();
            // on enregistre les parametres de notre visiteur comme variables de session ($login et $pwd) (
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['pwd'] = $_POST['pwd'];
            // on redirige notre visiteur vers une page de notre section membre
            header ('location: backoffice.php');
        }
        elseif ($login_valide_user == $_POST['login'] && $pwd_valide_user == $_POST['pwd']) {
            session_start ();
            // on enregistre les parametres de notre visiteur comme variables de session ($login et $pwd) (
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['pwd'] = $_POST['pwd'];
            $_SESSION['listePanier'] = array();
            // on redirige notre visiteur vers une page de notre section membre
            header ('location: index.php');
        }
        else {
            echo '<body onLoad="alert(\'Login ou mot de passe incorrect !\')">';
            // puis on le redirige vers la page d'accueil
            echo '<meta http-equiv="refresh" content="0;URL=accueil.html">';
        }
    } 
    else {
    echo 'Les variables du formulaire ne sont pas declarees.';
    }
?>