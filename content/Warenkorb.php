
<section class="content-wrapper wrapper_checkout">
    <?php
    include("breadcrumbs.php");
    ?>
<section class="wrapper_card">

    <div>
        <ul class="card-header">
            <li class="description">Artikel</li>
            <li class="actions">Größe</li>
            <li class="actions">Farbe</li>
            <li class="actions">Menge</li>
            <li class="actions_price">Preis</li>
        </ul>
    </div>
    <?php
    $cnt = 0;
    while ($row = mysqli_fetch_assoc($cart)) {
        mysqli_data_seek($products, 0);
        while ($row2 = mysqli_fetch_assoc($products)) {
            if($row['product_id'] == $row2['id']) {

                ?>

                <div class="card-item <?php if ($cnt == 0) {
                    echo 'card-item_first';
                } ?> ">

                    <img src="<?php echo $row2['pic']; ?>" class="img_card" alt="<?php echo $row2['pic']; ?>"/>

                    <ul class="description_card-item">
                        <li><?php echo $row2['_name']; ?></li>
                        <li><?php echo $row2['description']; ?></li>
                    </ul>

                    <ul class="actions_card-item">
                        <li><?php echo $row['product_size']; ?></li>
                        <li class="farbe"><?php echo $row2['color']; ?></li>
                        <li><?php echo $row['quantity']; ?></li>
                    </ul>


                    <div class="price_wrapper"><?php echo $row2['price']; ?></div>
                    <div class="delete_wrapper"><a href="#" class="delete">delete</a></div>

                </div>
                <?php
            }
        }
    }
    ?>

</section>

<div class="sum_card_wrapper">

    <ul class="versand-datum">
        <li>Vorraussichtliche Lieferung:</li>
        <li>Dienstag, 05.04.2016</li>
    </ul>

    <ul class="sum_card">
        <li>Versandkosten: 5€</li>
        <li>Gesammtpreis: 48,97</li>
        <li class="small-text">* alle Preise inkl. MwSt.</li>
    </ul>
</div>


<div class="btn-wrapper_checkout">
    <div  class="btn_checkout">
        <a href="index.php?page=Detailansicht">zurück</a>
    </div>

    <div class="btn_checkout">
        <a href="index.php?page=Anmelden" >weiter</a>
    </div>
</div>

</section>
