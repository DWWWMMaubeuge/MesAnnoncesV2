<?php
$__TEST = false;
$__URL_local = "/Maubeuge/MesAnnoncesV2";
// modif

include ( "MA_saisie_annonces.php" );
include ( "MA_affichage_annonces.php" );
include ( "MA_fonctions_generales.php" );
include ( "MA_gestion_vignette.php" );

setHeaderNoCache();
gestionSession();

$annonces = liker( $annonces );
$_SESSION[ "annonces" ]  = $annonces;

$annonces = dislike( $annonces );
$_SESSION[ "annonces" ]  = $annonces;

$annonces = supprimer( $annonces );
$_SESSION[ "annonces" ]  = $annonces;


$IDAnnonce = $_GET[ "IDAnnonce" ];

$annonce  = $annonces[ $IDAnnonce ];
$titre  = $annonce[0];
$desc   = $annonce[1];
$image  = $annonce[2];
$prix   = $annonce[3];
$like   = $annonce[4];
$dl     = $annonce[5];

afficher_detail_annonce( $titre, $desc, $image, $prix, $like, $dl, "affiche_grand.php", $IDAnnonce );




modifier( "modifier_annonce.php" );




?>
<h1>Aff Grand</h1>
