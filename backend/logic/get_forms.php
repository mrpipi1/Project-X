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


    echo "<div class=\"btn_backend\" onClick=\"insert_or_update('".$page."','". $action ."','". $id."')\">";
    if($action == 'new'){ echo "erstellen";}else{ echo "updaten";}
    echo '</div>';
?>
</form>

</section>
