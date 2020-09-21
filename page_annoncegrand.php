<?php

include ( "MA_saisie_annonces.php" );
include ( "MA_affichage_annonces.php" );
include ( "MA_fonctions_generales.php" );
include ( "MA_gestion_vignette.php" );



setHeaderNoCache();


function affichage_annonce( $id)
{
    GLOBAL $annonces;

    $annonce = $annonces[ $id ];
    $titre   =  $annonce[0];
    $desc    =  $annonce[1];
    $image   =  $annonce[2];
    $prix    =  $annonce[3]; 
       
}

function saisi_annonce($cible)
{ 
    
    echo "<h2>$titre :</h2>";
    echo "<div><img src=\"$image\"/></div> ";
    echo "<p>$desc</p>";
    echo "<h3>$prix</h3>";
}
/*
echo  "<article>";
echo  "<div class=\"annonce\">\n";
echo  "<div class=\"imageC\">\n";
echo  "<h2>titre</h2>";
echo  "<img src=\"https://cdn.laredoute.com/products/680by680/4/3/7/43716f4ce8f9a20d91ae2ac686ad3ef5.jpg\"alt=\"voiture\">";
echo  "<p>";
echo  "</p>";
echo  "</div>";
echo  "<div class=\"comment\">\n";
echo  "<p>";
echo  "</p>";
echo  "</div>";

echo  "</div>";
echo  "</article>";

*/







?>