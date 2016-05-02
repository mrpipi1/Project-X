<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30/04/16
 * Time: 13:55
 */


function create_menu_items(){

    global $link;
    $item_name = 'item_name';
    $table_name = 'menu_backend';
    $list_item = "";

    $sql = "SELECT " .$item_name ." FROM " .$table_name ;
    $result = mysqli_query($link, $sql);
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach($items as $item){
        $menu_item = ucfirst($item['item_name']);
        $list_item .= "<li><a href=\"index.php?page=" .$item['item_name'] ."\">" .$menu_item ."</a></li>";
    }

    return $list_item;
}


