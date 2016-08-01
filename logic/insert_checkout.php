<?php
include('../db-connect.php');
if(isset($_POST['id'])){
    $id = $_POST['id'];
}
$billing = $_POST['billing'];
$shipping = $_POST['shipping'];
if($shipping['is_shipping_address'] == 'on'){
    $shipping['address'] = $billing['address'];
    $shipping['city'] = $billing['city'];
    $shipping['zip_code'] = $billing['zip_code'];
}
if(isset($billing['user_id'])){
    $user_id = $billing['user_id'];
    $guest_id = NULL;
}else{
    $user_id = NULL;
    $guest_id = $billing['guest_id'];
}


$action = $_POST['action'];

if($action == 'new'){
    $sql = "INSERT INTO orders (user_id, guest_id, delivery_address, receipt_address )  VALUES ('" .$user_id . "','" .$guest_id . "','".$billing['address'].",".$billing['zip_code'].",".$billing['city']."','".$shipping['address'].",".$shipping['zip_code'].",".$shipping['city']."' )";
    $result = mysqli_query($link, $sql);
    if($result) {
        echo $result;
    }else{
        echo 0;
    }
}else{
    $sql = "UPDATE orders SET user_id = '" .$user_id . "', guest_id = '" .$guest_id . "', delivery_address = '".$billing['address'].",".$billing['zip_code'].",".$billing['city']."', receipt_address = '".$shipping['address'].",".$shipping['zip_code'].",".$shipping['city']."' WHERE id = '".$cart_id. "'";
    $result2 = mysqli_query($link, $sql2);
    if($result2) {
        echo $result2;
    }else{
        echo 0;
    }
}