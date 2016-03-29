<?php

// content definieren
$content = ('content/');

// header eingebunden
include('header.php');

// Überprüft ob der GET-Parameter "page" nicht existiert
if( ! isset($_GET['page']) ){
	$page = "home"; // Legt default-wert "home" in die Variable $page
}else{
	$page = $_GET['page']; // Legt dynamischen GET-Parameter in die Variable $page
}

// GET-Abfrage
//if( $page == "home" ){
//	$content .= "home.php";
//	$title = "Lotus Yoga - Ihr Yogastudio";
//}elseif( $page == "AGB" ){
//	$content .= "agb.php";
//	$title = "Lotus Yoga - Allgemeine Geschäftsbedingungen";
//}


// GET-Abfrage verkürzt:

if($page){
	$content .= $page .".php";
}

// content eingebunden
include($content);
// footer eingebunden
include('footer.php');

?>
