<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 02/05/16
 * Time: 13:39
 */


function get_gender(){
    global $link;
    $table_name = 'users';
    $col_name = 'gender';
    $count_female = 0;
    $count_male = 0;
    $sql = "SELECT " .$col_name ." FROM " .$table_name;
    $result = mysqli_query($link, $sql);
    $genders = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach($genders as $gender){
        switch($gender[$col_name]){
            case 'female':
                $count_female += 1;
                break;
            case 'male':
                $count_male += 1;
                break;
        };
    }
$return = ['female' => $count_female, 'male' => $count_male];
return $return;
}