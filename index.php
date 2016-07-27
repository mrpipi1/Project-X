<?php
session_start();
date_default_timezone_set('UTC');
// content definieren
$content = ('content/');
if(isset($_GET['action']) && $_GET['action'] == 'login'){
	//include('logout.php');
}

if(isset($_GET['action']) && $_GET['action'] == 'logout' && isset($_SESSION)){
	session_destroy();
}
$admin = '';
include("db-connect.php");
include('functions/load_content.php');
include('functions/helpers.php');
include('functions/form_functions.php');
include('functions/user_functions.php');
include('functions/shop_functions.php');
include('logic/login.php');
include('logic/register_logic.php');
include('logic/user_message.php');
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




$current_page = 'contact';
//include('inc_header.php');

// GET-Abfrage verkürzt:

if($page){
	$content .= $page .".php";
}
// content eingebunden
include($content);
// footer eingebunden
include('footer.php');

?>
