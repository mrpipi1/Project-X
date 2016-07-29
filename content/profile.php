<h3 class="profile_main-hl">Hallo <?php echo $_SESSION["user"]["username"]; ?>!</h3>

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
 <h4 class="profile_sub-hl">Deine Infos oda sowas</h4>
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
      <div class="profile_info_value"><?php echo $row['email']; ?></div>
    <?php
    }
    if(isset($row['fullname'])){
    ?>
      <div class="profile_info_label">Name </div>
      <div class="profile_info_value"><?php echo $row['fullname']; ?></div>
    <?php
    }
    if(isset($row['email'])){
    ?>
      <div class="profile_info_label">Adresse </div>
      <div class="profile_info_value"><?php echo $row['address'].', '. $row['zip_code'].' '. $row['city']; ?></div>

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

  <?php
  }
  ?>
  <a href="index.php?page=profile&amp;action=update&amp;id=<?php echo $_GET['user']['user_id'];?>" class="profile_shop_link  profile_info_label">Passwort ändern</a>

</section>



  <!--  -->
