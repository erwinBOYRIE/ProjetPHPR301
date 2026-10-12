<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AjoutProd</title>
</head>
<body>
    <h2>Ajouter des produits</h2>
    <form action="./ajout_prod.php" method="POST">
        <label>Nom du produit : </label>
        <input name="nom" type="text"> <br>
        <label>Description du produit : </label>
        <input name="desc" type="text"> <br>
        <label>Prix du produit : </label>
        <input name="prix" type="number"> <br>
        <label>Categorie du produit : </label>
        <input name="cath" type="text"> <br>
        <label>Photo 1 du produit : </label>
        <input name="photo1" type="text"> <br>
        <label>Photo 2 du produit : </label>
        <input name="photo2" type="text"> <br>
        <input type="submit" value="Validez">
    </form>
    <br>
    <a href="./connexion.html">Déconnexion</a>
</body>
</html>