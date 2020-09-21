<?php
$__TEST = false;

include ( "MA_saisie_annonces.php" );
include ( "MA_affichage_annonces.php" );
include ( "MA_fonctions_generales.php" );

setHeaderNoCache();
gestionSession();
NAVB();

// la fonction retourne un tableau dans lequel il y a :
// titre (O) 
// description (1) 
// image (2)
// prix (3) 

if ( isset( $_GET[ "IDAnnonce" ]))
{
	$IDAnnonce = $_GET[ "IDAnnonce" ];
}


$ret_annonce_array = saisie_annonce();
if ( $ret_annonce_array != NULL )
{
	//echo "IDAnnonce : $IDAnnonce<br>";
	//print_r($annonces);
    unset( $annonces[ $IDAnnonce ]) ; 
    $annonces[ $IDAnnonce ] = $ret_annonce_array; 

    $_SESSION[ "annonces" ]  = $annonces;
    
    header("location: affiche_grand?IDAnnonce=$IDAnnonce");
}
echo "<div class=\"container_detail\" >\n";
echo    "<div class=\"annonce_detail2\">\n";
echo        "<div class=\"vig2\">\n";
                $cible= "modifier_annonce_2.php?IDAnnonce=$IDAnnonce";
                form_modifier_annonce( $cible, $IDAnnonce );
echo        "</div>\n";
echo    "</div>\n";
echo "</div>\n";
?>