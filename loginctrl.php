<?php
// page de controle de login 
// page "aveugle" qui m�morise les var de session et redirige vers le menu
session_start();
$_SESSION["usrnom"] = $_POST["nom"];
header("location:loginsuite.php") ;
?>


