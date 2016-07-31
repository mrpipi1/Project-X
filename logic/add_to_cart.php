<?php
include('../db-connect.php');
if(isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
}else{
    $user_id = NULL;
}
if(isset($_POST['guest_id'])) {
    $guest_id = $_POST['guest_id'];
}else{
    $guest_id = NULL;
}
$guest_id = $_POST['guest_id'];
$product_id = $_POST['product_id'];
$size = strtolower($_POST['size']);
$quantity = $_POST['quantity'];
$sql = "SELECT * FROM stock WHERE product_id = ".$product_id." AND size = '". $size ."'";
$res = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($res)) {
    if($row['stock'] >= $quantity){
        $sql = "INSERT INTO carts (user_id, guest_id, product_id, quantity, product_size )  VALUES ('" .$user_id . "','" .$guest_id . "','".$product_id."','".$quantity."','".$size."' )";
            $result = mysqli_query($link, $sql);
            if($result) {
                echo $result;
            }else{
                echo 0;
            }
    }else{
        echo 2;
    }
}


