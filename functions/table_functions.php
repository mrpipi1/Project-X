<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 09:51
 */

// allg. table functions

function table_logic($table_name, $current_page, $entries_per_page, $order_by, $order_dir){

    $contents = get_contents($table_name, $current_page, $entries_per_page, $order_by, $order_dir);
    $total_contents = total_contents($table_name);
    $total_pages = floor($total_contents / $entries_per_page);

    $return = ['contents' => $contents, 'total_contents' => $total_contents, 'total_pages' => $total_pages];

    if(isset($_GET['action'])){
        if($_GET['action'] == 'delete' ){
            $id = (int)$_GET["id"];
            $deleted = delete_contents($table_name, $id);
            $return['deleted'] =  $deleted;
        }elseif($_GET['action'] == 'edit'){
            include('views/form_backend.php');
        }elseif($_GET['action'] == 'update'){
            $id = $_GET['id'];
            $array = $_POST;
            $tablename = $_GET['page'];
            $updated = update_contents($tablename, $id, $array);
            $return['updated'] =  $updated;
        }
    }
    return $return;
}

function get_contents($table_name, $current_page, $entries_per_page, $order_by, $order_dir) {
    global $link;       //  order by " " ??

    $table_name = mysqli_real_escape_string($link, $table_name );
    $limit_start = $current_page * $entries_per_page - $entries_per_page;
    $sql = "SELECT * FROM " .$table_name ." WHERE deleted_at IS NULL ORDER BY " .$order_by ." " .$order_dir ." LIMIT " .$limit_start .", " .$entries_per_page;
    $result = mysqli_query($link, $sql);

    if(!$result) {
        echo mysqli_error($link);
    }
    $contents = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $contents;
}

function total_contents($table_name) {
    global $link;

    $sql = "SELECT COUNT(*) as total_count FROM " .$table_name ." WHERE deleted_at IS NULL";
    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($result)["total_count"];
}

function delete_contents($table_name, $id) {
    global $link;
    $timestamp = time();
    $sql = "UPDATE " .$table_name ." SET is_active = 0, deleted_at = " .$timestamp ." WHERE id = " .$id;
    $result = mysqli_query($link, $sql);

    return $result;
}


function update_contents($tablename, $id, $content_array) {
    global $link;
    $insert_string = "";

    $i = 0;
    foreach($content_array as $col => $wert){
        $i++;
        if($wert != "erstellen"){
            if($wert == "on"){
                $wert = 1;
            }elseif($wert == "off"){
                $wert = 0;
            }
            $insert_string .= $col ." = " . "'" .$wert ."'";
            if( $i != count($content_array) -1 ){
                $insert_string .= ", ";
            }
        }
    }
    echo $insert_string;

    // sql update
    $sql = "UPDATE " .$tablename ." SET " .$insert_string ."  WHERE id = '$id'";

    $result = mysqli_query($link, $sql);

    if(!$result) {
        echo "konnte nicht erstellt werden!";
    }else{
        echo "erstellen war erfolgreich!";
    }
    return $result;
}





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


function pagination_backend($site, $current_page, $total_pages) {
    $start = max($current_page-2, 1);
    $end = min($current_page+2, $total_pages);

    if($total_pages > 0) {
        if($current_page != 1) {
            include("views/pagination/pagination_first_link.php");
        }

        for ($i=$start; $i <= $end; $i++) {
            include("views/pagination/pagination_link.php");
        }


        if($current_page != $total_pages) {
            include("views/pagination/pagination_last_link.php");
        }
    }

}

function sort_table($site, $column, $anchor) {
    $order_dir = isset($_GET["order_dir"]) && $_GET["order_dir"] == "desc" ? "asc" : "desc";
    $output = <<<HEREDOC
<a href="?page=$site&order_by=$column&order_dir=$order_dir">$anchor</a>
HEREDOC;

    return $output;
}













