<?php
function get_count($table_name, $where, $equals){
  global $link;
  $sql = "SELECT COUNT(".$where.") FROM ".$table_name." WHERE ".$where. " = '" .$equals;
  $res = mysqli_query($link, $sql);
  return $res;
}
