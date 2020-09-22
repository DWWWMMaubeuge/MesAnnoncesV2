<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<?php
$__TEST = false;

$__URL_local = "MesAnnoncesV2";
// modif

include ( "MA_saisie_annonces.php" );
include ( "MA_affichage_annonces.php" );
include ( "MA_fonctions_generales.php" );
include ( "MA_gestion_vignette.php" );

setHeaderNoCache("Accueil");
gestionSession();
NAVB();




?>

<div class="banner-area">   
<div class="single-banner">        
    <div classe="banner-img">
        <img src="images/GT86.jpg" alt="">
    </div>
</div>
<div class="banner-text">
    <li><a><h2>Bienvenue sur le bon coin du pauvre.</h2></a></li>
    <p>(du pauvre parce que c'est le bon coin mais en moins bien)</p>
 </div>
</div>




