<?php
include("../../db-connect.php");
$tablename = $_POST['statistik_table'];
$column = $_POST['statistik_col'];
$value = $_POST['satistik_value'];
$tablename2 = $_POST['statistik_table2'];
$column2 = $_POST['statistik_col2'];
$value2 = $_POST['satistik_value2'];
//function get_count($table_name, $where, $equals){
  global $link;
  $sql = "SELECT * FROM ".$tablename." WHERE ".$column. " = '" .$value."'";
  $res = mysqli_query($link, $sql);
  $result[] = mysqli_num_rows($res);
  $sql2 = "SELECT * FROM ".$tablename2." WHERE ".$column2. " = '" .$value2."'";
  $res2 = mysqli_query($link, $sql2);
  $result[] = mysqli_num_rows($res2);
// }
  echo json_encode($result);
