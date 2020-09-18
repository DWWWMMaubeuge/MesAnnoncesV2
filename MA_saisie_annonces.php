 <?php

function saisie_annonce()
{
    if( $_POST ) 
        if( isset($_POST['titre']) && $_POST['titre'] != "") 
        {
            $titre = $_POST['titre'];
            $prix = $_POST['prix'];
            $description = $_POST['description'];
            $image = $_POST['image'];
            //echo "titre : $titre<br>\n";

            return( [ $titre, $description, $image, $prix, 0 ]  );  
        }
    return NULL;
}


function form_annonce( $cible )
{
    echo "<form method=\"POST\" action=\"$cible\">\n";
    echo "    <input type=\"text\" name=\"titre\" placeholder=\"Inserer mon titre\">\n";
    echo "    <input type=\"number\" name=\"prix\" placeholder=\"prix\">\n";
    echo "    <input type=\"text\" name=\"image\" placeholder=\"lien d'une image\">\n";
    echo "    <textarea name=\"description\" row=\"10\"placeholder='Inserer votre description'></textarea>\n";
    echo "    <input type='submit' name=\"envoi\" value=\"Envoyer\">\n";
    echo "</form>\n";
}

function form_modifier_annonce( $cible, $IDA )
{
    GLOBAL $annonces;

    //echo "form_modifier_annonce( $cible, $IDA )<br>";
    $annonce = $annonces[ $IDA ];
    $titre  = $annonce[0];
    $desc   = $annonce[1];
    $image  = $annonce[2];
    $prix   = $annonce[3];


    echo "<form method=\"POST\" action=\"$cible\">\n";
    echo "    <input type=\"text\" name=\"titre\" value=\"$titre\">\n";
    echo "    <input type=\"number\" name=\"prix\" value=\"$prix\">\n";
    echo "    <input type=\"text\" name=\"image\" value=\"$image\">\n";
    echo "    <textarea name=\"description\" row=\"10\">$desc</textarea>\n";
    echo "    <input type='submit' name=\"envoi\" value=\"Envoyer\">\n";
    echo "</form>\n";
}

?>