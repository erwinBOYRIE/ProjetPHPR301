<?php
    session_start();
    $panier = $_SESSION['listePanier'];
    
    echo "<h2>Votre panier </h2>";
    echo "<table>
            <thead>
                <tr>
                    <th scope=\"col\">Image</th>
                    <th scope=\"col\">Image 2</th>
                    <th scope=\"col\">Libelle</th>
                    <th scope=\"col\">Prix</th>
                    <th scope=\"col\">Quantité</th>
                </tr>
            </thead>
            <tbody>";
    foreach($panier as $clef => $valeur){
                echo "<tr>
                        <td scope=\"row\">image</td>
                        <td>image2</td>
                        <td>$clef</td>
                        <td>prix</td>
                        <td>$valeur</td>
                      </tr>";
            }
    echo "</tbody> </table>";