<section class="content-wrapper wrapper_checkout">

<?php
include("breadcrumbs.php");
?>
    <!-- Adressen -->
    <section class="wrapper-order-sum">
        <section class="wrapper-form-order-sum">
          <section class="billing-address">

              <h2 class="hl_checkout">Rechnungsadresse</h2>

              <form class="form_checkout" action="#" method="post">

                  <div class="form-group">
                      <input type="text" name="name" value="" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Vorname | Nachname*</label>
                  </div>

                  <div class="form-group">
                      <input type="text" name="tel" value="" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Strasse | Hausnummer</label>
                  </div>

                  <div class="form-group">
                      <input type="text" name="email" value="" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Postleitzahl | Stadt</label>
                  </div>

                  <div class="btn_checkout btn_big-checkout">
                      <input type="submit" name="address" value="Übernehmen" class="btn_big-checkout input">
                  </div>

              </form>

          </section>


          <section class="shipping-address">

              <h2 class="hl_checkout hl_shipping_address">Lieferadresse</h2>

              <form class="form_checkout" action="#" method="post">

                <div class="raidiobutton_wrapper_shipping">
                  <label for="is_shipping_addess" class="label_backend">gleich wie Rechnungsadresse</label>
                  <input type="checkbox" name="is_shipping_address" id="is_shipping_address"  checked/>
                </div>

                <div class="shipping_form_wrapper">

                  <div class="form-group">
                      <input type="text" name="name" value="" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Vorname | Nachname*</label>
                  </div>

                  <div class="form-group">
                      <input type="text" name="tel" value="" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Strasse | Hausnummer</label>
                  </div>

                  <div class="form-group">
                      <input type="text" name="email" value="" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Postleitzahl | Stadt</label>
                  </div>

                  <div class="btn_checkout btn_big-checkout">
                      <input type="submit" name="address" value="Übernehmen" class="btn_big-checkout input">
                  </div>
                </div>

              </form>
          </section>
        </section>


        <!-- Versand und Bezahlung -->
        <h2>Bestellung</h2>
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
            mysqli_data_seek($cart, 0);
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
            if($price >= 40){
                $delivery_cost = 0;
            }
            $price += $delivery_cost;
            ?>

        </section>

        <div class="sum_card_wrapper">

            <ul class="versand-datum">
                <li>Vorraussichtliche Lieferung:</li>
                <li>in 3 - 5 Werktagen</li>
            </ul>

            <ul class="sum_card">
                <li>Versandkosten: <?php echo $delivery_cost; ?> €</li>
                <li>Gesammtpreis: <?php echo $price; ?> €</li>
                <li class="small-text">* alle Preise inkl. MwSt.</li>
                <li class="small-text">* Versandkostenfrei ab 40€</li>
            </ul>
        </div>


        <!-- AGB und Datenschutzbestimmungen akzeptieren -->
        <form class="form_confirmation" action="#" method="post">

            <p class="form_confirmation_content">
                <input type="checkbox" id="agbs" name="agb-confirmation"/>
                <label class="label_normal" for="agbs">Ich stimme den <a href="#">Datenschutzbestimmungen</a> und <a href="#">AGBs</a> zu.*</label>
            </p>

        </form>
    </section>
    <div class="btn-wrapper_checkout">
        <div  class="btn_checkout">
            <a href="index.php?page=Versand">zurück</a>
        </div>

        <div class="btn_checkout">
            <a href="index.php?page=Abschluss" >zahlungspflichtig bestellen</a>
        </div>
    </div>

</section>
