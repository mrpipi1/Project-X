<section class="content-wrapper wrapper_checkout">

    <?php
    include("breadcrumbs.php");
    ?>

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
                    <input type="radio" id="post" name="shipping-type" class="radiobutton" <?php if(isset($row['pref_delivery']) && strtolower($row['pref_delivery']) == 'post'){echo 'checked';} ?>/> <label for="post">Post (5€ Versandkosten, ab 40€ Versandkostenfrei.)</label>
                </p>

                <p class="radiobutton_wrapper">
                    <input type="radio" id="DHL" name="shipping-type" class="radiobutton" <?php if(isset($row['pref_delivery']) && strtolower($row['pref_delivery']) == 'dhl'){echo 'checked';} ?>/> <label for=DHL>DHL (5€ Versandkosten, ab 40€ Versandkostenfrei.)</label>
                </p>

                <p class="radiobutton_wrapper">
                    <input type="radio" id="express" name="shipping-type" class="radiobutton" <?php if(isset($row['pref_delivery']) && strtolower($row['pref_delivery']) == 'express'){echo 'checked';} ?>/> <label for="express">Expreeversand (10€ Versandkosten.)</label>
                </p>

            </form>

        </section>

        <section class="shipping-info">

            <h2 class="hl_checkout">Zahlungsart:</h2>

            <form class="form_payment" action="#" method="post">

                <p class="radiobutton_wrapper">
                    <input type="radio" id="vorkasse" name="payment-type" class="radiobutton" <?php if(isset($row['pref_payment']) && strtolower($row['pref_payment']) == 'vorkasse'){echo 'checked';} ?>/> <label for="vorkasse">Vorkasse (Das Paket wird nach eingang der Zahlung verschickt.)</label>
                </p>

                <p class="radiobutton_wrapper">
                    <input type="radio" id="rechnung" name="payment-type" class="radiobutton" <?php if(isset($row['pref_payment']) && strtolower($row['pref_payment']) == 'rechnung'){echo 'checked';} ?>/> <label for=rechnung>Rechnung (Zahlung binnen 14 Tagen nach Erhat der Ware.)</label>
                </p>

                <p class="radiobutton_wrapper">
                    <input type="radio" id="nachname" name="payment-type" class="radiobutton" <?php if(isset($row['pref_payment']) && strtolower($row['pref_payment']) == 'nachname'){echo 'checked';} ?>/> <label for="nachname">Nachname (Bezahlung bei lieferung des Pakets.)</label>
                </p>

            </form>

        </section>

        <?php
      }
        }elseif(isset($_SESSION['guest_id'])){
          ?>
          <section class="shipping-info">

              <h2 class="hl_checkout">Versandart:</h2>

              <form class="form_shipping" action="#" method="post">

                  <p class="radiobutton_wrapper">
                      <input type="radio" id="post" name="shipping-type" class="radiobutton" checked=""/> <label for="post">Post (5€ Versandkosten, ab 40€ Versandkostenfrei.)</label>
                  </p>

                  <p class="radiobutton_wrapper">
                      <input type="radio" id="DHL" name="shipping-type" class="radiobutton"/> <label for=DHL>DHL (5€ Versandkosten, ab 40€ Versandkostenfrei.)</label>
                  </p>

                  <p class="radiobutton_wrapper">
                      <input type="radio" id="express" name="shipping-type" class="radiobutton"/> <label for="express">Expreeversand (10€ Versandkosten.)</label>
                  </p>

              </form>

          </section>

          <section class="shipping-info">

              <h2 class="hl_checkout">Zahlungsart:</h2>

              <form class="form_payment" action="#" method="post">

                  <p class="radiobutton_wrapper">
                      <input type="radio" id="vorkasse" name="payment-type" class="radiobutton" checked/> <label for="vorkasse">Vorkasse (Das Paket wird nach eingang der Zahlung verschickt.)</label>
                  </p>

                  <p class="radiobutton_wrapper">
                      <input type="radio" id="rechnung" name="payment-type" class="radiobutton" /> <label for=rechnung>Rechnung (Zahlung binnen 14 Tagen nach Erhat der Ware.)</label>
                  </p>

                  <p class="radiobutton_wrapper">
                      <input type="radio" id="nachname" name="payment-type" class="radiobutton"/> <label for="nachname">Nachname (Bezahlung bei lieferung des Pakets.)</label>
                  </p>

              </form>

          </section>
          <?php
        }
           ?>

            <section class="form_cuopon">

            <form  action="#" method="post" class="form_main">

                <div class="form-group">
                    <input type="text" name="gutschein" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Gutscheincode</label>
                </div>

            </form>

            <p><small>* Pro Person ist nur ein Gutscheincode einlösbar.</small></p>

        </section>


    </section>


    <div class="btn-wrapper_checkout">
        <div  class="btn_checkout">
            <a href="index.php?page=Adressen">zurück</a>
        </div>

        <div class="btn_checkout">
            <a href="index.php?page=Zusammenfassung" >weiter</a>
        </div>
    </div>

</section>
