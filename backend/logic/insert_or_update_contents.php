<?php
include('../../db-connect.php');
include("../../functions/table_functions.php");
$action = $_POST['action'];
$array = (array)$_POST['data'];
$page = $_POST['page'];
if($action == 'edit'){
    $id = $_POST['id'];
}
$page = $_POST['page'];
if($action == 'edit'){
        //$id = $_GET['id'];
        //$array = $_POST;
        $tablename = $page;
        $updated = update_contents($page, $id, $array);
        $return['updated'] =  $updated;
}elseif($action == 'new'){
    //$array = $_POST;
    //$tablename = $_GET['page'];
    $insert = insert_contents($page, $array);
    $return['insert'] =  $insert;
}
