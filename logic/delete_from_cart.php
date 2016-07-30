<?php
include('../db-connect.php');
$cart_id = $_POST['cart_id'];

$sql = "SELECT * FROM cart WHERE id = '". $cart_id ."'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
if($row['deleted_at'] === NULL) {
    $timestamp = time();
    $sql = "UPDATE cart SET deleted_at = " . $timestamp . " WHERE id = '". $cart_id ."'";
    $result = mysqli_query($link, $sql);
    if($result) {
        echo $result;
    }else{
        echo 0;
    }
}

