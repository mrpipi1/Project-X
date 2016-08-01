<?php
include('../db-connect.php');
$product_id = $_POST['product_id'];
$cart_id = $_POST['cart_id'];
$size = strtolower($_POST['size']);
$quantity = $_POST['quantity'];
$sql = "SELECT * FROM stocks WHERE product_id = ".$product_id." AND size = '". $size ."'";
$res = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($res)) {
    if($row['stock'] >= $quantity){
        $sql = "UPDATE carts SET quantity = '" .$quantity . "', product_size = '" .$size . "' WHERE id = '".$cart_id. "'";
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
