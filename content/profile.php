<h3 class="profile_main-hl">Hallo <?php echo $_SESSION["user"]["username"]; ?>!</h3>

<h4 class="profile_sub-hl">Deine letzten Bestellungen</h4>
<?php
$user_id = $_SESSION["user"]["user_id"];
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


 <h4 class="profile_sub-hl">Deine Infos oda sowas</h4>
 <?php
  while( $row = mysqli_fetch_assoc($user_info) ){
  ?>
 <p>
 <?php echo $row['email']; ?>
 </p>
 <?php
 }
  ?>
