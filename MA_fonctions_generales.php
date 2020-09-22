<?php


//$__TEST = true;


function setHeaderNoCache($title)
{
	GLOBAL $__URL_local;
	
	echo "<DOCTYPE html>\n";
	echo "<html>\n";
	echo "<head>\n";
	echo "<meta http-equiv=\"Cache-Control\" content=\"no-cache, no-store, must-revalidate\" />\n";
	echo "<meta http-equiv=\"Pragma\" content=\"no-cache\" />\n";
	echo "<meta http-equiv=\"Expires\" content=\"0\" />\n";
	echo "<link href=\"annonce.css\" rel=\"stylesheet\">\n";
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css2.css\">\n";
	//echo "<link href=\"MA_CSS.css\" rel=\"stylesheet\">\n";
	echo "<link href='http://fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>\n";
    echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">\n";
    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
    echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>\n";
    echo "<script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>\n";
	echo "<script>\n";
	echo "function goAffGrand( id )\n";
	echo "{ window.location.replace(\"http://localhost/$__URL_local/affiche_grand.php?IDAnnonce=\"+id );}\n";
	echo "</script>\n";
	echo "<title>$title</title>\n";
	echo "</head>\n";
	echo "<body>\n";
}



// gestion de la session
function gestionSession()
{
	GLOBAL $annonces, $compteur;

	session_start();

	// dictionaire contenant nos annonce
	if ( isset($_SESSION["annonces"]) )
	{
		//echo "session exist<br>\n";
		$annonces = $_SESSION["annonces"];
	}
	else
	{	
		//echo "nouvelle session<br>\n";
		$annonces = array();
		$_SESSION["annonces"] = $annonces;
	}	
	
	// gestion du compteur
	if ( isset($_SESSION["compteur"]) )
	{
		//echo "session exist<br>\n";
		$compteur = $_SESSION["compteur"];
	}
	else
	{	
		//echo "nouvelle session<br>\n";
		$compteur = 0;
		$_SESSION["compteur"] = $compteur;
	}
}
// fin de gestion de la session

if ( $__TEST )
{

	//echo "===================================================<br>\n";  
	//echo "DEBUT section de test du fichier calculerLaSommeDuPanier<br>\n";  



	//echo "FIN de section de test du fichier calculerLaSommeDuPanier<br>\n";  
	//echo "====================================================<br>\n";  
}


function NAVB()
{
 echo "<nav>\n";
 echo "<input type=\"checkbox\" id=\"check\">\n
 <label for=\"check\" class=\"checkbtn\">\n
   <i class=\"fas fa-bars\"></i></label>\n";
	 echo "<div class=\"logo\">\n";
		 echo "LeBonCoin du pauvre\n";
	 echo "</div>\n";
	 
		 echo "<ul>\n";
			 echo "<li><a class=\"active\" href=\"Home.php\">Home</a></li>\n";
			 echo "<li><a class=\"active\" href=\"accueil.php\">Annonces</a></li>\n";
			 echo "<li><a href=\"ajouter_annonce.php\">New Annonce</a></li>\n";
			 echo "<li><a href=\"logout.php\">clear annonces</a></li>\n";
			 echo "<li><a href=\"Home.php?logout=\"1\"\" >logout</a></li>\n";
		 echo "</ul>\n";
	 
 echo "</nav>\n";

};

?>