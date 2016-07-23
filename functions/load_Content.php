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

$employees = get_content_data('employees');
$courses = get_content_data('courses');
$about_us = get_specific_content_data('contents', 'id', 3);
$impressum = get_specific_content_data('contents', 'id', 15);
$products = get_content_data('products');


?>
