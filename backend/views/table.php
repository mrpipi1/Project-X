<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/04/16
 * Time: 15:31
 */


        $table = create_table(sql_query($_GET['page'], $current_page, $entries_per_page, $order_by, $order_dir));
        echo $table['ths'];
        if($_GET['page'] == 'users'){
            echo " <th>Orders</th>";
        }
        echo $table['tds'];
        echo "</tbody>\n\r</table>";

     pagination_backend($_GET['page'], $current_page, $total_pages);

// table mit orders zu user anzeigen
    if(isset($_GET['action']) && $_GET['action'] == 'show_orders'){
        $orders = 'orders';
        $users_id = 'users_id';
        $sql = "SELECT * FROM " .$orders ." WHERE  " .$users_id ." = " .$_GET['id'];
        $result = mysqli_query($link, $sql);
        $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $table_orders = create_table($orders);

        echo $table_orders['ths'];
        echo $table_orders['tds'];
        echo "</tbody>\n\r</table>";
    }

    ?>





