<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 02/05/16
 * Time: 13:39
 */


function get_count_data($table_name, $col_name, $first_case, $second_case){
    global $link;

    $count_first = 0;
    $count_second = 0;
    $sql = "SELECT " .$col_name ." FROM " .$table_name;
    $result = mysqli_query($link, $sql);
    $all_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach($all_data as $data){
        switch($data[$col_name]){
            case $first_case:
                $count_first += 1;
                break;
            case $second_case:
                $count_second += 1;
                break;
        };
    }
$return = ['first' => $count_first, 'second' => $count_second];
return $return;
}
