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
                        <span class="error">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" value="" required class="input input_anmelden_pw">
                        <span class="highlight"></span>
                        <span class="form-bar"></span>
                        <label class="label">Passwort*</label>
                        <span class="error">
                    </div>

                    <div class="btn_checkout btn_big-checkout">
                        <input type="submit" name="login" value="Anmelden"   class="btn_big-checkout input checkout_login_submit">
                    </div>
                </form>

                <div class="form_checkout_text-link">
                  <div><h4 class="form_checkout-sectionsheadline">Noch kein Kunde?</h4>
                       <a href="index.php?page=Registrieren" class="form_checkout_link">Jetzt registrieren!</a>
                  </div>
                    <div class="profile_shop_link_wrapper profile_shop_link_wrapper_login">
                      <!-- hidden user info messages -->
                      <div class="email_was_send">Du wirst in kürze eine Email mit deinem neuen Passwort erhalten, solltest du keine Email erhalten kontaktiere uns unter <a href="mailto:office@lotusyoga.at?subject=Password-reset" class="profile-email">office@lotusyoga.at</a></div>
                      <div class="profile_error_message_password">Die Email konnte nicht gesendet weden, bitte kontaktiere uns unter <a href="mailto:office@lotusyoga.at?subject=Password-reset" class="profile-email">office@lotusyoga.at</a> oder <a href="tel:0155555555">01 555 555 55</a></div>
                      <!-- password reset + confirmation -->
                      <div class="profile_shop_link  profile_info_label">Passwort vergessen?</div>
                      <div class="send_password_message">Passwort zurücksetzen? <br /><div class="confirm">Ja, neues Passwort zuschicken.</div><br /><div  class="deny"<div>Abbrechen</div>
                    </div>

                </div>

            </section>


        <h2 class="hl_checkout">oder</h2>


            <section class="wrapper_form_login">

                <h2 class="hl_checkout">als Gast fortfahren</h2>

                <form class="form_checkout" action="#" method="post">

                    <div class="form-group form-group_alsGast">
                        <input type="text" name="login_guest" value="" required class="input input_anmelden_guest">
                        <span class="highlight"></span>
                        <span class="form-bar"></span>
                        <label class="label">E-Mailadresse*</label>
                        <span class="error">
                    </div>

                    <div class="btn_checkout btn_big-checkout ">
                        <input type="submit" name="gast" value="als Gast fortfahren"  class="btn_big-checkout input checkout_guest_submit">
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
