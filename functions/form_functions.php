<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 17:22
 */



function addInput($table_name, $attribute = []){
    global $link;
    $output = "";
    $sql = "SHOW COLUMNS FROM " .$table_name;
    $result = mysqli_query($link, $sql);
    $column_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $ende = "</div> \n \r";

    foreach($column_data as $col_num => $col_data) {

        $input_name = $col_data['Field'];
        $label = ucfirst($input_name);
        $d_type = $col_data['Type'];
        $type = "";

        if($col_num != 0 && $input_name != 'deleted_at') {

            $output .= "<label for=\"f-$input_name\" class=\"label_backend\">$label</label>\n\r";

            if (strpos($d_type, 'varchar') >= 0) {
                $type = "text";
            } elseif ($d_type == "tinyint(1)") {
                $type = "radio";
            } elseif ($d_type == "date") {
                $type = "date";
            } elseif (strpos($input_name, "pic")) {
                $type = "file";
            }

            // if ($type == "button") {      // brauchen wir den button? ich glaub nicht?
            //   $output .= "<div class=\"btn_backend\">";
            //  }

            if ($type == "radio") {
                $output .= "<p class=\"radiobutton_wrapper_backend\">";
                $ende = "</p> \n \r";
            } else {
                $output .= "<div class=\"form-group_backend\">";
            }

            if ($input_name == "beschreibung") {
                $output .= "<textarea type=\" text\" name=\"$input_name\" placeholder=\"$input_name\" ></textarea>";
            }else {
                $output .= "<input type=\"$type\" name=\"$input_name\" id=\"f-$input_name\"";


                foreach ($attribute as $key => $val) {
                    $output .= " $key=\"$val\"";
                }
                $output .= "> \n \r";
            }

            $output .= "<span class='highlight_backend'></span> \n \r<span class='form-bar_backend'></span> \n \r";
            $output .= $ende;
        }
    }
    return $output;
}
