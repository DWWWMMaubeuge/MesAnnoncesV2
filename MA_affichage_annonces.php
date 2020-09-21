<?php
//$__TEST = true;


function afficher_vignette_annonce( $titre, $description, $image, $prix, $lk, $dl, $cible, $IDA)
{
    echo "<div class=\"annonce_vignette\" onclick=\"goAffGrand($IDA)\">\n";
    echo "    <h2 class=\"titre_vignette\">$titre</h2>\n";
    //echo "    <a href='affiche_grand.php?IDAnnonce=$IDA'>\n";
    echo "    <img class=\"image_vignette\" src=\"$image\" alt=\"\">\n";
    //echo "    </a>\n";
    echo "    <h3>$prix</h3>\n";
    echo "    <h4>$lk j'aime</h4>\n";
    echo "    <h4>$dl je n'aime pas</h4>\n";
    echo "    <div>\n";
    echo "        <form method=\"POST\" action=\"$cible?IDAnnonce=$IDA\" class=\"form\">\n";
    echo "        <input type=\"submit\" class=\"button\" name=\"suppr\" value=\"X\">\n";
    echo "        <input type=\"submit\" class=\"button\" name=\"modif\" value=\"M\">\n";
    echo "        <input type=\"submit\" class=\"button\" name=\"liker\" value=\"<3\">\n";
    echo "        <input type=\"submit\" class=\"button\" name=\"dislike\" value=\"Grr\">\n";
    echo "    </form>\n";
    echo "    </div>\n";
            
    echo "    <div>\n";
    echo "        <p class=\"description_vignette\">$description</p>\n";
    echo "    </div>\n";
    echo "</div>\n";
}



function afficher_detail_annonce( $titre, $description, $image, $prix, $lk, $dl, $cible, $IDA)
{

    GLOBAL $__URL_local;

    echo "<div class=\"annonce_detail\" onclick=\"goAffGrand($IDA)\">\n";
    echo "    <h2 class=\"titre_detail\">$titre</h2>\n";
    //echo "    <a href='affiche_grand.php?IDAnnonce=$IDA'>\n";
    echo "    <img class=\"image_detail\" src=\"$image\" alt=\"\">\n";
    //echo "    </a>\n";
    echo "    <h3>$prix</h3>\n";
    echo "    <h4>$lk j'aime</h4>\n";
    echo "    <h4>$dl je n'aime pas</h4>\n";
    echo "    <div>\n";

    echo "        <form method=\"POST\" action=\"$cible?IDAnnonce=$IDA\" class=\"form\">\n";
    echo "        <input type=\"submit\" class=\"button\" name=\"suppr\" value=\"X\">\n";
    echo "        <input type=\"submit\" class=\"button\" name=\"modif\" value=\"M\">\n";
    echo "        <input type=\"submit\" class=\"button\" name=\"liker\" value=\"<3\">\n";
    echo "        <input type=\"submit\" class=\"button\" name=\"dislike\" value=\"Grr\">\n";
    echo "        </form>\n";

    echo "        <form method=\"POST\" action=\"accueil.php\" class=\"form\">\n";
    //echo "        <input type=\"submit\" class=\"button\" name=\"bck\" value=\"back\" onclick=\"goAccueil();\">";
    echo "        <input type=\"submit\" class=\"button\" name=\"bck\" value=\"back\" onclick='window.location.href=\"http://localhost$__URL_local/accueil.php' \">";
    echo "        </form>\n";
    echo "        </div>\n";         
    echo "       <div>\n";
    echo "        <p class=\"description_detail\">$description</p>\n";
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
            $titre  = $annonce[0];
            $desc   = $annonce[1];
            $image  = $annonce[2];
            $prix   = $annonce[3];
            $like   = $annonce[4];
            $dl     = $annonce[5];
            afficher_vignette_annonce( $titre, $desc, $image, $prix, $like, $dl, $cible, $numero );
        }
    echo "</div>\n";
}







if ( $__TEST )
{
     include ( "MA_fonctions_generales.php" );

    setHeaderNoCache();
   
    echo "<div class=\"container_vignettes\">";
        for( $i=0 ; $i < 20 ; $i++ )
        afficher_vignette_annonce( "mon annonce", "voici un beau lieu de détente", "https://cdn.laredoute.com/products/680by680/4/3/7/43716f4ce8f9a20d91ae2ac686ad3ef5.jpg", "" ); 

    echo "</div>";

}

?>