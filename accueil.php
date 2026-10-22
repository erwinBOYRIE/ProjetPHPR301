<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AchetezVosBooster</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
<header class="header-accueil">
    <a href="accueil.php" class="logo">BOOSTER<span>SHOP</span></a>

    <nav class="nav-accueil">
        <a href="./afficher_panier.php" class='btn-fixe' > Panier</a>
        <a href="logout.php" class="btn-deconnexion">Déconnexion</a>
    </nav>
</header>

<main class="accueil-principal">

    <section class="hero-accueil">
        <p class="surtitre">TA PROCHAINE COLLECTION COMMENCE ICI</p>

        <h1>Trouve ton prochain <span>booster</span></h1>

        <p class="description-accueil">
            Explore nos univers et découvre les boosters qui compléteront
            ta collection.
        </p>
    </section>

    <section class="univers-section">
        <h2>Explore les univers</h2>
        <p class="univers-description">
            Quel univers vas-tu explorer aujourd'hui ?
        </p>

        <div class="grille-univers">

            <a href="pages/Pokemon.php" class="carte-univers pokemon">
                <span class="univers-numero">01</span>
                <div class="univers-contenu">
                    <h3>Pokémon</h3>
                    <p>Attrape-les tous.</p>
                    <span class="univers-fleche">Explorer ↗</span>
                </div>
            </a>

            <a href="pages/Magic.php" class="carte-univers magic">
                <span class="univers-numero">02</span>
                <div class="univers-contenu">
                    <h3>Magic</h3>
                    <p>Déploie ta stratégie.</p>
                    <span class="univers-fleche">Explorer ↗</span>
                </div>
            </a>

            <a href="pages/Yugioh.php" class="carte-univers yugioh">
                <span class="univers-numero">03</span>
                <div class="univers-contenu">
                    <h3>Yu-Gi-Oh!</h3>
                    <p>Prépare ton duel.</p>
                    <span class="univers-fleche">Explorer ↗</span>
                </div>
            </a>

            <a href="pages/wankul.php" class="carte-univers wankul">
                <span class="univers-numero">04</span>
                <div class="univers-contenu">
                    <h3>Wankul</h3>
                    <p>Complète ta collection.</p>
                    <span class="univers-fleche">Explorer ↗</span>
                </div>
            </a>

        </div>
    </section>

</main>

</body>
</html>
