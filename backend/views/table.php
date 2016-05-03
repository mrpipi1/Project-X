<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/04/16
 * Time: 15:31
 */

?>

    <table class="table_backend">
        <thead>
        <tr>
            <?php
            $table = create_table(sql_query($_GET['page'], $current_page, $entries_per_page, $order_by, $order_dir));
            echo $table['ths'];
            if($_GET['page'] == 'users'){
                echo " <th>Orders</th>";
            }
            ?>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>

        <?php echo $table['tds']; ?>


        </tbody>

    </table>
    <?php  pagination_backend($_GET['page'], $current_page, $total_pages); ?>


