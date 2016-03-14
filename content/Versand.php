<?php
include("breadcrumbs.php");
?>
<section class="content-wrapper wrapper_checkout">

    <section class="shipping-info">

        <h2>Versandart:</h2>

        <form class="form_shipping" action="" method="post">

            <p>
                <input type="radio" id="post" name="shipping-type"/> <label for="post">Post (5€ Versandkosten, ab 40€ Versandkostenfrei.)</label>
            </p>

            <p>
                <input type="radio" id="DHL" name="shipping-type"/> <label for=DHL>DHL (5€ Versandkosten, ab 40€ Versandkostenfrei.)</label>
            </p>

            <p>
                <input type="radio" id="express" name="shipping-type"/> <label for="express">Expreeversand (10€ Versandkosten.)</label>
            </p>

        </form>

    </section>

    <section class="payment-info">

        <h2>Zahlungsart:</h2>

        <form class="form_payment" action="" method="post">

            <p>
                <input type="radio" id="vorkasse" name="payment-type"/> <label for="vorkasse">Vorkasse</label>
            </p>

            <p>
                <input type="radio" id="rechnung" name="payment-type"/> <label for=rechnung>Rechnung</label>
            </p>

            <p>
                <input type="radio" id="nachname" name="payment-type"/> <label for="nachname">Nachname</label>
            </p>

        </form>

    </section>

        <section class="shipping-info">

        <form class="form_cuopon" action="" method="post">

            <p>
                <label for="coupon">Gutscheincode*:</label>
                <input type="text" id="coupon" name="shipping-type"/>
            </p>

        </form>

        <p>* Pro Person ist nur ein Gutscheincode einlösbar.</p>

    </section>

    <div class="btn-wrapper_checkout">
        <a href="index.php?page=Adressen" class="btn_checkout">zurück</a>
        <a href="index.php?page=Zusammenfassung" class="btn_checkout">weiter</a>
    </div>

</section>