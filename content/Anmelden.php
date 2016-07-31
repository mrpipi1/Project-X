<section class="content-wrapper wrapper_checkout">
    <?php
    include("breadcrumbs.php");
    ?>
        <section class="wrapper_form">

            <section class="wrapper_form_login">

                <h2 class="hl_checkout">Anmelden</h2>

                <form class="form_checkout" action="#" method="post">

                    <div class="form-group">
                        <input type="text" name="_name" value="" required class="input input_anmelden_email">
                        <span class="highlight"></span>
                        <span class="form-bar"></span>
                        <label class="label">E-Mail oder Username*</label>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" value="" required class="input input_anmelden_pw">
                        <span class="highlight"></span>
                        <span class="form-bar"></span>
                        <label class="label">Passwort*</label>
                    </div>

                    <div class="btn_checkout btn_big-checkout">
                        <input type="submit" name="login" value="Anmelden"   class="btn_big-checkout input">
                    </div>
                </form>

                <div class="form_checkout_text-link">
                    <div class="form_checkout-text">
                        <a href="#" class="form_checkout_link">Passwort vergessen?</a>
                    </div>
                    <div><h4 class="form_checkout-sectionsheadline">Noch kein Kunde?</h4>
                         <a href="index.php?page=Registrieren" class="form_checkout_link">Jetzt registrieren!</a>
                    </div>
                </div>

            </section>


        <h2 class="hl_checkout">oder</h2>


            <section class="wrapper_form_login">

                <h2 class="hl_checkout">als Gast fortfahren</h2>

                <form class="form_checkout" action="#" method="post">

                    <div class="form-group_ckeckout form-group_alsGast">
                        <input type="text" name="email" value="" required class="input input_anmelden_guest">
                        <span class="highlight"></span>
                        <span class="form-bar"></span>
                        <label class="label">E-Mailadresse*</label>
                    </div>

                    <div class="btn_checkout btn_big-checkout ">
                        <input type="button" name="gast" value="als Gast fortfahren"  class="btn_big-checkout input">
                    </div>
                </form>

            </section>
        </section>

    <div class="btn-wrapper_checkout">
        <div  class="btn_checkout">
            <a href="index.php?page=Warenkorb">zurück</a>
        </div>
    </div>

</section>
