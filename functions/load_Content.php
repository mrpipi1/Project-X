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


function get_specific_stock_content_data($table_name, $table_name2, $where, $where2, $equals){
    global $link;
    $sql = "SELECT * FROM " .$table_name. " WHERE ". $where . " = " . $equals;

    $sql2 = "SELECT * FROM " .$table_name2. " WHERE ". $where2 . " = " . $equals;

    $res = mysqli_query($link, $sql);

    $res2 = mysqli_query($link, $sql2);

    $return = array($res, $res2);
    return $return;
}

$employees = get_content_data('employees');
$courses = get_content_data('courses');
$about_us = get_specific_content_data('contents', 'id', 3);
$impressum = get_specific_content_data('contents', 'id', 15);
$agb = get_specific_content_data('contents', 'id', 16);
$products = get_content_data('products');

if(isset($_GET['page']) && $_GET['page'] == 'Detailansicht' && isset($_GET['product_id'])){
    $data = get_specific_stock_content_data('products', 'stock', 'id', 'product_id', $_GET['product_id']);

    $detail_product = $data[0];

    $stock_color = $data[1];


}


?>
