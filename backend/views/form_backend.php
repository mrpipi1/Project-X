<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21/04/16
 * Time: 15:20
 */
?>

<section class="wrapper_form_backend">

    <h2 class="hl_form_backend">
        <?php
        if($_GET['action'] == 'edit'){
            if($_GET['page'] == "staff"){
                echo "Mitarbeiter aktuaiesieren";
            }elseif($_GET['page'] == "orders"){
                echo "Bestellung aktuaiesieren";
            }elseif($_GET['page'] == "shop_categories"){
                echo "Kategorie aktuaiesieren";
            }elseif($_GET['page'] == "shop_item"){
                echo "Produkt aktuaiesieren";
            }elseif($_GET['page'] == "content"){
                echo ucfirst($_GET['page']) ." aktuaiesieren";
            }elseif($_GET['page'] == "socialmedia"){
                echo "Icon aktuaiesieren";
            }else{
                echo ucfirst(substr($_GET['page'], 0, -1)) ." aktuaiesieren";
            }
        }elseif($_GET['action'] == 'new'){
            if($_GET['page'] == "staff"){
                echo "neuer Mitarbeiter";
            }elseif($_GET['page'] == "orders"){
                echo "neue Bestellung";
            }elseif($_GET['page'] == "shop_categories"){
                echo "neue Kategorie";
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

    <form class="form_backend" action="index.php?page=<?php echo $_GET['page']?>&amp;action=<?php if($_GET['action'] == 'edit'){echo "update&amp;id=" .$_GET['id'];}elseif($_GET['action'] == 'new'){echo "insert";}?>" method="post" enctype="multipart/form-data">

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

