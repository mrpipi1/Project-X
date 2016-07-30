<?php
function get_content_data($table_name){
    global $link;
    $sql = "SELECT * FROM " .$table_name;
	$res = mysqli_query($link, $sql);
	return $res;
}

function get_distinct_content_data($table_name, $value){
    global $link;
    $sql = "SELECT DISTINCT " . $value . " FROM " .$table_name;
    $res = mysqli_query($link, $sql);
    return $res;
}

function get_specific_content_data($table_name, $where, $equals){
    global $link;
    $sql = "SELECT * FROM " .$table_name. " WHERE ". $where . " = " . $equals;
    $res = mysqli_query($link, $sql);
    return $res;
}

function get_ordered_content_data($table_name, $where, $equals, $order_by, $asc_desc){
    global $link;
    $sql = "SELECT * FROM " .$table_name. " WHERE ". $where . " = '" . $equals ."' ORDER BY ".$order_by." ". $asc_desc;
    $res = mysqli_query($link, $sql);
    return $res;
}
function get_count($table_name, $where, $equals){
  global $link;
  $sql = "SELECT COUNT(".$where.") FROM ".$table_name." WHERE ".$where. " = '" .$equals;
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
if(isset($_SESSION["user"])){
  $user_id = $_SESSION["user"]["user_id"];
  $orders = get_specific_content_data('orders', 'user_id', $user_id);
  $user_info = get_specific_content_data('users', 'id', $user_id);
}
$employees = get_content_data('employees');
$courses = get_content_data('courses');
$about_us = get_specific_content_data('contents', 'id', 3);
$impressum = get_specific_content_data('contents', 'id', 15);
$agb = get_specific_content_data('contents', 'id', 16);
$products = get_content_data('products');
$sale_products = get_specific_content_data('products', 'in_aktion', 1);
$shop = get_content_data('products');
$categories = get_content_data('shop_categories');
$color = get_distinct_content_data('stock', 'product_id, color');
$contact = get_ordered_content_data('contents', '_name', 'Kontakt', 'sequence', 'asc');
$map = get_ordered_content_data('contents', '_name', 'Map', 'sequence', 'asc');
$contact_form = get_ordered_content_data('contents', '_name', 'contactform_main', 'sequence', 'asc');
$footer = get_ordered_content_data('contents', '_name', 'footer', 'sequence', 'asc');
$breadcrubms_checkout = get_content_data('breadcrubms_checkout');
$female = get_count('users', 'gender', 'female');
$male = get_count('users', 'gender', 'male');

if(isset($_GET['page']) && $_GET['page'] == 'Detailansicht' && isset($_GET['product_id'])){
    $data = get_specific_stock_content_data('products', 'stock', 'id', 'product_id', $_GET['product_id']);

    $detail_product = $data[0];

    $stock_color = $data[1];


}


?>
