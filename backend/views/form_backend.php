<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21/04/16
 * Time: 15:20
 */
?>

<section class="wrapper_form_backend">

    <h2 class="hl_form_backend">neuer <?php echo ucfirst(substr($_GET['page'], 0, -1)); ?></h2>

    <form class="form_backend" action="" method="post" enctype="multipart/form-data">

        <?php

            echo addInput($_GET['page']);

        ?>

        <div class="btn_backend">
            <input type="submit" name= $_GET['page]."_form" value="erstellen"   class="btn_admin_backend">
        </div>

    </form>

</section>

