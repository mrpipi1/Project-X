<section class="content-wrapper wrapper_checkout">
    <?php
    include("breadcrumbs.php");
    ?>

    <section class="billing-address">

        <h2>Rechnungsadresse:</h2>

        <form class="form_billing-address" action="" method="post">

            <div class="form-group">
                <input type="text" name="name" value="" required>
                <span class="highlight"></span>
                <span class="form-bar"></span>
                <label>Vorname | Nachname*</label>
            </div>

            <div class="form-group">
                <input type="text" name="tel" value="" required>
                <span class="highlight"></span>
                <span class="form-bar"></span>
                <label>Strasse | Hausnummer</label>
            </div>

            <div class="form-group">
                <input type="text" name="email" value="" required>
                <span class="highlight"></span>
                <span class="form-bar"></span>
                <label>Postleitzahl | Stadt</label>
            </div>

            <div class="btn_checkout">
                <input type="submit" name="address" value="Übernehmen">
            </div>

        </form>

    </section>


    <section class="shipping-address">

        <h2>Lieferadresse:</h2>

        <form class="form_shipping-address" action="" method="post">

            <div class="form-group">
                <input type="text" name="name" value="" required>
                <span class="highlight"></span>
                <span class="form-bar"></span>
                <label>Vorname | Nachname*</label>
            </div>

            <div class="form-group">
                <input type="text" name="tel" value="" required>
                <span class="highlight"></span>
                <span class="form-bar"></span>
                <label>Strasse | Hausnummer</label>
            </div>

            <div class="form-group">
                <input type="text" name="email" value="" required>
                <span class="highlight"></span>
                <span class="form-bar"></span>
                <label>Postleitzahl | Stadt</label>
            </div>

            <div class="btn_checkout">
                <input type="submit" name="address" value="Übernehmen">
            </div>

        </form>


    </section>


    <div class="btn-wrapper_checkout">
        <div  class="btn_checkout">
            <a href="index.php?page=Detailansicht">zurück</a>
        </div>

        <div class="btn_checkout">
            <a href="index.php?page=Anmelden" >weiter</a>
        </div>
    </div>

</section>