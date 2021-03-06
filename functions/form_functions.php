<?php

// holt alle column names und die data types dazu
function get_col_data($table_name){
    global $link;
    $sql = "SHOW COLUMNS FROM " .$table_name;
    $result = mysqli_query($link, $sql);
    //$column_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

// erstellt das form fürs backend, $column_data kommt von get_col_data(), $action damit man unterscheiden kann ob man was
// bearbeitet oder neu erstellt, $attribute = [] ist optional, falls man bei einem input andere parameter zusätzlich braucht
// $id wenn action = edit damit man den richtigen datensatz bearbeiten kann
function addInput($column_data, $action, $id, $attribute = [] ){
    global $link;
    global $page;
    $output = "";              // hier wird dann alles rein gespeichert das dann ausgegeben werden soll, \n und |r sollten überall sein wo norm. eine neue zeile ist.
    $ende = "</div> \n \r";    // default wenns keine checkbox ist, siehe  comment in "if ($type == "checkbox") {"
    $cnt = 0;
    // durchläuft die $column_data und speichert alles in variablen:
    while( $row = mysqli_fetch_assoc($column_data) ) {
    //foreach($column_data as $col_num => $col_data) {

        $input_name = $row['Field'];   // ['Field'] und ['Type'] sind wegen dem query in get_col_data().
        $d_type = $row['Type'];
        $type = "";
        $attr = "";
        $value = NULL;
        $is_selected = "";
        $is_other_table = substr($input_name, -3, 3); // = _id
        $second_table_name = substr($input_name, 0, -3);    //$is_other_table, $second_table_name, $col_name werden erst später gebraucht, wenn ich ein select erstelln will zb bei den mitarbeitern welcher kurs unterrichtet wird.
        $col_name = "_name";
        $table_name = $page;
        $input_name_space = underscore_to_space($input_name);
        $label = ucfirst($input_name_space);


        // holt die sachen aus der db damit man sie als value in die inputs geben kann wenn die action edit ist:
        if($action == 'edit'){
            $sql = "SELECT * FROM " .$table_name ." WHERE id = '$id' ";
            $result = mysqli_query($link, $sql);
            $value = mysqli_fetch_assoc($result);
        }

        // ich will die id und die deleted_ at spalten nicht anzeigen, weil man die so nicht bearbeiten können soll.
        if($cnt != 0 && $input_name != 'deleted_at') {
            // if für jeden datentyp, damit immer das richtige input kommt  (tinyint = bool, wird in der db auf tinyint geändert)
            if ($d_type == "tinyint(1)") {
                $type = "checkbox";
                if($input_name == "is_active" && $value = NULL || $value["is_active"] == 1){
                    $attr = "checked ";      // damit is_active immer vorausgewählt is und man nicht was erstellt und es inaktiv is.
                }
            }elseif ($d_type == "date") {
                $type = "date";
            }elseif ( $input_name == "pic" || substr($input_name, 0, 9) == "thumb" ) { // das is iwie mit strpos() nicht gegangen also hab ich das so hingebogen :)
                $type = "file";
            }elseif(stristr($input_name, 'mail') !== false){
                $type = 'email';
            }elseif(stristr($input_name, 'passwor') !== false){
                $type = 'password';
                ;
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

            $output .= "<label for=\"f-$input_name\" class=\"label_backend\">$label </label>\n\r";

            // die beschreibungen brauchen eine textarea.
            if ($input_name == "beschreibung" || $input_name == "text") {
                $output .= "<textarea type=\" text\" name=\"$input_name\" id=\"f-$input_name_space\">$value[$input_name]</textarea>";
            }elseif ($input_name == "gender") {
                $output .= "<input type=\"radio\" name=\"$input_name\"  value=\"male\"  id=\"male\"/><label for=\"male\">male</label>";
                $output .= "<input type=\"radio\" name=\"$input_name\"  value=\"female\"  id=\"female\"/><label for=\"female\">female</label>";
            }elseif ($is_other_table == "_id") {        // das ist wenn man etwas von einer anderen tabelle "auswählen" kann (zb mitarbeiter kursname).
                if($action == 'edit'){
                    $is_selected = "selected";
                }

                $output .= "<select " .$is_selected  .">";

                // ich hol nur die spalte die mich interessiert und befülle die options
                $sql1 = "SELECT " .$col_name ." FROM " .$second_table_name;
                $result1 = mysqli_query($link, $sql1);
                //$options = mysqli_fetch_all($result1, MYSQLI_ASSOC);
                while( $row = mysqli_fetch_assoc($result1) ) {
                        $output .=  "<option>" .$row[$col_name] ."</option>";  // $option['title'] weil es ein mehrdimensionales array ist.
                }
                $output .= "</select>";
            }else {     // "norm" input, $type wurde mit "if für jeden datentyp" mit dem richtigen type befüllt.
                $output .= "<input type=\"$type\" name=\"$input_name\" id=\"f-$input_name_space\" $attr" ;
                if($value != "" && $type != 'password'){
                    $output .= "value=\"$value[$input_name]\" " ;
                }
                // falls man der funktion attribute mitgegeben hat werden sie hier in das input geschrieben.
                foreach ($attribute as $key => $val) {
                    $output .= " $key=\"$val\"";
                }
                $output .= "> \n \r";   // schließt input.
            }
            // closing tag vom wrapper (p oder div):
            $output .= $ende;
        }
        $cnt++;
    }
    return $output;
}
