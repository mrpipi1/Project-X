<?php

if(isset($_POST['user_mail']) && isset($_POST['subject'])){
  $user_email = $_POST['user_mail'];
  $user_email = 'alexandra.benkoe@gmail.com';
  $subject = 'lotusyoga';
  if(isset($_POST['user_name'])){
    $username = $_POST['user_name'];
  }else{
    $username = "";
  }
  $password = substr( str_shuffle( 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?/§=-+*#' ), 0, 10 );
  if($_POST['subject'] == 'new_password'){
    $message = "Hallo ".$username.",<br />Du hast dein Passwort für <a href=\"local.lotusyoaga.at\">lotusyoga</a> zurückgesetzt. Hier ist dein neues Passwort: ".$password." bitte ändere es so bald wie möglich.<br />Wir wünschen dir viel Spaß bei deinem nächsten Einkauf,<br />Dein lotusyoga Team";
  }
  if($_POST['subject'] != 'Deine Bestellung bei lotusyoga'){
    $subject = $_POST['subject'];
    $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : false;
    $sql = "SELECT email FROM users WHERE id = '".$user_id."'";
    $user_email = mysqli_query($link, $sql);
    $message = "Hallo <?php echo $username ?>! <br/>Vielen Dank für Deine Bestellung bei lotusyoga! Sie wird in Drei bis Fünf Werktagen bei dir ankommen.<br /> Viele Grüße <br/>Dein lotusyoga Team";
  }

  $mail_result = mail( $user_email , $subject , $message );
  echo $mail_result;


}




 ?>
