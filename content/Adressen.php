<section class="content-wrapper wrapper_checkout">
<?php include("breadcrumbs.php");?>
    <section class="wrapper_form">
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
                    <input type="text" name="tel" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Strasse | Hausnummer</label>
                    <span class="error">
                </div>

                <div class="form-group">
                    <input type="text" name="email" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Postleitzahl | Stadt</label>
                    <span class="error">
                </div>

                <div class="btn_checkout btn_big-checkout">
                    <input type="submit" name="address" value="Übernehmen" class="btn_big-checkout input checkout_default_address_submit">
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
                    <span class="error">
                </div>

                <div class="form-group">
                    <input type="text" name="tel" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Strasse | Hausnummer</label>
                    <span class="error">
                </div>

                <div class="form-group">
                    <input type="text" name="email" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Postleitzahl | Stadt</label>
                    <span class="error">
                </div>

                <div class="btn_checkout btn_big-checkout">
                    <input type="submit" name="address" value="Übernehmen" class="btn_big-checkout input checkout_receipt_address_submit">
                </div>
              </div>

            </form>


        </section>
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
