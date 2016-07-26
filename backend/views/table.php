<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/04/16
 * Time: 15:31
 */


        $query = sql_query($_GET['page'], $current_page, $entries_per_page, $order_by, $order_dir);
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
        $cnt = 0;
        if(mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $tds .= "<tr>";

                foreach ($row as $col => $wert) {
                    //<th> elemente zusammenbauen, nur während 1. schleifendurchlauf
                    if ($cnt == 0 && $col != 'deleted_at' && $col != 'id') {
                        $ths .= "<th>" . sort_table($table_name, $col, underscore_to_space($col)) . "</th>";
                    }
                    if($col != 'id') {
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
                        } elseif ($col == 'deleted_at') {
                            $tds .= " ";
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
                $tds .= "<td>";
                $tds .= "<a class=\"edit small_edit\" href=\"index.php?page=" . $_GET['page'] . "&amp;action=edit&amp;id=" . $row['id'] . "\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>";
                $tds .= "<a class=\"delete small_delete\" href=\"index.php?page=" . $_GET['page'] . "&amp;action=delete&amp;id=" . $row['id'] . "\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>";
                $tds .= "</td>";
                $tds .= "</tr>";

                $return = ['ths' => $ths, 'tds' => $tds];

            }


            // $table = create_table($query);
            echo $return['ths'];
            if ($_GET['page'] == 'users') {
                echo " <th>Orders</th>";
            }
            echo $return['tds'];
            echo "</tbody>\n\r</table>";

            pagination_backend($_GET['page'], $current_page, $total_pages);

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

    ?>





