<section class="content-wrapper wrapper_register">

    <section class="wrapper_form_login">

        <h2 class="hl_checkout">Anmelden</h2>

        <form class="form_checkout" action="#" method="post">

            <div class="form-group login_name">
                <input id="login_name" type="text" name="_name" value="" required class="input">
                <span class="highlight"></span>
                <span class="form-bar"></span>
                <label class="label">E-Mail oder Username*</label>
                <span class="error error_login_name">
            </div>

            <div class="form-group" login_password>
                <input id="login_password" type="password" name="password" value="" required class="input">
                <span class="highlight"></span>
                <span class="form-bar"></span>
                <label class="label">Passwort*</label>
                <span class="error error_login_password">
            </div>

            <div class="btn_checkout btn_big-checkout">
                <input type="submit" name="login" value="Einloggen"   class="btn_big-checkout input login_submit">
            </div>
        </form>

        <div class="profile_shop_link_wrapper profile_shop_link_wrapper_register">
          <!-- hidden user info messages -->
          <div class="email_was_send">Du wirst in kürze eine Email mit deinem neuen Passwort erhalten, solltest du keine Email erhalten kontaktiere uns unter <a href="mailto:office@lotusyoga.at?subject=Password-reset" class="profile-email">office@lotusyoga.at</a></div>
          <div class="profile_error_message_password">Die Email konnte nicht gesendet weden, bitte kontaktiere uns unter <a href="mailto:office@lotusyoga.at?subject=Password-reset" class="profile-email">office@lotusyoga.at</a> oder <a href="tel:0155555555">01 555 555 55</a></div>
          <!-- password reset + confirmation -->
          <div class="profile_shop_link  profile_info_label">Passwort vergessen?</div>
          <div class="send_password_message">Passwort zurücksetzen? <br /><div class="confirm">Ja, neues Passwort zuschicken.</div><br /><div  class="deny"<div>Abbrechen</div>
        </div>
        <p class="pflichtfeld">*Pflichtfelder</p>

    </section>

    <section class="wrapper_form_login">

    <h2 class="hl_checkout">Registrieren</h2>

    <form class="form_checkout form-register" action="index.php?page=<?php echo $_GET['page']?>&amp;action=<?php echo "register";?>" method="post">

        <div class="form-group register_name" >
            <input id="register_name" type="text" name="_name" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Username*</label>
            <span class="error error_register_name">
        </div>

        <div class="form-group register_fullname">
            <input id="register_fullname" type="text" name="fullname" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Vor und Nachname*</label>
            <span class="error error_register_fullname">
        </div>

        <div class="form-group form-group_radio_register">
            <p class="radiobutton_wrapper radiobutton_first">
                <input type="radio" id="female" name="gender" class="radiobutton" checked/> <label for="female">Frau</label>
            </p>
            <p class="radiobutton_wrapper">
                <input type="radio" id="male" name="gender" class="radiobutton"/> <label for=male>Herr</label>
            </p>
        </div>



        <div class="form-group register_email">
            <input id="register_email" type="text" name="email" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">E-Mailadresse*</label>
            <span class="error error_register_email">
        </div>

        <div class="form-group register_tel">
            <input id="register_tel" type='text' name="tel" value="" required class="input" pattern='[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}'>
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Telefonnummer*</label>
            <span class="error error_register_tel">
        </div>

        <div class="form-group register_password">
            <input id="register_password" type="password" name="password" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Passwort*</label>
            <span class="error error_register_password">
        </div>

        <div class="form-group register_password_wh">
            <input id="register_password_wh" type="password" name="password_wh" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Passwort wiederholen*</label>
            <span class="error error_register_password_wh">
        </div>


        <div class="form-group">
            <input type="date" name="birthday" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Geburtstag*</label>
        </div>

        <div class="form-group register_address">
            <input id="register_address" type="text" name="address" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Adresse*</label>
            <span class="error error_register_address">
        </div>

        <div class="form-group register_zipcode">
            <input id="register_zipcode" type="text" name="zip_code" value="" required class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Postleitzahl*</label>
            <span class="error error_register_address">
        </div>



        <div class="radio_datenschutz">
            <input class="input_dateschutz" type="checkbox" name="agb-confirm" id="agb-confirm" /> <label>Ich stimme den <a href="#">Datenschutzbestimmungen</a> und <a href="#">AGBs</a> zu.*</label>
        </div>


        <p class="pflichtfeld">*Pflichtfelder</p>

        <div class="btn_checkout btn_big-checkout">
            <input type="submit" name="register" value="Registrieren" class="btn_big-checkout input register_submit">
        </div>

    </form>

    </section>

</section>
