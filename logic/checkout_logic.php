<?php
if(isset($_SESSION['guest_id'])){
  global $link;
  if(isset($GET['page']) && $GET['page'] == 'Adressen'){
    if(is_post_request("reciept_address")){
      $fullname = isset($_POST['name']) ? $_POST['name'] : false;
      $address = isset($_POST['address']) ? $_POST['address'] : false;
      $city = isset($_POST['city']) ? $_POST['city'] : false;
      $zip_code = isset($_POST['zip_code']) ? $_POST['zip_code'] : false;

      if($fullname && $address && $city && $zip_code){
        $sql = "INSERT INTO ";
      }else{
        $error_message = 'Nicht alles ausgefüllt';
      }


    }



  }








}elseif(isset($_SESSION['user']['user_id'])){






}



 ?>
