<?php


// nach category ordnen!
function get_products($table_name){
    global $link;
    $sql = "SELECT * FROM " .$table_name;
    $result = mysqli_query($link, $sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $products;
}
