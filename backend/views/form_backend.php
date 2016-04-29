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
        ?>
    </h2>

    <form class="form_backend" action="<?php echo "index.php?page=" .$_GET['page'] ."&amp;action=update&amp;id=" .$_GET['id'] ?>" method="post" enctype="multipart/form-data">

        <?php
            echo addInput(get_col_data($_GET['page']));
        ?>

        <div class="btn_backend">
            <input type="submit" name= "<?php echo  $_GET['page'] ."_form"?>" value="erstellen"   class="btn_admin_backend">
        </div>

    </form>

</section>

