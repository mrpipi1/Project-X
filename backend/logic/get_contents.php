<?php
$page = $_POST['page'];
if($page != 'statistik'){
include("../../db-connect.php");
include("../../functions/table_functions.php");
include('../../functions/helpers.php');

$entries_per_page = 10;
$current_page = $_POST['site'];
$order_by = $_POST['order_by'];
$order_dir = $_POST['order_dir'];
$total_contents = total_contents($page);


$total_pages = ceil($total_contents / $entries_per_page);


include('../views/backend_crumbs.php');


    $page_name = ucfirst($page);

$new_item = substr($page_name, 0, -1);
$new_item .=" <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";

?>
</a>
</h3>

<?php
if($page != 'dashboard') {
    echo "<a class=\"btn_table\" onclick='load_forms(\"".$page."\", \"new\")'>".$new_item."</a>";
    // select here


}

?>
    <section class="wrapper-form-backend">
    </section>



<?php




include('../views/table.php'); ?>

</section>
<?php
}else{
    $views = $page .".php";

    include('../views/'.$views);
}
