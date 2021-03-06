<?php


function bool_to_word($bool){
    if($bool == 1){
        $word = 'Ja';
    }else{
        $word = 'Nein';
    }
    return $word;
}

function get_name_by_id($id, $table_name, $col_name){
    global $link;
    $sql = "SELECT * FROM " .$table_name ." WHERE id = " .$id;
    $result = mysqli_query($link, $sql);

    $result_name = mysqli_fetch_assoc($result);
    return $result_name[$col_name];
}

function truncate($text, $chars = 20) {
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    $text = $text."...";
    return $text;
}

// names of table cols without _
function underscore_to_space($input_name){
    $parts = explode("_", $input_name);
    if(count($parts) >= 2 && $parts[0] != "") {
        $input_name_space = str_replace('_', ' ', $input_name);
    }else if (count($parts) == 2 && $parts[0] == ""){
        $input_name_space = substr($input_name,1);
    }else{
        $input_name_space = $input_name;
    }
    return $input_name_space;
}


// weil weder date() noch date_format() geht wenn das kein timestamp ist sondern ein date und ich will aba dass es ein date is.
function date_to_better_date($date){

    $date_arr = explode("-", $date );
    $new_date = implode(array_reverse($date_arr), ".");
    return $new_date;
}

function redirect_to($location, $message = "") {
    $_SESSION["flash"] = $message;
    header("location: $location");
    exit();
}

function is_post_request($type) {
    return (strtolower($_SERVER["REQUEST_METHOD"]) == "post" && !empty($_POST) && isset($_POST[$type]));
}
