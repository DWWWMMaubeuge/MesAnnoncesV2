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


function dislike( $list_annonces )
{
	if ( isset($_POST[ "dislike" ]) )
	{            
		$IDAnnonce = $_GET[ "IDAnnonce" ];
		//echo "<h1>$IDAnnonce<h1>\n";
		$annonce_array = $list_annonces[ $IDAnnonce ];
		$cptdisLike = $annonce_array[5];
		$cptdisLike++;
		$annonce_array[5] = $cptdisLike;
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

?>