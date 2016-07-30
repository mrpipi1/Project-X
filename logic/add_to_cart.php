<?php
include('../db-connect.php');
$user_id = $_POST['user_id'];
$product_id = $_POST['product_id'];

$sql = "INSERT INTO cart (user_id, product_id)" ." VALUES (" .$user_id .",".$product_id." )";
$result = mysqli_query($link, $sql);
if($result) {
    echo $result;
}else{
    echo 0;
}

