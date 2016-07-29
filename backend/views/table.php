<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/04/16
 * Time: 15:31
 */
        if($page == 'dashboard'){
            $dashboard_tables = array('users', 'orders', 'products', 'content', 'employees');
            for($i = 0; $i<count($dashboard_tables); $i++){
                $query = sql_query($dashboard_tables[$i], $current_page, 5, $order_by, $order_dir);
                if($query && mysqli_num_rows($query) > 0){
                    create_table($query, $current_page, $total_pages, false, $dashboard_tables[$i]);
                }

            }

        }else{
            $query = sql_query($page, $current_page, $entries_per_page, $order_by, $order_dir);
            create_table($query, $current_page, $total_pages,true, NULL);
        }

    ?>





