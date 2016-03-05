<?php
include("breadcrumbs.php");
?>

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


<section class="shipping-info_confirmation">

    <h2>Versandart:</h2>
    <a href="#">edit</a>
    <p>Expressversand</p>

</section>

<section class="payment-info_confirmation">

    <h2>Bezahlungsart:</h2>
    <a href="#">edit</a>
    <p>Rechnung</p>

</section>


<section class="wrapper_card">

    <div class="card-item">

        <ul class="description_card-item">
            <li><img src="img/shop-images/damen-tshirt.png" /></li>
            <li>Damen T-Shirt</li>
            <li>T-Shirt aus reiner Bio-Baumwolle.</li>
            <li>Lorem ipsum dolor sit amet</li>
        </ul>

        <ul class="actions_card-item">
            <li>Größe: M</li>
            <li>Farbe: weiß</li>
            <li>Menge: 1</li>
            <li><a href="#">edit</a></li>
            <li><a href="#">delete</a></li>
            <li>19,99€</li>
        </ul>

    </div>

    <div class="card-item">

        <ul class="description_card-item">
            <li><img src="img/shop-images/damen-tshirt.png" /></li>
            <li>Notizblock</li>
            <li>Notizblock mit Gummiband und Lesezeichen.</li>
            <li>Seiten kariert.</li>
        </ul>

        <ul class="actions_card-item">
            <li>Größe: M</li>
            <li>Farbe: weiß</li>
            <li>Menge: 1</li>
            <li><a href="#">edit</a></li>
            <li><a href="#">delete</a></li>
            <li>19,99€</li>
        </ul>

    </div>

    <div class="card-item">

        <ul class="description_card-item">
            <li><img src="img/shop-images/damen-tshirt.png" /></li>
            <li>2 Gummiarmbänder</li>
            <li>Bequeme Armbänder. </li>
            <li>Einheitsgröße.</li>
        </ul>

        <ul class="actions_card-item">
            <li>Farbe 2: schwarz</li>
            <li>Farbe 2: weiß</li>
            <li>Menge: 1</li>
            <li><a href="#">edit</a></li>
            <li><a href="#">delete</a></li>
            <li>3,99€</li>
        </ul>

    </div>

</section>


<ul>
    <li>Versandkosten: 5€</li>
    <li>Gesammtpreis: 48,97</li>
    <li>* alle Preise inkl. MwSt.</li>
</ul>


<form class="form_confirmation" action="" method="post">

    <p>
        <input type="checkbox" id="agbs" name="agb-confirmation"/>
        <label for="agbs">Ich stimme den <a href="#">Datenschutzbestimmungen</a> und <a href="#">AGBs</a> zu.*</label>
    </p>

</form>


<div>
    <a href="#" class="btn">zurück</a>
    <a href="#" class="btn">zahlungspflichtig bestellen</a>
</div>
