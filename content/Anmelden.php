<section class="content-wrapper wrapper_checkout">
    <?php
    include("breadcrumbs.php");
    ?>

        <section class="wrapper_form_login">

            <h2>Anmelden</h2>

            <form class="form_login" action="" method="post">

                <div class="form-group">
                    <input type="text" name="email" value="" required>
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label>E-Mail oder Username*</label>
                </div>

                <div class="form-group">
                    <input type="password" name="password" value="" required>
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label>Passwort*</label>
                </div>

                <div class="btn_register btn">
                    <input type="submit" name="name" value="Registrieren">
                </div>
            </form>

            <a href="#">Passwort vergessen</a>
            <a href="#">Noch kein Kunde? Jetzt registrieren!</a>

        </section>


    <p>oder</p>


        <section class="wrapper_form_login">

            <h2>als Gast fortfahren</h2>

            <form class="form_loin" action="" method="post">

                <div class="form-group">
                    <input type="text" name="email" value="" required>
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label>E-Mailadresse*</label>
                </div>

                <div class="btn_register btn">
                    <input type="button" name="name" value="als Gast fortfahren">
                </div>
            </form>

        </section>


    <div class="btn-wrapper_checkout">
        <a href="index.php?page=Warenkorb" class="btn">zurück</a>
        <a href="index.php?page=Adressen" class="btn">weiter</a>
    </div>

</section>