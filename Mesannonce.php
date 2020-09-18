<?php

function afficher_annonce( $titre, $description, $cible)
{
    echo "<h1>Annonce</h1>";
    echo "<div>";
    echo "    <h2>$titre</h2>";
    //echo "    <img class=\"image\" src=\"coffeeShop2.jpg\" alt=\"coffee peace\">";
    echo "    <div>";
    echo "        <form method=\"POST\" action=\"$cible\" class=\"form\">";
    echo "        <input type=\"submit\" class=\"button\" value=\"Découvrir\">";
    echo "        <input type=\"submit\" class=\"button\" value=\"Réservez\">";
    echo "        <input type=\"submit\" class=\"button\" value=\"Ecrire un avis\">";
    echo "    </form>";
    echo "    </div>";
            
    echo "    <div>";
    echo "        <p>$description</p>";
    echo "    </div>";
    echo "</div>";
}


afficher_annonce( "mon annonce", "voici un beau lieu de détente", "" ); 


?>