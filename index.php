<?php
include('content/header.php');


// Content-Dateien-Ordner
$content = "content/";
// zusätzlich noch eine $ für css definiert
//$css = "css";

// Überprüft ob der GET-Parameter "page" nicht existiert
if( ! isset($_GET['page']) ){
	$page = "home"; // Legt default-wert "home" in die Variable $page
}else{
	$page = $_GET['page']; // Legt dynamischen GET-Parameter in die Variable $page
}


include ('content/landingpage.php');


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
// zusätzlich noch css eingebunden
//include ($css);


// konnte $content nicht einbinden. Muss den Pfad angeben 'content/'


include('content/footer.php');

?>
