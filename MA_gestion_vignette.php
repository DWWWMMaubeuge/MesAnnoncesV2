<?php

function supprimer( $list_annonces )
{
	if ( isset($_POST[ "suppr" ]) )
	{            
		$IDAnnonce = $_GET[ "IDAnnonce" ];
		//echo "<h1>$IDAnnonce<h1>\n";
		unset(   $list_annonces[ $IDAnnonce ]  ); 
	}
	return $list_annonces;
}

function liker( $list_annonces )
{
	if ( isset($_POST[ "liker" ]) )
	{            
		$IDAnnonce = $_GET[ "IDAnnonce" ];
		//echo "<h1>$IDAnnonce<h1>\n";
		$annonce_array = $list_annonces[ $IDAnnonce ];
		$cptLike = $annonce_array[4];
		$cptLike++;
		$annonce_array[4] = $cptLike;
		$list_annonces[ $IDAnnonce ] = $annonce_array; 
	}
	return $list_annonces;
}

function modifier( $cible )
{
	if ( isset($_POST[ "modif" ]) )
	{            
		$IDAnnonce = $_GET[ "IDAnnonce" ];
		header( "location: $cible?IDAnnonce=$IDAnnonce");
	}
}
function hate( $list_annonces )
{
	if ( isset($_POST[ "hate" ]) )
	{            
		$IDAnnonce = $_GET[ "IDAnnonce" ];
		//echo "<h1>$IDAnnonce<h1>\n";
		$annonce_array = $list_annonces[ $IDAnnonce ];
		$cpthate = $annonce_array[5];
		$cpthate++;
		$annonce_array[5] = $cpthate;
		$list_annonces[ $IDAnnonce ] = $annonce_array; 
	}
	return $list_annonces;
}








?>