<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/04/16
 * Time: 15:31
 */

?>

<section class="content-wrapper_backend">

    <h3 class="main-hl_backend">
        <a href="index.php?page=<?php echo $_GET['page'] ?>">
             <?php
             $new_item ="new ";

                    $page_name = ucfirst($_GET['page']);
                    echo $page_name;
                    $new_item .= substr($page_name, 0, -1);

            ?>
        </a>
    </h3>


    <a class="btn_table" href="index.php?page=<?php echo $_GET['page'] ?>&amp;action=new"><?php echo $new_item ?></a>


    <table class="table_backend">
        <thead>
        <tr>
            <?php
            $table = create_table($_GET['page']);
            echo $table['ths'];
            ?>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>

        <?php echo $table['tds']; ?>


        </tbody>

    </table>
    <?php  pagination_backend($_GET['page'], $current_page, $total_pages); ?>
</section>

