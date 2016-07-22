<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05/05/16
 * Time: 14:41
 */

/*if(is_logged_in()&& isset ($_SESSION['is_admin'])) {
    redirect_to("backend/index.php");
} else {*/

    if (is_post_request("register")) {
        global $link;

        $email = mysqli_real_escape_string($link, $_POST["email"]);
        $username = mysqli_real_escape_string($link, $_POST["_name"]);
        $fullname = mysqli_real_escape_string($link, $_POST["fullname"]);
        $password = mysqli_real_escape_string($link, $_POST["password"]);
        $password_wh = mysqli_real_escape_string($link, $_POST["password_wh"]);
        $gender = mysqli_real_escape_string($link, $_POST["gender"]);
        $birthday = mysqli_real_escape_string($link, $_POST["birthday"]);
        $address = mysqli_real_escape_string($link, $_POST["address"]);
        $zip = mysqli_real_escape_string($link, $_POST["zip_code"]);

        if($password === $password_wh){

            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users ( _name, fullname,  email, password_hash, gender, birthday, address, zip_code) VALUES ( '$username', '$fullname', '$email', '$password_hash', '$gender', '$birthday', '$address', '$zip')";
            $result = mysqli_query($link, $sql);
            if($result){
                $_SESSION['logged_in'] = true;
                redirect_to("index.php?page=home#about_us", "Erfolgreich eingeloggt!");
            }else{
                $error = 1;
            }

        } else {
            $error = 1;

        }

        if ($error == 1) {
            $errors["pw"] = "Die eingegebenen Passwörter stimmen nicht überein.";
        }
    }
//}
