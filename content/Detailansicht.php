<section class="content-wrapper wrapper_checkout">
<?php
    while( $row = mysqli_fetch_assoc($detail_product) ) {
?>
    <section class="wrapper_checkout-productdetail">



        <section class="pictures_wrapper">

            <div class="zoomed-picture">
                <a href="#"><img id="detail_img" src="<?php echo $row['pic'] ?>" alt="<?php echo $row['_name'] ?>"></a>
            </div>

            <ul class="thumbs">
                <li class="pic_detailansicht">
                    <div><img class="img-container" src="<?php echo $row['thumb_1'] ?>"
                              alt="<?php echo $row['_name'] ?>"></div>
                </li>
                <li class="pic_detailansicht">
                    <div><img class="img-container" src="<?php echo $row['thumb_2'] ?>"
                              alt="<?php echo $row['_name'] ?>"></div>
                </li>
                <li class="pic_detailansicht">
                    <div><img class="img-container" src="<?php echo $row['thumb_3'] ?>"
                              alt="<?php echo $row['_name'] ?>"></div>
                </li>
            </ul>

        </section>

        <section class="info-wrapper_detailansicht">
            <section class="headline-wrapper_detailansicht">
                <h2><?php echo $row['_name'] ?></h2>
                <h2><?php echo $row['price'] ?></h2>
            </section>

            <p><?php echo $row['description'] ?></p>
            <?php
            }
                ?>
                <div class="selects">
                    <p class="selects-text">Größe:</p>
                    <p class="selects-text">Farbe:</p>
                    <?php
                    while( $row2 = mysqli_fetch_assoc($stock_color) ) {
                        ?>
                    <div class="selects">
                        <div
                            class="size sizepicker-<?php echo $row2['size'] ?>"><?php echo $row2['size'] ?></div>
    </div>
                    <!--<div class="size sizepicker-s">S</div>
                    <div class="size sizepicker-m">M</div>
                    <div class="size sizepicker-l">L</div>
                    <div class="size sizepicker-xl">XL</div>-->




                    <div class="selects">
                    <div class="color colorpicker-<?php echo $row2['color'] ?>">
                        </div>
                        <?php
                    }
                    ?>
                    <!--<div class="color colorpicker-red"></div>
                    <div class="color colorpicker-white"></div>-->
                </div>


                <form class="quantity_big-wrapper">

                    <label for="content" class="light">Menge:</label>
                    <div class="quantity_wrapper">
                        <a id="down" href="#" onclick="updateSpinner(this);">-</a><input id="content" value="0" type="text"
                                                                                         class=" quantity"/><a id="up"
                                                                                                               href="#"
                                                                                                               onclick="updateSpinner(this);">+</a>
                    </div>

                </form>

            </section>
        </section>



    <div class="btn-wrapper_checkout">
        <div  class="btn_checkout">
            <a href="index.php?page=Shop">zurück</a>
        </div>

        <div class="btn_checkout">
            <a href="index.php?page=Detailansicht&product_id=<?php echo $_GET['product_id']; ?>quantity=5&size=xl&color=red&action=insert" >in den Warenkorb</a>
        </div>
    </div>

</section>
