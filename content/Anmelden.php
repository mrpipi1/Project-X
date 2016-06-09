<section class="content-wrapper wrapper_checkout">
    <?php
    include("breadcrumbs.php");
    ?>

        <section class="wrapper_form_login">

            <h2 class="hl_checkout">Anmelden</h2>

            <form class="form_checkout" action="#" method="post">

                <div class="form-group">
                    <input type="text" name="email" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">E-Mail oder Username*</label>
                </div>

                <div class="form-group">
                    <input type="password" name="password" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Passwort*</label>
                </div>

                <div class="btn_checkout btn_big-checkout">
                    <input type="submit" name="login" value="Registrieren"   class="btn_big-checkout input">
                </div>
            </form>

            <div class="form_checkout-text"><a href="#" class="form_checkout_link">Passwort vergessen?</a></div>
            <div >Noch kein Kunde? <a href="index.php?page=Registrieren" class="form_checkout_link">Jetzt registrieren!</a></div>

        </section>


    <h2 class="hl_checkout">oder</h2>


        <section class="wrapper_form_login">

            <h2 class="hl_checkout">als Gast fortfahren</h2>

            <form class="form_checkout" action="#" method="post">

                <div class="form-group_ckeckout form-group_alsGast">
                    <input type="text" name="email" value="" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">E-Mailadresse*</label>
                </div>

                <div class="btn_checkout btn_big-checkout ">
                    <input type="button" name="gast" value="als Gast fortfahren"  class="btn_big-checkout input">
                </div>
            </form>

        </section>


    <div class="btn-wrapper_checkout">
        <div  class="btn_checkout">
            <a href="index.php?page=Warenkorb">zurück</a>
        </div>

        <div class="btn_checkout">
            <a href="index.php?page=Adressen" >weiter</a>
        </div>
    </div>

</section>
