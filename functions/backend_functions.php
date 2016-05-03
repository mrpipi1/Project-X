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
    $table_name = 'menu_backend_items';
    $list_item = "";

    $sql = "SELECT " .$item_name ." FROM " .$table_name ;
    $result = mysqli_query($link, $sql);
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach($items as $item){
        $menu_item = ucfirst($item['item_name']);
        $list_item .= "<li><a href=\"index.php?page=" .$item['item_name'] ."\">" ."<img class=\"icon\" src=\" ../img/icons/statistik.svg\" /><span class=\"text-wrapper\">" .underscore_to_space($menu_item) ."</span></a></li>\n\r";
    }

    return $list_item;
}


