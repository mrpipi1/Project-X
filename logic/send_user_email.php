<?php

if(isset($_POST['user_mail']) && isset($_POST['subject'])){
  $user_email = $_POST['user_mail'];
  $user_email = 'alexandra.benkoe@gmail.com';
  $subject = 'lotusyoga - ';
  if(isset($_POST['user_name'])){
    $username = $_POST['user_name'];
  }else{
    $username = "";
  }
  $password = substr( str_shuffle( 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?/§=-+*#' ), 0, 10 );
  if($_POST['subject'] == 'new_password'){
    $message = "Hallo ".$username.",<br />Du hast dein Passwort für <a href=\"local.lotusyoaga.at\">lotusyoga</a> zurückgesetzt. Hier ist dein neues Passwort: ".$password." bitte ändere es so bald wie möglich.<br />Wir wünschen dir viel Spaß bei deinem nächsten Einkauf,<br />Dein lotusyoga Team";
  }
  $mail_result = mail( $user_email , $subject , $message );
  echo $mail_result;


}



 ?>
