<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 17:22
 */

// holt alle column names und die data types dazu
function get_col_data($table_name){
    global $link;
    $sql = "SHOW COLUMNS FROM " .$table_name;
    $result = mysqli_query($link, $sql);
    $column_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $column_data;
}

// erstellt das form fürs backend, $column_data kommt von get_col_data(), $action damit man unterscheiden kann ob man was
// bearbeitet oder neu erstellt, $attribute = [] ist optional, falls man bei einem input andere parameter zusätzlich braucht
// $id wenn action = edit damit man den richtigen datensatz bearbeiten kann
function addInput($column_data, $action, $id, $attribute = [] ){
    global $link;
    $output = "";              // hier wird dann alles rein gespeichert das dann ausgegeben werden soll, \n und |r sollten überall sein wo norm. eine neue zeile ist.
    $ende = "</div> \n \r";    // default wenns keine checkbox ist, siehe  comment in "if ($type == "checkbox") {"

    foreach($column_data as $col_num => $col_data) {

        // durchläuft die $column_data und speichert alles in variablen:

        $input_name = $col_data['Field'];   // ['Field'] und ['Type'] sind wegen dem query in get_col_data().
        $label = ucfirst($input_name);
        $d_type = $col_data['Type'];
        $type = "";
        $attr = "";
        $value = "";
        $is_selected = "";
        $is_other_table = substr($input_name, -3, 3);
        $second_table_name = substr($input_name, 0, -3);    //$is_other_table, $second_table_name, $col_name werden erst später gebraucht, wenn ein select erstelln will zb bei den mitarbeitern welcher kurs unterrichtet wird.
        $col_name = substr($second_table_name, 0, 1) ."_name";
        $table_name = $_GET['page'];

        if($action == 'edit'){

            $sql = "SELECT * FROM " .$table_name ." WHERE id = '$id' ";
            $result = mysqli_query($link, $sql);
            $value = mysqli_fetch_assoc($result);
        }

        // ich will die id und die deleted_ at spalten nicht anzeigen, weil man die so nicht bearbeiten können soll.
        if($col_num != 0 && $input_name != 'deleted_at') {
            // if für jeden datentyp, damit immer das richtige input kommt  (tinyint = bool, wird in der db auf tinyint geändert)
            if ($d_type == "tinyint(1)") {
                $type = "checkbox";
                if($input_name == "is_active" && $value = "" || $value["is_active"] == 1){
                    $attr = "checked ";      // damit is_active immer vorausgewählt is und man nicht was erstellt und es inaktiv is.
                }
            }elseif ($d_type == "date") {
                $type = "date";
            }elseif ( $input_name == "pic" || substr($input_name, 0, 9) == "thumbnail" ) { // das is iwie mit strpos() nicht gegangen also hab ich das so hingebogen :)
                $type = "file";
            }else  {
                $type = "text";
            }

            // bei den checkboxen im frontend hab ich aus irg einem grund ps statt divs ich glaub das war wegen irg einem styling also hab ich das da auch gemacht, kann man ws ändern.
            if ($type == "checkbox") {
                $output .= "<p class=\"radiobutton_wrapper_backend\">";
                $ende = "</p> \n \r";   // wegen dem p muss das $ende da so sein, sonst passt das default $ende.
            } else {
                $output .= "<div class=\"form-group_backend\">";
            }

            $output .= "<label for=\"f-$input_name\" class=\"label_backend\">$label</label>\n\r";

            // die beschreibungen brauchen eine textarea.
            if ($input_name == "beschreibung") {
                $output .= "<textarea type=\" text\" name=\"$input_name\" placeholder=\"$input_name\" value=\"$value[$input_name]\" ></textarea>";
            }elseif ($is_other_table == "_id") {        // das ist wenn man etwas von einer anderen tabelle "auswählen" kann (zb mitarbeiter kursname).
                if($action == 'edit'){
                    $is_selected = "selected";
                }

                $output .= "<select " .$is_selected  .">";

                // ich hol nur die spalte die mich interessiert und befülle die options

                $sql1 = "SELECT " .$col_name ." FROM " .$second_table_name;
                $result1 = mysqli_query($link, $sql1);
                $options = mysqli_fetch_all($result1, MYSQLI_ASSOC);
                foreach($options as $option){
                        $output .=  "<option>" .$option[$col_name] ."</option>";  // $option['title'] weil es ein mehrdimensionales array ist.
                }
                $output .= "</select>";
            }else {     // "norm" input, $type wurde mit "if für jeden datentyp" mit dem richtigen type befüllt.
                $output .= "<input type=\"$type\" name=\"$input_name\" id=\"f-$input_name\" $attr" ;
                if($value != ""){
                    $output .= "value=\"$value[$input_name]\" " ;
                }
                // falls man der funktion attribute mitgegeben hat werden sie hier in das input geschrieben.
                foreach ($attribute as $key => $val) {
                    $output .= " $key=\"$val\"";
                }
                $output .= "> \n \r";   // schließt input.
            }
            // zum stylen:
            $output .= "<span class='highlight_backend'></span> \n \r<span class='form-bar_backend'></span> \n \r";
            // closing tag vom wrapper (p oder div):
            $output .= $ende;
        }
    }
    return $output;
}
