<?php

session_start();
unset($_SESSION["annonces"]);
unset($_SESSION["compteur"]);
header("Location:Home.php");


?>