
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
    $price = 0;
    $delivery_cost = 5;
    while ($row = mysqli_fetch_assoc($cart)) {
        mysqli_data_seek($products, 0);
        while ($row2 = mysqli_fetch_assoc($products)) {

            if($row['product_id'] == $row2['id']) {
                $price += $row2['price']*$row['quantity'];
                ?>

                <div class="card-item <?php echo 'cart_item_'.$row['id'].' '; if ($cnt == 0) {echo 'card-item_first';} ?> ">

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
                    <div class="delete_wrapper"><a href="#" class="delete" onClick="delete_from_cart(<?php echo $row['id']; ?>)"><i class="fa fa-ban" aria-hidden="true"></i></a></div>

                </div>
                <?php
            }
        }
        $cnt++;
    }
    if($price > 50){
        $delivery_cost = 0;
    }
    $price += $delivery_cost;
    ?>

</section>

<div class="sum_card_wrapper">

    <ul class="versand-datum">
        <li><h5>Vorraussichtliche Lieferung:</h5></li>
        <li>in 3 - 5 Werktagen</li>
    </ul>

    <ul class="sum_card">
        <li>Versandkosten: <?php echo $delivery_cost; ?> €</li>
        <li><h5>Gesammtpreis: </h5> <?php echo $price; ?> €</li>
        <li class="small-text">* alle Preise inkl. MwSt.</li>
        <li class="small-text">* Versandkostenfrei ab 40€</li>
    </ul>
</div>


<div class="btn-wrapper_checkout">
    <div  class="btn_checkout">
        <a href="index.php?page=Detailansicht">zurück</a>
    </div>

    <div class="btn_checkout">
        <?php if(isset($_SESSION['user'])){
            echo '<a href="index.php?page=Adressen" >weiter</a>';
        }else{
            echo '<a href="index.php?page=Anmelden">weiter</a>';
        }
        ?>

    </div>
</div>

</section>
