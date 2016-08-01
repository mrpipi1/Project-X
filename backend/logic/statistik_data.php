<?php
global $link;
include("../../db-connect.php");
$tablename = $_POST['statistik_table'];
$column = $_POST['statistik_col'];
$values = $_POST['satistik_values'];
if($column == 'birthday'){
  $sql = "SELECT birthday FROM users";
  $res = mysqli_query($link, $sql);
  // echo json_encode($res);
  $birth_year = '';
  $unter18 = 0;
  $neunzehn_30 = 0;
  $einunddreißig = 0;
  $einundvierzig = 0;
  $older_than = 0;
  while($row = mysqli_fetch_assoc($res)){
    echo $row['birthday'];
    if(substr($row['birthday'], 0, 3) != 0000){
      $birth_year = substr($row['birthday'], 0, 3);
      switch ($birth_year){
        case ($birth_year <= 1998):
          $unter18++;
          break;
        case ($birth_year >1998 && $birth_year <= 1986):
          $neunzehn_30++;
          break;
        case ($birth_year > 1986 && $birth_year <= 1976):
          $einunddreißig++;
          break;
        case ($birth_year > 1976 && $birth_year <= 1956):
          $einundvierzig++;
          break;
          case ($birth_year > 1956):
            $older_than++;
            break;
      }
  }
}
  $result = array();
  //$result = array_push($result, $unter18,$neunzehn_30,$einunddreißig,$einundvierzig,$older_than);
  $result = array_push($result, 1,2,9,4,8);
  echo json_encode($result);
}else{
  for($i = 0; $i < count($values); $i++){
    $sql = "SELECT * FROM ".$tablename." WHERE ".$column. " = '" .$values[$i]."'";
    $res = mysqli_query($link, $sql);
    $result[] = mysqli_num_rows($res);
  }
  echo json_encode($result);

}
