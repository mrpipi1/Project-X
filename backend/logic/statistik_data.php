<?php
include("../../db-connect.php");
$tablename = $_POST['statistik_table'];
$column = $_POST['statistik_col'];
$value = $_POST['satistik_value'];
//function get_count($table_name, $where, $equals){
  global $link;
  $sql = "SELECT * FROM ".$tablename." WHERE ".$column. " = '" .$value."'";
  $res = mysqli_query($link, $sql);
  echo mysqli_num_rows($res);

// }
//echo get_count($tablename, $column, $value);
