<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30/04/16
 * Time: 13:55
 */


function create_menu_items(){
    global $link;
    $list_items = "";
    $item_name = 'item_name';
    $table_name = 'menu_backend';


    $sql = "SELECT " .$item_name ." FROM " .$table_name ;
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $arr = array();
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $val) $arr[$i] = $val;

        $list_items .= "<li><a href=\"index.php?page=" .$arr[$i] ."\">" .$arr[$i]."</a></li>\n \r";
        $i++;
    }
    return $list_items;
}


