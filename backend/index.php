<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/04/16
 * Time: 15:30
 */

$views  = ('views/');
$logic = ('logic/');
$errors = [];
$entries_per_page = 10;
$current_page = isset($_GET['page']) ? $_GET["page"] : 1;
$site = isset($_GET['site']) ? $_GET["site"] : "";
$order_by = isset($_GET['order_by']) ? $_GET["order_by"] : "id";
$order_dir = isset($_GET['order_dir']) ? $_GET["order_dir"] : "DESC";

session_start();
error_reporting(-1);


include("../db-connect.php");
include('../functions/table_functions.php');

include('header.php');

if( ! isset($_GET['page']) ){
    $page = "dasbord"; // Legt default-wert in die Variable $page
}else{
    $page = $_GET['page']; // Legt dynamischen GET-Parameter in die Variable $page
    $incl_text = 'logic/logic_' .$_GET['page'] .'.php';
    include($incl_text);            // falls wir nicht für alles eine logic haben ein if machen wo nur includet wird wos eine gibt
}

if($page){
    $views .= $page .".php";
}



include($views);
//include($logic);

include('footer.php');