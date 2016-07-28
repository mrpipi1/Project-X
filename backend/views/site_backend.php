<?php
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
if($_GET['action'] == 'edit' || $_GET['action'] == 'new'){
?>
<section class="wrapper-form-backend">
    <h2 class="hl_form_backend">
        <?php
        if($_GET['action'] == 'edit'){
            if($_GET['page'] == "staff"){
                echo "Mitarbeiter aktualiesieren";
            }elseif($_GET['page'] == "orders"){
                echo "Bestellung aktualiesieren";
            }elseif($_GET['page'] == "shop_categories"){
                echo "Kategorie aktualiesieren";
            }elseif($_GET['page'] == "shop_item"){
                echo "Produkt aktualiesieren";
            }elseif($_GET['page'] == "content"){
                echo ucfirst($_GET['page']) ." aktualiesieren";
            }elseif($_GET['page'] == "socialmedia"){
                echo "Icon aktualiesieren";
            }else{
                echo ucfirst(substr($_GET['page'], 0, -1)) ." aktualiesieren";
            }
        }elseif($_GET['action'] == 'new'){
            if($_GET['page'] == "staff"){
                echo "new Employee";
            }elseif($_GET['page'] == "orders"){
                echo "new Order";
            }elseif($_GET['page'] == "shop_categories"){
                echo "new Category";
            }elseif($_GET['page'] == "shop_item"){
                echo "neues Produkt";
            }elseif($_GET['page'] == "content"){
                echo "neuer " .ucfirst($_GET['page']);
            }elseif($_GET['page'] == "socialmedia"){
                echo "neues Icon";
            }else{
                echo "neuer " .ucfirst(substr($_GET['page'], 0, -1));
            }
        }

        ?>
    </h2>

    <form class="form_backend" enctype="multipart/form-data" action="index.php?page=<?php echo $_GET['page'];?>&amp;action=<?php if($_GET['action'] == 'edit'){echo "update&amp;id=".$_GET['id'];}elseif($_GET['action'] == 'new'){echo 'insert';}?>" method="post" >

        <?php
            if(!isset($_GET['id'])){
                $_GET['id'] = NULL;
            }
            echo addInput(get_col_data($_GET['page']), $_GET['action'], $_GET['id']);
        ?>

        <div class="btn_backend">
            <input type="submit" name= "<?php echo  $_GET['page'] ."_form"?>" value="<?php if($_GET['action'] == 'new'){ echo "erstellen";}else{ echo "updaten";} ?>" class="btn_admin_backend">
        </div>

    </form>

</section>
<?php
}

global $link;

$total_contents = total_contents($page);


$total_pages = ceil($total_contents / $entries_per_page);

if(isset($_GET['action'])){
    if($_GET['action'] == 'delete' ){
        $id = (int)$_GET["id"];
        $deleted = delete_contents($_GET['page'], $id);
        $return['deleted'] =  $deleted;
    }elseif($_GET['action'] == 'edit'){
    }elseif($_GET['action'] == 'update'){
        $id = $_GET['id'];
        $array = $_POST;
        $tablename = $_GET['page'];
        $updated = update_contents($_GET['page'], $id, $array);
        $return['updated'] =  $updated;
    }elseif($_GET['action'] == 'new') {
    }elseif($_GET['action'] == 'insert'){
        $array = $_POST;
        $tablename = $_GET['page'];
        $insert = insert_contents($_GET['page'], $array);
        $return['insert'] =  $insert;
    }
}

   include('table.php'); ?>

</section>
