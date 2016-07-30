<?php
include("../../db-connect.php");
include("../../functions/helpers.php");
include("../../functions/form_functions.php");
$action = $_POST['action'];
$page = $_POST['page'];
if($action == 'edit'){
    $id = $_POST['id'];
}else{
    $id = NULL;
}

?>
<h2 class="hl_form_backend">
            <?php
            if($action == 'edit'){
                if($page == "staff"){
                    echo "Mitarbeiter aktualiesieren";
                }elseif($page == "orders"){
                    echo "Bestellung aktualiesieren";
                }elseif($page == "shop_categories"){
                    echo "Kategorie aktualiesieren";
                }elseif($page == "shop_item"){
                    echo "Produkt aktualiesieren";
                }elseif($page == "content"){
                    echo ucfirst($_GET['page']) ." aktualiesieren";
                }elseif($page == "socialmedia"){
                    echo "Icon aktualiesieren";
                }else{
                    echo ucfirst(substr($page, 0, -1)) ." aktualiesieren";
                }
            }elseif($action == 'new'){
                if($page == "staff"){
                    echo "new Employee";
                }elseif($page == "orders"){
                    echo "new Order";
                }elseif($page == "shop_categories"){
                    echo "new Category";
                }elseif($page == "shop_item"){
                    echo "neues Produkt";
                }elseif($page == "content"){
                    echo "neuer " .ucfirst($_GET['page']);
                }elseif($page == "socialmedia"){
                    echo "neues Icon";
                }else{
                    echo "neuer " .ucfirst(substr($page, 0, -1));
                }
            }
  ?>
</h2>

<form class="form_backend" enctype="multipart/form-data" action="index.php?page=<?php /*echo $_GET['page'];*/?>&amp;action=<?php /*if($_GET['action'] == 'edit'){echo "update&amp;id=".$_GET['id'];}elseif($_GET['action'] == 'new'){echo 'insert';}*/?>" method="post" >

    <?php

    echo addInput(get_col_data($page), $action, $id);
    ?>

    <div class="btn_backend">
        <input type="submit" name= "<?php /*echo  $_GET['page'] ."_form"*/?>" value="<?php /*if($_GET['action'] == 'new'){ echo "erstellen";}else{ echo "updaten";} */?>" class="btn_admin_backend">
    </div>

</form>

</section>
<?php
/*global $link;


$total_pages = ceil($total_contents / $entries_per_page);

if($action){
    if($action == 'delete' ){
            //$id = (int)$_GET["id"];
            $deleted = delete_contents($page, $id);
            $return['deleted'] =  $deleted;
        }elseif($_GET['action'] == 'edit'){
        }elseif($_GET['action'] == 'update'){
            //$id = $_GET['id'];
            $array = $_POST;
            $tablename = $page;
            $updated = update_contents($page, $id, $array);
            $return['updated'] =  $updated;
        }elseif($_GET['action'] == 'new') {
        }elseif($_GET['action'] == 'insert'){
            $array = $_POST;
            $tablename = $_GET['page'];
            $insert = insert_contents($_GET['page'], $array);
            $return['insert'] =  $insert;
    }
}*/
?>