<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 09:51
 */

function sql_query($table_name, $current_page, $entries_per_page, $order_by, $order_dir){


    global $link;
    //echo $link;
    $limit_start = $current_page * $entries_per_page - $entries_per_page;
    $sql = "SELECT * FROM " .$table_name ." WHERE deleted_at IS NULL ORDER BY " .$order_by ." " .$order_dir ." LIMIT " .$limit_start .", " .$entries_per_page;
    $result = mysqli_query($link, $sql);
    return $result;
   /* pr($result);
    //$content_array = mysqli_fetch_all($result, MYSQLI_ASSOC);
    for ($content_array = array(); $tmp = $result->fetch_array(MYSQLI_ASSOC);) $content_array[] = $tmp;
    return $content_array;*/
}

function create_table($query, $current_page, $total_pages, $pagination){
    $table_name = $_GET['page'];

    $ths = "";
    $tds = "";
    if(!isset($_GET['page']) || $_GET['page'] == 'dashboard') {
        $ths .= "<table class=\"table_backend table_dashboard\">";
    }else{
        $ths .= "<table class=\"table_backend\">";
    }
    //$ths .= "<table class=\"table_backend\">";
    $ths .= "<thead>";
    $ths .= "<tr>";
    if(isset($_GET['page']) && $_GET['page'] != 'dashboard') {
        $tds .= " <th>Actions</th>\n\r";

    }
    $tds .= " </tr>\n\r";
    $tds .= " </thead>\n\r";
    $tds .= " <tbody>\n\r";
    $cnt = 0;
    if(mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $tds .= "<tr>";

            foreach ($row as $col => $wert) {
                //<th> elemente zusammenbauen, nur während 1. schleifendurchlauf
                if ($cnt == 0 && $col != 'deleted_at' && $col != 'id' && $col != 'is_active' && $col != 'created_at' && $col != 'password_hash' && $col != 'zip_code' && $col != 'pic' && strrpos($col, "pref") === false && strrpos($col, "thumb") === false && (!isset($_GET['page']) || $_GET['page'] == 'dashboard' )) {

                    $ths .= "<th>" . sort_table($table_name, $col, underscore_to_space($col)) . "</th>";
                }
                if ($cnt == 0 && $col != 'deleted_at' && $col != 'id' && $_GET['page'] != 'dashboard' ) {
                    $ths .= "<th>" . sort_table($table_name, $col, underscore_to_space($col)) . "</th>";
                }
                if(($col != 'id' && $col != 'deleted_at' && $_GET['page'] != 'dashboard') || ($col != 'deleted_at' && $col != 'id' && $col != 'is_active' && $col != 'created_at' && $col != 'password_hash' && $col != 'zip_code' && $col != 'pic' && strrpos($col, "pref") === false && strrpos($col, "thumb") === false && (!isset($_GET['page']) || $_GET['page'] == 'dashboard' )) ) {
                    // <td> elemente zusammenbauen
                    if (substr($col, 0, 3) == 'is_' || substr($col, 0, 3) == 'in_') {
                        $tds .= "<td>" . bool_to_word($wert) . "</td>";
                    } elseif (substr($col, -3, 3) == '_at' && $col != 'deleted_at') {
                        $tds .= "<td>" . date_to_better_date(substr($wert, 0, -8)) . "</td>";
                        /*} elseif (substr($col, -3, 3) == '_id') {
                            $sql1 = "SELECT " . '_name' . " FROM " . substr($col, 0, -3) . " WHERE id = " . $wert;
                            $result1 = mysqli_query($link, $sql1);
                            $col_name = mysqli_fetch_row($result1);
                            $tds .= "<td>" . $col_name['_name'] . "</td>";*/

                    } elseif (strlen($wert) > 30) {
                        $tds .= "<td>" . truncate($wert) . "</td>";
                    } elseif ($col == 'birthday') {
                        $tds .= "<td>" . date_to_better_date($wert) . "</td>";
                    } else {
                        $tds .= "<td>" . $wert . "</td>";
                    }
                }

            }
            $cnt++;
            if ($table_name == 'users') {
                $tds .= "<td>";
                $tds .= "<a class=\"btn_backend\" href=\"index.php?page=" . $_GET['page'] . "&amp;action=show_orders&amp;id=" . $row['id'] . "\">show orders</a>";
                $tds .= "</td>";
            }
            if(isset($_GET['page']) && $_GET['page'] != 'dashboard') {
                $tds .= "<td>";
                $tds .= "<a class=\"edit small_edit\" href=\"index.php?page=" . $_GET['page'] . "&amp;action=edit&amp;id=" . $row['id'] . "\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>";
                $tds .= "<a class=\"delete small_delete\" href=\"index.php?page=" . $_GET['page'] . "&amp;action=delete&amp;id=" . $row['id'] . "\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>";
                $tds .= "</td>";
                $tds .= "</tr>";
            }

            $return = ['ths' => $ths, 'tds' => $tds];

        }


        // $table = create_table($query);
        echo $return['ths'];
        if ($_GET['page'] == 'users') {
            echo " <th>Orders</th>";
        }
        echo $return['tds'];
        echo "</tbody>\n\r</table>";

        if($pagination === true){
            pagination_backend($_GET['page'], $current_page, $total_pages);
        }



// table mit orders zu user anzeigen
        /*if (isset($_GET['action']) && $_GET['action'] == 'show_orders') {
            $orders = 'orders';
            $users_id = 'users_id';
            $sql = "SELECT * FROM " . $orders . " WHERE  " . $users_id . " = " . $_GET['id'];
            $result = mysqli_query($link, $sql);
            $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $table_orders = create_table($orders);

            echo $table_orders['ths'];
            echo $table_orders['tds'];
            echo "</tbody>\n\r</table>";
        }*/
    }else{
        echo "<h4 class='zero-entries'>Derzeit keine Einträge vorhanden!</h4>";
    }
   /* echo $content_array;
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
    }*/
}

function total_contents($table_name) {
    global $link;
    if(isset($_GET['page']) && $_GET['page'] != 'dashboard') {
        $sql = "SELECT COUNT(*) as total_count FROM " . $table_name . " WHERE deleted_at IS NULL";
        $result = mysqli_query($link, $sql);

        return mysqli_fetch_assoc($result)["total_count"];
    }
}

function delete_contents($table_name, $id) {
    global $link;
    $sql = "SELECT * FROM " .$table_name ." WHERE id = " .$id;
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row['deleted_at'] === NULL) {
        $timestamp = time();
        $sql = "UPDATE " . $table_name . " SET is_active = 0, deleted_at = " . $timestamp . " WHERE id = " . $id;
        $result = mysqli_query($link, $sql);
        if (!$result) {
            echo '<script type="text/javascript">'
            , 'notification("error", "Konnte nicht gelöscht werden!");'
            , '</script>';
        } else {
            echo '<script type="text/javascript">'
            , 'notification("success", "Wurde erfolgreich gelöscht");'
            , '</script>';
        }
        return $result;
    }else{
        echo '<script type="text/javascript">'
        , 'notification("error", "Eintrag wurde bereits gelöscht!");'
        , '</script>';
    }
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
            // passwort soll nur gespeichert werden, wenn es ausgefüllt ist => man muss es nicht anzeigen und kann aber ein neues erstellen
            if(stristr($col, 'passwor') !== false && $wert == ""){
                $insert_string .= "";
            }elseif(stristr($col, 'passwor') !== false && $wert !== ""){
                $insert_string .= password_hash($wert, PASSWORD_DEFAULT);
            }else{
                $insert_string .= $col ." = " . "'" .mysqli_real_escape_string($link, $wert) ."'";
                if( $i != count($content_array) -1 ){
                    $insert_string .= ", ";
                }
            }
        }
    }

    // sql update zusammenbauen:
    $sql = "UPDATE " .$tablename ." SET " .$insert_string ."  WHERE id = '$id'";
    $result = mysqli_query($link, $sql);
    if(!$result) {
        echo '<script type="text/javascript">'
                , 'notification("error", "Konnte nicht aktualisiert werden!");'
                , '</script>';
    }else{
        echo '<script type="text/javascript">'
                , 'notification("success", "Wurde erfolgreich aktualisiert");'
                , '</script>';
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
        echo '<script type="text/javascript">'
        , 'notification("error", "Konnte nicht erstellt werden!");'
        , '</script>';
    }else{
        echo '<script type="text/javascript">'
        , 'notification("success", "Wurde erfolgreich erstellt");'
        , '</script>';
    }
    return $result;
}



function pagination_backend($site, $current_page, $total_pages) {
    $start = max($current_page-2, 1);
    $end = min($current_page+2, $total_pages);

    if($total_pages > 0) {
        if($current_page != 1) {
            $before = $current_page-1;
            //echo '<i class="fa fa-chevron-left pagination" aria-hidden="true"></i>';
            include("views/pagination/pagination_first_link.php");
        }

        for ($i=$start; $i <= $end; $i++) {
            include("views/pagination/pagination_link.php");
        }


        if($current_page != $total_pages) {
            $next = $current_page+1;
            //echo '<i class="fa fa-chevron-right pagination" aria-hidden="true"></i>';
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








