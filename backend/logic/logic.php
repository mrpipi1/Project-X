<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 10:39
 */
global $link;

$total_contents = total_contents($page);


$total_pages = ceil($total_contents / $entries_per_page);

if(isset($_GET['action'])){
    if($_GET['action'] == 'delete' ){
        $id = (int)$_GET["id"];
        $deleted = delete_contents($_GET['page'], $id);
        $return['deleted'] =  $deleted;
    }elseif($_GET['action'] == 'edit'){
        include('views/form_backend.php');
    }elseif($_GET['action'] == 'update'){
        $id = $_GET['id'];
        $array = $_POST;
        $tablename = $_GET['page'];
        $updated = update_contents($_GET['page'], $id, $array);
        $return['updated'] =  $updated;
    }elseif($_GET['action'] == 'new') {
        include('views/form_backend.php');
    }elseif($_GET['action'] == 'insert'){
        $array = $_POST;
        $tablename = $_GET['page'];
        $insert = insert_contents($_GET['page'], $array);
        $return['insert'] =  $insert;
    }
}
include('views/site_backend.php');






