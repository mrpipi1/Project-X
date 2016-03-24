<section class="content-wrapper wrapper_checkout">

<?php
include("breadcrumbs.php");
?>
    <!-- Adressen -->
    <section class="billing-address">

        <h2>Rechnungsadresse:</h2>
        <a href="#">edit</a>

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

            <div class="btn">
                <input type="submit" name="address" value="Übernehmen">
            </div>

        </form>

    </section>


    <section class="shipping-address">

        <h2>Lieferadresse:</h2>
        <a href="#">edit</a>

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

            <div class="btn">
                <input type="submit" name="address" value="Übernehmen">
            </div>

        </form>


    </section>


    <!-- Versand und Bezahlung -->
    <section class="wrapper_card">

        <div class="card-item">

            <img src="img/shop-images/damen-tshirt_small.png" />

            <ul class="description_card-item">
                <li>Damen T-Shirt</li>
                <li>T-Shirt aus reiner Bio-Baumwolle, Lorem ipsum dolor sit amet.</li>
            </ul>

            <ul class="description_card-item">
                <li>Größe: M</li>
                <li>Farbe: weiß</li>
                <li>Menge: 1</li>
            </ul>

            <a href="#">delete</a>
            <p>19,99€</p>

        </div>

        <div class="card-item">

            <img src="img/shop-images/damen-tshirt_small.png" />

            <ul class="description_card-item">
                <li>Notizblock</li>
                <li>Notizblock mit Gummiband und Lesezeichen. Seiten kariert.</li>
            </ul>

            <ul class="description_card-item">
                <li>Größe: M</li>
                <li>Farbe: weiß</li>
                <li>Menge: 1</li>
            </ul>

            <a href="#">delete</a>
            <p>19,99€</p>

        </div>

        <div class="card-item">

            <img src="img/shop-images/damen-tshirt_small.png" />

            <ul class="description_card-item">
                <li>2 Gummiarmbänder</li>
                <li>Bequeme Armbänder. Einheitsgröße.</li>
            </ul>

            <ul class="description_card-item">
                <li>Farbe 2: schwarz</li>
                <li>Farbe 2: weiß</li>
                <li>Menge: 1</li>
            </ul>

            <a href="#">delete</a>
            <p>3,99€</p>

        </div>

    </section>

    <div class="sum_card_wrapper">
        <ul class="sum_card">
            <li>Versandkosten: 5€</li>
            <li>Gesammtpreis: 48,97</li>
            <li class="small-text">* alle Preise inkl. MwSt.</li>
        </ul>
    </div>


    <!-- AGB und Datenschutzbestimmungen akzeptieren -->
    <form class="form_confirmation" action="" method="post">

        <p>
            <input type="checkbox" id="agbs" name="agb-confirmation"/>
            <label for="agbs">Ich stimme den <a href="#">Datenschutzbestimmungen</a> und <a href="#">AGBs</a> zu.*</label>
        </p>

    </form>


    <div class="btn-wrapper_checkout">
        <a href="index.php?page=Versand" class="btn_checkout">zurück</a>
        <a href="index.php?page=Abschluss" class="btn_checkout">zahlungspflichtig bestellen</a>
    </div>

</section>
