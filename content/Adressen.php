<section class="content-wrapper wrapper_checkout">
<?php include("breadcrumbs.php");?>
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

    <div class="btn-wrapper_checkout">
        <div  class="btn_checkout">
            <a href="index.php?page=Anmelden">zurück</a>
        </div>
        <div class="btn_checkout">
            <span class="next_btn next_btn_adressen">weiter</span>
        </div>
    </div>

</section>
