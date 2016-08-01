<?php
  global $link;
  $guest_id = isset($_SESSION['guest_id']) ? $_SESSION['guest_id'] : NULL;
  $user_id = isset($_SESSION['user']['user_id']) ? $_SESSION['user']['user_id'] : NULL;
  $id_equals = isset($_SESSION['guest_id']) ? "guest_id = '".$_SESSION['guest_id']."'" : (isset($_SESSION['user']['user_id']) ?  "user_id = '".$_SESSION['user']['user_id']."'" : NULL);

if(isset($_POST['action']) && $_POST['action'] == 'add_cart'){
  $result = '';
  if($guest_id != NULL){
    $sql = "INSERT INTO orders (guest_id) VALUES ('$guest_id')";
    $result = mysqli_query($link, $sql);
    echo $result;
  }elseif($user_id != NULL){
    $sql = "INSERT INTO orders (user_id) VALUES ('$user_id')";
    $result = mysqli_query($link, $sql);
    echo $result;
  }

}

  if(isset($GET['page']) && $GET['page'] == 'Adressen'){
    if(is_post_request("reciept_address")){
      $fullname = (isset($_SESSION['guest_id']) &&isset($_POST['name'])) ? $_POST['name'] : NULL;
      $address = isset($_POST['address']) ? $_POST['address'] : false;
      $city = isset($_POST['city']) ? $_POST['city'] : false;
      $zip_code = isset($_POST['zip_code']) ? $_POST['zip_code'] : false;
      $reciept_address = $address." ".$zip_code." ".$zip_code;
      if($address && $city && $zip_code){
        $test_sql = "SELECT * FROM orders WHERE ".$id_equals;
        if(mysqli_num_rows($test_sql) > 0){
          $sql = "UPDATE orders SET guest_name = '".$fullname."', reciept_address = '".$reciept_address."' '".$user_id."', '".$guest_id."',  ) WHERE ".$id_equals;
        }else{
          $sql = "INSERT INTO orders(user_id, guest_id, guest_name, reciept_address ) VALUES ('".$user_id."', '".$guest_id."', '".$fullname."', '".$reciept_address."')";
        }
      }else{
        $error_message = 'Nicht alles ausgefüllt';
      }
    }
    if(is_post_request("delivery_address")){
      $delivery_fullname = (isset($_SESSION['guest_id']) &&isset($_POST['name'])) ? $_POST['name'] : NULL;
      $address = isset($_POST['address']) ? $_POST['address'] : false;
      $city = isset($_POST['city']) ? $_POST['city'] : false;
      $zip_code = isset($_POST['zip_code']) ? $_POST['zip_code'] : false;
      $delivery_address = $address." ".$zip_code." ".$zip_code;
      if($address && $city && $zip_code){
        $sql = "UPDATE orders SET guest_name = '".$delivery_fullname."', delivery_address = '".$delivery_address."' '".$user_id."', '".$guest_id."',  ) WHERE ".$id_equals;
      }else{
        // delivery address same as reciept address
      }
    }


  }













 ?>
