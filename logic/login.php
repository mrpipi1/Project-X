<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17/04/16
 * Time: 14:49
 */

$uname = $_POST['login']['uname'];

$sql = "SELECT * FROM admin WHERE admin_name = '$uname'";

$result = mysqli_query($link, $result);
mysqli_fetch_all( $result,MYSQLI_ASSOC);



