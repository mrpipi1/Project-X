<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 09:51
 */

function sql_query($table_name, $current_page, $entries_per_page, $order_by, $order_dir){
    global $link;
    $limit_start = $current_page * $entries_per_page - $entries_per_page;
    $sql = "SELECT * FROM " .$table_name ." WHERE deleted_at IS NULL ORDER BY " .$order_by ." " .$order_dir ." LIMIT " .$limit_start .", " .$entries_per_page;
    $result = mysqli_query($link, $sql);
    $content_array = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $content_array;
}

function create_table($content_array){
    global $link;
    $table_name = $_GET['page'];
    $ths = "";
    $tds = "";

    $ths .= "<table class=\"table_backend\">";
    $ths .= "<thead>";
    $ths .= "<tr>";

    $tds .= " <th>Actions</th>\n\r";
    $tds .= " </tr>\n\r";
    $tds .= " </thead>\n\r";
    $tds .= " <tbody>\n\r";

    for($i = 0; $i < count($content_array); $i++){
        $tds .= "<tr>";

        foreach($content_array[$i] as $col => $wert){
            //<th> elemente zusammenbauen, nur während 1. schleifendurchlauf
            if($i == 0 && $col != 'deleted_at'){
                $ths .= "<th>" .sort_table($table_name, $col, underscore_to_space($col)) ."</th>";
            }
            // <td> elemente zusammenbauen
            if(substr($col, 0, 3) == 'is_' || substr($col, 0, 3) == 'in_'){
                $tds .= "<td>" .bool_to_word($wert) ."</td>";
            }elseif(substr($col, -3, 3) == '_at' && $col != 'deleted_at'){
                $tds .= "<td>" .date_to_better_date(substr($wert, 0, -8)) ."</td>";
            }elseif(substr($col, -3, 3) == '_id'){
                $sql1 = "SELECT " .'_name' ." FROM " .substr($col, 0, -3) ." WHERE id = " .$wert;
                $result1 = mysqli_query($link, $sql1);
                $col_name = mysqli_fetch_all($result1, MYSQLI_ASSOC);
                $tds .= "<td>" .$col_name[0]['_name'] ."</td>";
            }elseif(strlen($wert) > 30) {
                $tds .= "<td>" .truncate($wert) ."</td>";
            }elseif($col == 'birthday') {
                $tds .= "<td>" .date_to_better_date($wert)."</td>";
            }elseif($col == 'deleted_at') {
                $tds .= " ";
            }else {
                $tds .= "<td>" .$wert ."</td>";
            }

        }
        if($table_name == 'users'){
            $tds .= "<td>";
            $tds .= "<a class=\"btn_backend\" href=\"index.php?page=" .$_GET['page'] ."&amp;action=show_orders&amp;id=" .$content_array[$i]['id'] ."\">show orders</a>";
            $tds .= "</td>";
        }
        $tds .= "<td>";
        $tds .= "<a class=\"edit small_edit\" href=\"index.php?page=" .$_GET['page'] ."&amp;action=edit&amp;id=" .$content_array[$i]['id'] ."\">edit</a>";
        $tds .= "<a class=\"delete small_delete\" href=\"index.php?page=" .$_GET['page'] ."&amp;action=delete&amp;id=" .$content_array[$i]['id'] ."\">delete</a>";
        $tds .= "</td>";
        $tds .= "</tr>";

        $return = ['ths' => $ths, 'tds' => $tds];
        if($i == count($content_array) -1){
            return $return;
        }
    }
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

// zum editieren von db einträgen:
function update_contents($tablename, $id, $content_array) {
    global $link;
    $insert_string = "";
    // vom $_POST column name + wert auslesen und in string speichern, erstellen kommt vom button => wird nicht verwendet & für boolische werte ein if (on = 1, off = 0)
    $i = 0;
    foreach($content_array as $col => $wert){
        $i++;
        if($wert != "erstellen" && $wert != "updaten"){
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

    // sql update zusammenbauen:
    $sql = "UPDATE " .$tablename ." SET " .$insert_string ."  WHERE id = '$id'";
    $result = mysqli_query($link, $sql);
    if(!$result) {
        echo "konnte nicht erstellt werden!";
    }else{
        echo "erstellen war erfolgreich!";
    }
    return $result;
}

// zum erstellen von neuen db einträgen:
function insert_contents($tablename, $content_array) {
    global $link;
    $insert_col = "";
    $insert_wert = "";
    // vom $_POST column name + wert auslesen und in strings speichern, erstellen kommt vom button => wird nicht verwendet & für boolische werte ein if (on = 1, off = 0)
    $i = 0;
    foreach($content_array as $col => $wert){
        $i++;
        if($wert != "erstellen" && $wert != "updaten"){
            if($wert == "on"){
                $wert = 1;
            }elseif($wert == "off"){
                $wert = 0;
            }
            if($col == "created_at"){
                $wert = time();
            }
            $insert_col .= $col;
            $insert_wert .= "'" .$wert ."'";
            if( $i != count($content_array) -1 ){
                $insert_col .= " , ";
                $insert_wert .= ", ";
            }
        }
    }

    // sql insert zusammenbauen:
    $sql = "INSERT INTO " .$tablename ." (" .$insert_col ." )" ." VALUES (" .$insert_wert ." )";
    $result = mysqli_query($link, $sql);
    if(!$result) {
        echo "konnte nicht erstellt werden!";
    }else{
        echo "erstellen war erfolgreich!";
    }
    return $result;
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








