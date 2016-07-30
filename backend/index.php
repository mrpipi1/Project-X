<?php
session_start();
if(!isset($_SESSION['is_admin'])){
    header("location: ../index.php?page=home");
}
date_default_timezone_set('UTC');
// variablen für später, va für pagination
$views  = ('views/');
$logic = ('logic/');
$errors = [];
$entries_per_page = 10;
$current_page = isset($_GET['site']) ? $_GET["site"] : 1;
$page = isset($_GET["page"]) ? $_GET["page"] : "dashboard";
$order_by = isset($_GET['order_by']) ? $_GET["order_by"] : "id";
$order_dir = isset($_GET['order_dir']) ? $_GET["order_dir"] : "ASC";
error_reporting(-1);
include('header.php');
include("../db-connect.php");
//include("../functions/table_functions.php");
include("../functions/form_functions.php");
include('../functions/helpers.php');
include('../functions/backend_functions.php');
include('../functions/load_Content.php');
if(isset($_GET['action']) && $_GET['action'] == 'login'){
    include('../logout.php');
}
if( ! isset($_GET['page']) || $_GET['page'] == 'dashboard' ){
    //$page = "dashboard"; // Legt default-wert in die Variable $page
    $views .= $page .".php";
    //include($views);
    //include('views/site_backend.php');
}elseif($page == "statistik"){
    $views .= $page .".php";
    include($views);
}else{
    //$page = $_GET['page']; // Legt dynamischen GET-Parameter in die Variable $page
    if($page != 'dashboard'){
      //include('views/site_backend.php');
    }
}
include('footer.php');
