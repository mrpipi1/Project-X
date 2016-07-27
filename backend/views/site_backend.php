<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 03/05/16
 * Time: 15:11
 */
include('backend_crumbs.php');





if(isset($_GET['page'])) {
    $page_name = ucfirst($_GET['page']);
}else{
    $page_name = ucfirst('dashboard');
}
                    $new_item = substr($page_name, 0, -1);
                    $new_item .=" <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";

?>
</a>
</h3>

<?php
if(isset($_GET['page']) && $_GET['page'] != 'dashboard') {
echo "<a class=\"btn_table\" href=\"index.php?page=".$_GET['page']."&amp;action=new\">".$new_item."</a>";
}
?>

    <?php include('table.php'); ?>

</section>
