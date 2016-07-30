<?php


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
        $list_item .= "";
    }

    return $list_item;
}


