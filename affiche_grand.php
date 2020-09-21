<?php
$__TEST = false;

$__URL_local = "MesAnnoncesV2";
// modif

include ( "MA_saisie_annonces.php" );
include ( "MA_affichage_annonces.php" );
include ( "MA_fonctions_generales.php" );
include ( "MA_gestion_vignette.php" );

setHeaderNoCache();
gestionSession();
NAVB();

$annonces = liker( $annonces );
$_SESSION[ "annonces" ]  = $annonces;

$annonces = supprimer( $annonces );
$_SESSION[ "annonces" ]  = $annonces;



$IDAnnonce = $GET["IDAnnonce"];

$annonce  = $annonces[ $IDAnnonce ];

$titre  = $annonce[0];
$desc   = $annonce[1];
$image  = $annonce[2];
$prix   = $annonce[3];
$like   = $annonce[4];
$dl     = 0;

afficher_vignette_annonce_grand( $titre, $desc, $image, $prix, $like, $dl, "affiche_grand.php", $IDAnnonce);

echo "<div class=\"container_vignettes\" >\n";
echo    "<div class=\"annonce_vignette2\">\n";
echo        "<div class=\"vig2\">\n";
echo            "<h1>Aff Grand</h1>\n";
echo        "</div>\n";
echo    "</div>\n";
echo "</div>\n";


?>