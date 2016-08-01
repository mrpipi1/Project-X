<section class="content-wrapper wrapper_checkout">

<?php
include("breadcrumbs.php");
?>
    <!-- Adressen -->
    <section class="wrapper_form">
      <?php
      if(isset($_SESSION['guest_id'])){
        ?>
        <section class="billing-address">
            <h2 class="hl_checkout">Rechnungsadresse</h2>
            <form class="form_checkout" action="#" method="post">

                <div class="form-group">
                    <input type="text" name="name" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Vorname | Nachname*</label>
                    <span class="error">
                </div>

                <div class="form-group">
                    <input type="text" name="address" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Strasse | Hausnummer*</label>
                    <span class="error">
                </div>

                <div class="form-group">
                    <input type="text" name="city" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Stadt*</label>
                    <span class="error">
                </div>
                <div class="form-group">
                    <input type="text" name="zip_code" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Postleitzahl*</label>
                    <span class="error">
                </div>

                <div class="btn_checkout btn_big-checkout">
                    <input type="submit" name="reciept_address" value="Übernehmen" class="btn_big-checkout input checkout_default_address_submit">
                </div>

            </form>

        </section>


        <div class="raidiobutton_wrapper_shipping">
          <label for="is_shipping_address" class="label_backend">Gleich wie Rechnungsadresse</label>
          <input type="checkbox" name="is_shipping_address" id="is_shipping_address"  checked/>
        </div>
        <!-- <div class="raidiobutton_wrapper_shipping">
          <div id="is_shipping_address">Gleich wie Rechnungsadresse</div>
        </div> -->


        <section class="shipping-address">
            <h2 class="hl_checkout hl_shipping_address">Lieferadresse</h2>
            <form class="form_checkout" action="#" method="post">

              <div class="shipping_form_wrapper">

                <div class="form-group">
                    <input type="text" name="name" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Vorname | Nachname*</label>
                    <span class="error">
                </div>

                <div class="form-group">
                    <input type="text" name="address" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Strasse | Hausnummer</label>
                    <span class="error">
                </div>

                <div class="form-group">
                    <input type="text" name="city" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Stadt*</label>
                    <span class="error">
                </div>
                <div class="form-group">
                    <input type="text" name="zip_code" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Postleitzahl*</label>
                    <span class="error">
                </div>

                <div class="btn_checkout btn_big-checkout">
                    <input type="submit" name="delivery_address" value="Übernehmen" class="btn_big-checkout input checkout_receipt_address_submit">
                </div>
              </div>
            </form>
        </section>
        <?php
        //
      }elseif(isset($_SESSION['user']['user_id'])){
          ?>
          <section class="billing-address">

              <h2 class="hl_checkout">Rechnungsadresse</h2>

              <form class="form_checkout" action="#" method="post">

                <?php
                  while( $row = mysqli_fetch_assoc($user_info) ){
                ?>
                  <div class="form-group">
                      <input type="text" name="address" value="<?php if(isset($row['address'])){echo $row['address'];} ?>" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Strasse | Hausnummer*</label>
                      <span class="error">
                  </div>


                  <div class="form-group">
                      <input type="text" name="city" value="<?php if(isset($row['city'])){echo $row['city'];} ?>" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Stadt*</label>
                      <span class="error">
                  </div>
                  <div class="form-group">
                      <input type="text" name="zip_code" value="<?php if(isset($row['zip_code'])){echo $row['zip_code'];} ?>" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Postleitzahl*</label>
                      <span class="error">
                  </div>

                  <div class="btn_checkout btn_big-checkout">
                      <input type="submit" name="reciept_address" value="Übernehmen" class="btn_big-checkout input checkout_receipt_address_submit">
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
                      <input type="text" name="address" value="" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Strasse | Hausnummer*</label>
                      <span class="error">
                  </div>

                  <div class="form-group">
                      <input type="text" name="city" value="" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Stadt*</label>
                      <span class="error">
                  </div>
                  <div class="form-group">
                      <input type="text" name="zip_code" value="" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Postleitzahl*</label>
                      <span class="error">
                  </div>

                  <div class="btn_checkout btn_big-checkout">
                      <input type="submit" name="delivery_address" value="Übernehmen" class="btn_big-checkout input">
                  </div>
                </div>

              </form>

          </section>
          <?php
          }
        }
        ?>
    </section>


        <section class="wrapper_shipping-info">
          <?php
          if(isset($_SESSION['user']['user_id'])){
          ?>
          <?php
            while( $row = mysqli_fetch_assoc($user_info) ){
          ?>
            <section class="shipping-info">

                <h2 class="hl_checkout">Versandart:</h2>

                <form class="form_shipping" action="#" method="post">


                    <p class="radiobutton_wrapper">
                        <input type="radio" id="post" name="delivery_option" class="radiobutton" <?php if(isset($row['pref_delivery']) && strtolower($row['pref_delivery']) == 'post'){echo 'checked';} ?>/> <label for="post">Post (5€ Versandkosten, ab 40€ Versandkostenfrei.)</label>
                    </p>

                    <p class="radiobutton_wrapper">
                        <input type="radio" id="DHL" name="delivery_option" class="radiobutton" <?php if(isset($row['pref_delivery']) && strtolower($row['pref_delivery']) == 'dhl'){echo 'checked';} ?>/> <label for=DHL>DHL (5€ Versandkosten, ab 40€ Versandkostenfrei.)</label>
                    </p>

                    <p class="radiobutton_wrapper">
                        <input type="radio" id="express" name="delivery_option" class="radiobutton" <?php if(isset($row['pref_delivery']) && strtolower($row['pref_delivery']) == 'express'){echo 'checked';} ?>/> <label for="express">Expreeversand (10€ Versandkosten.)</label>
                    </p>

                </form>

            </section>

            <section class="shipping-info">

                <h2 class="hl_checkout">Zahlungsart:</h2>

                <form class="form_payment" action="#" method="post">
                    <p class="radiobutton_wrapper">
                        <input type="radio" id="vorkasse" name="payment_option" class="radiobutton" <?php if(isset($row['pref_payment']) && strtolower($row['pref_payment']) == 'vorkasse'){echo 'checked';} ?>/> <label for="vorkasse">Vorkasse (Das Paket wird nach eingang der Zahlung verschickt.)</label>
                    </p>

                    <p class="radiobutton_wrapper">
                        <input type="radio" id="rechnung" name="payment_option" class="radiobutton" <?php if(isset($row['pref_payment']) && strtolower($row['pref_payment']) == 'rechnung'){echo 'checked';} ?>/> <label for=rechnung>Rechnung (Zahlung binnen 14 Tagen nach Erhat der Ware.)</label>
                    </p>

                    <p class="radiobutton_wrapper">
                        <input type="radio" id="nachname" name="payment_option" class="radiobutton" <?php if(isset($row['pref_payment']) && strtolower($row['pref_payment']) == 'nachname'){echo 'checked';} ?>/> <label for="nachname">Nachname (Bezahlung bei lieferung des Pakets.)</label>
                    </p>

                </form>

            </section>

            <?php
          }
            }
?>
</section>

        <!-- Versand und Bezahlung -->
        <h2 class="hl_checkout">Bestellung</h2>
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
