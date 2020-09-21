<?php


$__TEST = false;

include ( "MA_saisie_annonces.php" );
include ( "MA_affichage_annonces.php" );
include ( "MA_fonctions_generales.php" );
include ( "MA_gestion_vignette.php" );




function affichage_annonce( $id )
{
    GLOBAL $annonces;

    $annonce = $annonces[ $id ];
    $tit  =  $annonce[0];
    $par  =  $annonce[1];
    $img  =  $annonce[2];
    $cond =  $annonce[3];   
    $loc  =  $annonce[4];
    $info =  $annonce[5];
    $Site =  $annonce [6];
    echo "<h2>$tit :</h2>";
    echo "<div><img src=\"$img\"/> ";
    echo "<p>";
    echo "<h3>Description :</h3>";
    echo "<div class=\"para\"><p>";
    echo $par;
    echo "<h3>Conditions :</h3>";
    echo "<ul>";
            foreach( $cond as $ligne )
                echo "<li>$ligne</li>";
            echo "</ul>";
            echo "<h3>Locaux :</h3>";
            echo "<ul>";

            foreach( $loc as $ligne )
                echo "<li>$ligne</li>";
            echo "</ul>";
            echo "<h3>Informations :</h3>";
            echo "<ul>";

            foreach( $info as $ligne )
            echo "<li>$ligne</li>";
            echo "</ul>";
            echo "<ul>";
            
            foreach( $Site as $ligne )
            echo "<li>$ligne</li>";
            echo" </ul>";
            echo "</ul>";

    echo "</p>";
}


$annonces =
[
    0 => 
    [
        "Restaurant a vendre ",
        "Le réseau Mibelimmo vous propose ce bar restaurant licence IV situé dans un quartier recherché du 10ème arrondissement, proche du quartier de BELLEVILLE.. Bail commercial 3/6/9 avec destination de bar et restaurant licence IV. Superficie totale de plain pied de 140m2 avec deux salles distinctes de plain pied de 70 couverts au total. Cuisine de plain pied avec extraction de gros volume au toit. Tout type de restauration envisageable. Belle hauteur sous plafond. Linéaire de façade de 12 mètres. Loyer mensuel de 3600 euros charges comprise <strong>Prix</strong>: 436 000€FAI dont 30 000€HT d'honoraires d'agence. publiée le 11/02/2020 Conditions : ",
        "https://cap.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fcap.2F2020.2F06.2F09.2F00d2c3ea-1c12-407a-b869-9d2f3588afd4.2Ejpeg/750x375/background-color/ffffff/quality/70/ile-de-france-une-reouverture-des-restaurants-possible-avant-le-22-juin-1372184.jpg",
        ["loyer : 499", "bail : 150", "charge : 125"],
        [  "Surface : 140 m²", "Avec terrasse : Oui", "Avec vitrine : Oui", "Places en salle : 70" ],
        ["Honoraires :",  "Consultez les honoraires", "Services pros","Site Internet ",  ],
        ["<a href=\"http://www.mibelimmo.com\">Mobileimmo </a>  " ],
    ],

    1 => 

    [
        "restaurant a vendre 2",
        "Le réseau Mibelimmo vous propose ce bar restaurant licence IV situé dans un quartier recherché du 10ème arrondissement, proche du quartier de BELLEVILLE.. Bail commercial 3/6/9 avec destination de bar et restaurant licence IV. Superficie totale de plain pied de 140m2 avec deux salles distinctes de plain pied de 70 couverts au total. Cuisine de plain pied avec extraction de gros volume au toit. Tout type de restauration envisageable. Belle hauteur sous plafond. Linéaire de façade de 12 mètres. Loyer mensuel de 3600 euros charges comprise Prix: 436 000€FAI dont 30 000€HT d'honoraires d'agence. publiée le 11/02/2020 Conditions : ",
        "https://cap.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fcap.2F2020.2F06.2F09.2F00d2c3ea-1c12-407a-b869-9d2f3588afd4.2Ejpeg/750x375/background-color/ffffff/quality/70/ile-de-france-une-reouverture-des-restaurants-possible-avant-le-22-juin-1372184.jpg",
        ["loyer : 499", "bail : 150", "charge : 125"],
        [  "Surface : 140 m²", "Avec terrasse : Oui", "Avec vitrine : Oui", "Places en salle : 70" ]

    ]
];




setHeaderNoCache();

affichage_annonce( 0 );
//affichage_annonce( 1 );

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="consulter_annonce1.css"rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

