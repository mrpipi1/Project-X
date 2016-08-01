<?php
include('../db-connect.php');
$coupon_code = $_POST['coupon_code'];



$sql = "SELECT * FROM coupon_codes WHERE code = '".$coupon_code."'";
$res = mysqli_query($link, $sql);
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
          print_r(array('percentage' => $row['percentage_value'], 'flat' => $row['flat_value']));         
    }
}else{
    echo 0;
}  
