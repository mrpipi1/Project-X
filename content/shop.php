<section class="content-wrapper">
    <h2>Shop</h2>
    <nav class="shop-categories">
        <ul>
            <li><a href="#">Alle</a></li>
            <li><a href="#clothes">Bekleidung</a></li>
            <li><a href="#accessories">Zubehör</a></li>
            <li><a href="#others">Sonstiges</a></li>
            <li><a href="#">Suche</a></li>
        </ul>
    </nav>


    <!-- &amp;item=2  2 steht für die id von dem item, die es später in der datenbank geben wird-->

    <section class="wrapper_shop">
        <?php
        while( $row2 = mysqli_fetch_assoc($categories) ) {
            ?>
            <h3><?php echo $row2['_name'] ?></h3>

            <section class="line-wrapper_shop">


                <?php
                mysqli_data_seek($shop, 0);
                while ($row = mysqli_fetch_assoc($shop)) {
                    if($row2['id'] == $row['shop_categories_id']) {
                        ?>
                        <section class="product">
                            <a href="index.php?page=Detailansicht&amp;product_id=<?php echo $row['id'] ?>">
                                <ul class="product-img">
                                    <img src="<?php echo $row['pic'] ?>" class="jumper_white"/>
                                </ul>
                                <ul class="info">
                                    <li><?php echo $row['_name'] ?></li>
                                    <li><?php echo $row['price'] ?></li>
                                </ul>
                                <ul class="overlay overlay-checkout">
                                    <li><h1><?php echo $row['_name'] ?></h1></li>
                                    <li><p><?php echo $row['price'] ?></p></li>
                                    <li>
                                        <ul class="colors colors-checkout">
                                            <?php
                                            mysqli_data_seek($color, 0);
                                            while ($row3 = mysqli_fetch_assoc($color)) {
                                                //print_r($row3);
                                                if($row['id'] == $row3['product_id']) {
                                                    ?>
                                                    <li style="Background-color: <?php echo $row3['color'] ?>"><?php echo $row3['color'] ?></li>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                </ul>
                            </a>
                        </section>
                        <?php
                    }
                }
                ?>


            </section>
            <?php
        }
        ?>
    </section>
</section>
