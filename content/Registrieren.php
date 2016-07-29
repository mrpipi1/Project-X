<section class="content-wrapper wrapper_register">

    <section class="wrapper_form_login">

        <h2 class="hl_checkout">Anmelden</h2>

        <form class="form_checkout" action="#" method="post">

            <div class="form-group">
                <input type="text" name="_name" value="" required class="input">
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
                <input type="submit" name="login" value="Einloggen"   class="btn_big-checkout input">
            </div>
        </form>

        <div class="form_checkout-text"><a href="#" class="form_checkout_link">Passwort vergessen?</a></div>
        <p class="pflichtfeld">*Pflichtfelder</p>

    </section>

    <section class="wrapper_form_login">

    <h2 class="hl_checkout">Registrieren</h2>

    <form class="form_checkout form-register" action="index.php?page=<?php echo $_GET['page']?>&amp;action=<?php echo "register";?>" method="post">

        <div class="form-group">
            <input type="text" name="_name" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Username*</label>
        </div>

        <div class="form-group">
            <input type="text" name="fullname" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Fullname*</label>
        </div>

        <div class="form-group">
            <input type="text" name="email" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">E-Mailadresse*</label>
        </div>

        <div class="form-group">
            <input type='tel' name="tel" value="" required class="input" pattern='[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}'>
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Telefonnummer*</label>
        </div>

        <div class="form-group">
            <input type="password" name="password" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Passwort*</label>
        </div>

        <div class="form-group">
            <input type="password" name="password_wh" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Passwort wiederholen*</label>
        </div>

        <div class="form-group">
            <input type="text" name="gender" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Gender*</label>
        </div>

        <div class="form-group">
            <input type="date" name="birthday" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Geburtstag*</label>
        </div>

        <div class="form-group">
            <input type="text" name="address" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Adresse*</label>
        </div>

        <div class="form-group">
            <input type="text" name="zip_code" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Postleitzahl*</label>
        </div>



        <div class="radio_datenschutz">
            <input class="input_dateschutz" type="checkbox" name="agb-confirm" id="agb-confirm" /> <label>Ich stimme den <a href="#">Datenschutzbestimmungen</a> und <a href="#">AGBs</a> zu.*</label>
        </div>


        <p class="pflichtfeld">*Pflichtfelder</p>

        <div class="btn_checkout btn_big-checkout">
            <input type="submit" name="register" value="Registrieren" class="btn_big-checkout input">
        </div>

    </form>

    </section>

</section>
