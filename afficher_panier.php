<?php
    session_start();
    $panier = $_SESSION['listePanier'];

    echo "<h2>Votre panier </h2>";
    echo "<a href=\"./index.php\">Retour à l'accueil</a> <br>";

    if (!empty($panier)) {
        echo "<table>
                <thead>
                    <tr>
                        <th scope=\"col\">Image</th>
                        <th scope=\"col\">Image 2</th>
                        <th scope=\"col\">Libelle</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">Quantité</th>
                        <th scope=\"col\">Modifier la quantité</th>
                    </tr>
                </thead>
                <tbody>";
        foreach($panier as $clef => $valeur){
                    echo '<tr>
                            <td scope="row"><img src="' . $valeur['image'] . '" alt="image"></td>
                            <td><img src="' . $valeur['image2'] . '" alt="image2"> </td>
                            <td>' . $valeur['libelle'] . '</td>
                            <td>' . $valeur['prix'] . '</td>
                            <td> ' . $valeur['quantite'] . '</td>
                            <td><form method="POST">
                                    <input type="number" name="quantite" id="quantitePro">
                                    <input type="submit" name="quantiteValidez">
                                </form>
                            </td>
                        </tr>';
                }
        echo "</tbody> </table>";
        echo "<form action=\"paiement.php\" method=\"POST\">
                <input type=\"submit\" name=\"paiement\">
              </form>";
    }
    else {
        echo "Votre panier est vide.";
    }