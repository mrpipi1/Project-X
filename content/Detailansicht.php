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

                ?>
                <ul class="selects">
                    <li class="selects-text">Größe:</li>
                    <?php
                    mysqli_data_seek($sizes, 0);
                    while ($row3 = mysqli_fetch_assoc($sizes)) {
                        //print_r($row3);

                        if($row['id'] == $row3['product_id']) {

                            if($row3['stock'] > 0){
                                echo "<li class='size'>".strtoupper($row3['size'])."</li>";
                            }
                        }
                    }
                }
                    ?>

                    <!--<div class="color colorpicker-red"></div>
                    <div class="color colorpicker-white"></div>-->
                </ul>


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


            <?php
            echo "<div class=\"btn_checkout\" onClick=\"add_to_Cart('".$_SESSION['user']['user_id']."','".$_GET['product_id']."')\"><span>in den Warenkorb</span></div>";
            ?>



        </div>
    </div>

</section>
