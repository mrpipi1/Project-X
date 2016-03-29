<section class="content-wrapper">
    <h2>Registrieren</h2>

    <form class="form_checkout form-register" action="" method="post">

        <div class="form-group">
            <input type="text" name="firstname" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Vorname*</label>
        </div>

        <div class="form-group">
            <input type="text" name="lastname" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Nachname*</label>
        </div>

        <div class="form-group">
            <input type="text" name="email" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">E-Mailadresse*</label>
        </div>

        <div class="form-group">
            <input type="password" name="password" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Passwort*</label>
        </div>

        <div class="form-group">
            <input type="password" name="password-wh" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Passwort wiederholen*</label>
        </div>

        <div class="radio_datenschutz">
            <input class="input_dateschutz" type="checkbox" name="agb-confirm" id="agb-confirm" /> <label>Ich stimme den <a href="#">Datenschutzbestimmungen</a> und <a href="#">AGBs</a> zu.*"</label>
        </div>


        <p class="pflichtfeld">*Pflichtfelder</p>

        <div class="btn_checkout btn_big-checkout">
            <input type="submit" name="register" value="Registrieren" class="btn_big-checkout input">
        </div>

    </form>

</section>
