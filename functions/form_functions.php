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
        $attr = "";

        if($col_num != 0 && $input_name != 'deleted_at') {

            if ($d_type == "tinyint(1)") {
                $type = "checkbox";
                if($input_name == "is_active"){
                    $attr = "checked";
                }
            }elseif ($d_type == "date") {
                $type = "date";
            }elseif (strpos($input_name, "pic")) {
                $type = "file";
            }elseif (strpos($d_type, 'varchar') >= 0) {
                $type = "text";
            }

            if ($type == "checkbox") {
                $output .= "<p class=\"radiobutton_wrapper_backend\">";
                $ende = "</p> \n \r";
            } else {
                $output .= "<div class=\"form-group_backend\">";
            }

            $output .= "<label for=\"f-$input_name\" class=\"label_backend\">$label</label>\n\r";

            if ($input_name == "beschreibung") {
                $output .= "<textarea type=\" text\" name=\"$input_name\" placeholder=\"$input_name\" ></textarea>";
            }else {
                $output .= "<input type=\"$type\" name=\"$input_name\" id=\"f-$input_name\" $attr";

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
