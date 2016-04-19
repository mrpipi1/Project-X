<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/04/16
 * Time: 15:30
 */

$views  = ('views/');

include('header.php');

if( ! isset($_GET['page']) ){
    $page = "views/dasbord"; // Legt default-wert in die Variable $page
}else{
    $page = $_GET['page']; // Legt dynamischen GET-Parameter in die Variable $page
}

if($page){
    $views .= $page .".php";
}


include($views);

include('footer.php');