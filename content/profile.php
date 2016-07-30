<section class=" wrapper_profile">
<h3 class="profile_main-hl ">Hallo <?php echo $_SESSION["user"]["username"];?>!</h3>

<section class="profile_section">
<h4 class="profile_sub-hl">Deine letzten Bestellungen</h4>
<?php
if(mysqli_num_rows($orders) > 0){
  while( $row = mysqli_fetch_assoc($orders) ){ ?>
  <p>
  <?php echo $row['email']; ?>
  </p>
  <?php
  }
}else{
?>
<p>Du hast noch keine Bestellung abgeschlossen. <a href="index.php?page=Shop" class="profile_shop_link">Hier gehts zum Shop!</a></p>
<?php
}
?>
</section>

<section class="profile_section">
 <h4 class="profile_sub-hl">Deine Daten</h4>
 <i class="fa fa-pencil pencil_frontend" aria-hidden="true"></i><br />
 <div class="profile_error_message_user">Deine Daten konnten nicht aktualisiert werden, bitte versuche es später noch einmal.</div>
 <div class="profile_success_message_user">Deine Daten wurden erfolgreich aktualisiert.</div>
 <div class="user_info_wrapper">
 <?php
  while( $row = mysqli_fetch_assoc($user_info) ){
    if(isset($row['_name'])){
 ?>
      <div class="profile_info_label">Username </div>
      <div class="profile_info_value"><?php echo $row['_name']; ?></div>
<?php
    }
    if(isset($row['email'])){
    ?>
      <div class="profile_info_label">Email </div>
      <div class="profile_info_value profile_info_value_email"><?php echo $row['email']; ?></div>
    <?php
    }
    if(isset($row['fullname'])){
    ?>
      <div class="profile_info_label">Name </div>
      <div class="profile_info_value"><?php echo $row['fullname']; ?></div>
    <?php
    }
    if(isset($row['address'])){
    ?>
      <div class="profile_info_label">Adresse </div>
      <div class="profile_info_value"><?php if($row['address']){ echo $row['address'];}?>, <?php if($row['zip_code']){ echo $row['zip_code'];} ?>  <?php if($row['city']){ echo $row['city'];} ?></div>

    <?php
    }
    if(isset($row['birthday'])){
    ?>
      <div class="profile_info_label">Geburtstag </div>
      <div class="profile_info_value"><?php echo $row['birthday']; ?></div>
    <?php
    }
    ?>
      <div class="profile_info_label">Bevorzugte Versandart </div>
      <?php
      if(isset($row['prev_delivery'])){
      ?>
        <div class="profile_info_value"><?php echo $row['prev_delivery']; ?></div>
      <?php
      }else{
      ?>
        <div class="profile_info_value"> keine</div>
      <?php
      }
      ?>
      <div class="profile_info_label">Bevorzugte Bezahlungsart </div>
      <?php
      if(isset($row['prev_payment'])){
      ?>
        <div class="profile_info_value"><?php echo $row['prev_payment']; ?></div>
      <?php
      }else{
      ?>
        <div class="profile_info_value"> keine</div>
      <?php
      }
      ?>


</div>
  <div class="user_info_change_wrapper">
    <form class="form_profile" action="#" method="post">
      <div class="form_profile_innerwrapper">
        <div class="form-group">
            <input type="text" name="_name" value="<?php if(isset($row['_name'])){echo $row['_name'];}  ?>" class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Username</label>
        </div>

        <div class="form-group">
            <input type="text" name="email" value="<?php if(isset($row['email'])){echo $row['email'];}  ?>" class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Email</label>
        </div>

        <div class="form-group">
            <input type="text" name="fullname" value="<?php if(isset($row['fullname'])){echo $row['fullname'];}  ?>" class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Name</label>
        </div>

        <div class="form-group">
            <input type="text" name="address" value="<?php if(isset($row['address'])){echo $row['address'];}  ?>" class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Adresse</label>
        </div>
        <div class="form-group">
            <input type="text" name="zip_code" value="<?php if(isset($row['zip_code'])){echo $row['zip_code'];}  ?>" class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Postleitzahl</label>
        </div>
        <div class="form-group">
            <input type="text" name="city" value="<?php if(isset($row['city'])){echo $row['city'];}  ?>" class="input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label">Stadt</label>
        </div>

      </div>
      <div class="form_profile_innerwrapper">

        <div class="form-group">
            <input type="date" name="birthday" value="<?php if(isset($row['birthday'])){echo $row['birthday'];}  ?>" class="input geb-input">
            <span class="highlight"></span>
            <span class="form-bar"></span>
            <label class="label geb-label">Geburtstag*</label>
        </div>

        <div class="form-group">
          <p class="radiobutton_hl">bevorugte Versandart</p>
          <p class="radiobutton_wrapper">
              <input type="radio" id="post" name="shipping-type" class="radiobutton" <?php if(isset($row['prev_delivery']) && strtolower($row['prev_delivery']) == 'post'){echo 'checked';} ?>/> <label for="post">Post</label>
          </p>
          <p class="radiobutton_wrapper">
              <input type="radio" id="DHL" name="shipping-type" class="radiobutton" <?php if(isset($row['prev_delivery']) && strtolower($row['prev_delivery']) == 'dhl'){echo 'checked';} ?>/> <label for=DHL>DHL</label>
          </p>
          <p class="radiobutton_wrapper">
              <input type="radio" id="express" name="shipping-type" class="radiobutton" <?php if(isset($row['prev_delivery']) && strtolower($row['prev_delivery']) == 'express'){echo 'checked';} ?>/> <label for="express">Expreeversand</label>
          </p>
        </div>

        <div class="form-group">
          <p class="radiobutton_hl radiobutton_hl_payment">bevorugte Zahlungsart</p>
          <p class="radiobutton_wrapper">
              <input type="radio" id="vorkasse" name="payment-type" class="radiobutton" <?php if(isset($row['prev_payment']) && strtolower($row['prev_delivery']) == 'vorkasse'){echo 'checked';} ?>/> <label for="vorkasse">Vorkasse</label>
          </p>
          <p class="radiobutton_wrapper">
              <input type="radio" id="rechnung" name="payment-type" class="radiobutton" <?php if(isset($row['prev_payment']) && strtolower($row['prev_delivery']) == 'rechnung'){echo 'checked';} ?>/> <label for="rechnung">Rechnung</label>
          </p>
          <p class="radiobutton_wrapper">
              <input type="radio" id="nachname" name="payment-type" class="radiobutton" <?php if(isset($row['prev_payment']) && strtolower($row['prev_delivery']) == 'nachname'){echo 'checked';} ?>/> <label for="nachname">Nachname</label>
          </p>
        </div>

      </div>

      <div class="profile_form_button_wrapper">
        <div class=" btn_big-checkout_profile">
            <div id ="<?php echo $_SESSION['user']['user_id']; ?>" class="profile_update_btn">Aktualisieren</div>
        </div>
      </div>
    </form>


    <?php
    }
    ?>
</section>
  </div>
  <div class="profile_shop_link_wrapper">
    <div class="email_was_send">Du wirst in kürze eine Email mit deinem neuen Passwort erhalten, solltest du keine Email erhalten kontaktiere uns unter <a href="mailto:office@lotusyoga.at?subject=Password-reset" class="profile-email">office@lotusyoga.at</a></div>
    <div class="profile_error_message_password">Die Email konnte nicht gesendet weden, bitte kontaktiere uns unter <a href="mailto:office@lotusyoga.at?subject=Password-reset" class="profile-email">office@lotusyoga.at</a> oder <a href="tel:0155555555">01 555 555 55</a></div>
    <div class="profile_shop_link  profile_info_label">Passwort zurücksetzen</div>
    <div class="send_password_message">Passwort wirklich zurücksetzen? <br /><div class="confirm">Ja, neues Passwort zuschicken.</div><br /><div  class="deny"<div>Abbrechen</div>
  </div>
</section>
 </section>


  <!--  -->
