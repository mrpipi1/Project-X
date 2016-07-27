<?php
function get_content_data($table_name){
    global $link;
    $sql = "SELECT * FROM " .$table_name;
	$res = mysqli_query($link, $sql);
	return $res;
}

function get_specific_content_data($table_name, $where, $equals){
    global $link;
    $sql = "SELECT * FROM " .$table_name. " WHERE ". $where . " = " . $equals;
    $res = mysqli_query($link, $sql);
    return $res;
}

function get_specific_join_content_data($table_name, $join_table, $join_id, $where, $equals){
    global $link;
    $sql = "SELECT * FROM " .$table_name. " LEFT JOIN ". $join_table. " ON " .$table_name.".id = " .$join_table.".".$join_id;
    echo $sql;
    $res = mysqli_query($link, $sql);
    return $res;
}

$employees = get_content_data('employees');
$courses = get_content_data('courses');
$about_us = get_specific_content_data('contents', 'id', 3);
$impressum = get_specific_content_data('contents', 'id', 15);
$agb = get_specific_content_data('contents', 'id', 16);
$products = get_content_data('products');

if(isset($_GET['page']) && $_GET['page'] == 'Detailansicht' && isset($_GET['product_id'])){
    $detail_product = get_specific_join_content_data('products', 'stock', 'product_id', 'id', $_GET['product_id']);
}


?>
