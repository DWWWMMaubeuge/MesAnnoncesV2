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

// la fonction retourne un tableau dans lequel il y a :
// titre (O) 
// description (1) 
// image (2)
// prix (3) 



$annonces = liker( $annonces );
$_SESSION[ "annonces" ]  = $annonces;

$annonces = supprimer( $annonces );
$_SESSION[ "annonces" ]  = $annonces;

modifier( "modifier_annonce.php" );
afficher_galerie( $annonces, "accueil.php" );





// affichage du formulaire de saisie de l'annonce
?>