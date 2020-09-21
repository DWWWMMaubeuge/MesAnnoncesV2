<?php
//$__TEST = true;


function afficher_vignette_annonce( $titre, $description, $image, $prix, $lk,$dslk, $cible="")
{
    echo "<div class=\"annonce_vignette\" >\n";
    echo "    <h2 class=\"titre_vignette\">$titre</h2>\n";
    echo "    <img class=\"image_vignette\" src=\"$image\" alt=\"\">\n";
    echo "    <h3>$prix</h3>\n";
    echo "    <h4>$lk j'aime</h4>\n";
    echo "    <h4>$dslk je n'aime pas</h4>\n";
    echo "    <div>\n";
    echo "        <form method=\"POST\" action=\"$cible\" class=\"form\">\n";
    echo "        <input type=\"submit\" class=\"button\" name=\"suppr\" value=\"X\">\n";
    echo "        <input type=\"submit\" class=\"button\" name=\"modif\" value=\"M\">\n";
    echo "        <input type=\"submit\" class=\"button\" name=\"liker\" value=\"<3\">\n";
    echo "        <input type=\"submit\" class=\"button\" name=\"dislike\" value=\":-/\">\n";
    echo "    </form>\n";
    echo "    </div>\n";
            
    echo "    <div>\n";
    echo "        <p class=\"description_vignette\">$description</p>\n";
    echo "    </div>\n";
    echo "</div>\n";
}


function afficher_galerie( $list_annonces, $cible )
{
// je prepare la DIV container
    echo "<div class=\"container_vignettes\">"; 
        // je parcours le  dictionnaire des annonces 
        
        foreach ( $list_annonces as $numero => $annonce ) 
        {
            echo $numero;
            // je récupère les éléments du tableau
            $titre     = $annonce[0];
            $desc      = $annonce[1];
            $image     = $annonce[2];
            $prix      = $annonce[3];
            $like      = $annonce[4];
            $dislike   = $annonce[5];
            $vue       = $annonce[6];
            afficher_vignette_annonce( $titre, $desc, $image, $prix, $like, $dislike,$vue, "$cible?IDAnnonce=$numero" );
        }
    echo "</div>\n";
}


if ( $__TEST )
{
     include ( "MA_fonctions_generales.php" );

    setHeaderNoCache();
   
    echo "<div class=\"container_vignettes\">";
        for( $i=0 ; $i < 20 ; $i++ )
            afficher_vignette_annonce( "mon annonce", "voici un beau lieu de détente", "https://cdn.laredoute.com/products/680by680/4/3/7/43716f4ce8f9a20d91ae2ac686ad3ef5.jpg", 50,$i,$i, "" ); 

    echo "</div>";

}




?>