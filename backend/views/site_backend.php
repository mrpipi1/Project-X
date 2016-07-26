<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 03/05/16
 * Time: 15:11
 */
include('backend_crumbs.php');






                    $page_name = ucfirst($_GET['page']);
                    $new_item = substr($page_name, 0, -1);
                    $new_item .=" <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";

?>
</a>
</h3>


<a class="btn_table" href="index.php?page=<?php echo $_GET['page'] ?>&amp;action=new"><?php echo $new_item ?></a>

    <?php include('table.php'); ?>

</section>
