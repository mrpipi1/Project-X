<?php
include("../../db-connect.php");
$tablename = $_POST['statistik_table'];
$column = $_POST['statistik_col'];
$values = $_POST['satistik_values'];
  global $link;
  for($i = 0; $i < count($values); $i++){
    $sql = "SELECT * FROM ".$tablename." WHERE ".$column. " = '" .$values[$i]."'";
    $res = mysqli_query($link, $sql);
    $result[] = mysqli_num_rows($res);
  }

  echo json_encode($result);
