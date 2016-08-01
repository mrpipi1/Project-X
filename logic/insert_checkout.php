<?php
include('../db-connect.php');
if($_POST['step'] == 'address') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }
    $billing = $_POST['billing'];
    $shipping = $_POST['shipping'];
    if ($shipping['is_shipping_address'] == 'on') {
        $shipping['address'] = $billing['address'];
        $shipping['city'] = $billing['city'];
        $shipping['zip_code'] = $billing['zip_code'];
    }
    if (isset($billing['user_id'])) {
        $user_id = $billing['user_id'];
        $guest_id = NULL;
    } else {
        $user_id = NULL;
        $guest_id = $billing['guest_id'];
    }


    $action = $_POST['action'];

    if ($action == 'new') {
        $sql = "INSERT INTO orders (user_id, guest_id, delivery_address, receipt_address, is_active )  VALUES ('" . $user_id . "','" . $guest_id . "','" . $billing['address'] . "," . $billing['zip_code'] . "," . $billing['city'] . "','" . $shipping['address'] . "," . $shipping['zip_code'] . "," . $shipping['city'] . "','1' )";
        $result = mysqli_query($link, $sql);
        if ($result) {
            $sql2 = "SELECT * FROM orders WHERE (user_id = '" . $user_id . "' OR guest_id = '" . $guest_id . "') AND is_active = '1' AND deleted_at IS NULL LIMIT 1";
            $result2 = mysqli_query($link, $sql2);
            if ($result2) {
                while ($row = mysqli_fetch_assoc($result2)) {
                    $sql3 = "UPDATE carts SET order_id = '" . $row['id'] . "' WHERE deleted_at IS NULL AND is_active = '1' AND (user_id = '" . $user_id . "' OR guest_id = '" . $guest_id . "')";
                    $result3 = mysqli_query($link, $sql3);
                    if ($result3) {
                        echo $row['id'];
                    } else {
                        echo 0;
                    }
                }
            } else {
                echo 0;
            }
        } else {
            echo 0;
        }

    }
    /*else {
        $sql = "UPDATE orders SET user_id = '" . $user_id . "', guest_id = '" . $guest_id . "', delivery_address = '" . $billing['address'] . "," . $billing['zip_code'] . "," . $billing['city'] . "', receipt_address = '" . $shipping['address'] . "," . $shipping['zip_code'] . "," . $shipping['city'] . "' WHERE id = '" . $cart_id . "'";
        $result2 = mysqli_query($link, $sql2);
        if ($result2) {
            echo $result2;
        } else {
            echo 0;
        }
    }*/
}else if($_POST['step'] == 'payment_shipping') {

    if(isset($_POST['coupon'])){
        $coupon_code = $_POST['coupon'];
    }else{
        $coupon_id = NULL;
    }
    if(isset($_POST['user_id'])){
        $user_id = $_POST['user_id'];
    }else{
        $user_id = "";
    }
    if(isset($_POST['guest_id'])){
        $guest_id = $_POST['guest_id'];
    }else{
        $guest_id = "";
    }




    $delivery = $_POST['delivery'];
    $payment = $_POST['payment'];
    $sql = "SELECT * FROM delivery_options WHERE _name LIKE '%" . ucfirst($delivery). "%'";
    $result = mysqli_query($link, $sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)) {
            $delivery_id = $row['id'];
            $sql2 = "SELECT * FROM payment_options WHERE _name LIKE '%" . ucfirst($payment) . "%'";
            $result2 = mysqli_query($link, $sql2);
            if ($result2) {
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    $payment_id = $row2['id'];
                        $sql5 = "SELECT * FROM orders WHERE (user_id = '" . $user_id . "' OR guest_id = '" . $guest_id . "') AND is_active = '1' AND deleted_at IS NULL";
                        $result5 = mysqli_query($link, $sql5);
                        if ($result5) {
                            while ($row5 = mysqli_fetch_assoc($result5)) {
                                $order_id = $row5['id'];
                                if (isset($_POST['coupon'])) {
                                    $sql3 = "SELECT * FROM coupon_codes WHERE _name = '" . $coupon_code . "'";
                                    $result3 = mysqli_query($link, $sql3);
                                    if (mysqli_num_rows($result3) > 0) {
                                        while ($row3 = mysqli_fetch_assoc($result3)) {
                                            $coupon_id = $row3['id'];
                                        }
                                    } else {
                                        $coupon_id = NULL;
                                    }
                                }
                                $sql4 = "UPDATE orders SET payment_option_id = '" . $payment_id . "', delivery_option_id = '" . $delivery_id . "', coupon_code_id = '" . $coupon_id . "' WHERE id = '" . $order_id . "'";
                                $result4 = mysqli_query($link, $sql4);
                                if ($result4) {
                                    echo $result4;
                                } else {
                                    echo 0;
                                }
                            }
                        }

                    }
                }else {
                    echo 0;
                }


        }
    }



}