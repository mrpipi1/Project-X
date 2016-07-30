<?php

global $link;


/*if(is_logged_in() && !isset ($_SESSION['is_admin'])){
    redirect_to("index.php");
}elseif(is_logged_in() && isset ($_SESSION['is_admin'])){
    redirect_to("backend/index.php");
}else {*/
    if(is_post_request("login")) {
        $error = 0;
        $email = mysqli_real_escape_string($link, $_POST["_name"]);
        $password = mysqli_real_escape_string($link, $_POST["password"]);
        $sql = "SELECT id, _name, password_hash, email, is_active FROM users WHERE email = '$email' OR _name = '$email'";
        $result = mysqli_query($link, $sql);
        if(mysqli_num_rows($result) === 1) {

            $user = mysqli_fetch_assoc($result);
            $pw = $user['password_hash'];
            $is_active =  $user['is_active'];
            if($is_active == 1) {
                if (password_verify($password, $pw)) {

                    $_SESSION['logged_in'] = true;
                    $_SESSION['user'] = array('username' => $user["_name"], 'user_id' => $user["id"]);
                    redirect_to("index.php?page=home#about_us", "Erfolgreich eingeloggt!");
                    session_write_close();

                } else {
                    $error = 1;
                }
            }else{
                $error =2;
            }
        } else {
            $sql2 = "SELECT id, admin_name, admin_email, password_hash, is_active FROM admins WHERE admin_email = '$email' OR admin_name = '$email'";
            $result = mysqli_query($link, $sql2);
            if(mysqli_num_rows($result) === 1) {
                $user = mysqli_fetch_assoc($result);
                $pw = $user['password_hash'];
                $is_active =  $user['is_active'];
                if($is_active == 1) {
                    if (password_verify($password, $pw)) {
                        $_SESSION['is_admin'] = true;
                        $_SESSION['logged_in'] = true;
                        $_SESSION['user'] = array('username' => $user["admin_name"], 'user_id' => $user["id"]);
                        redirect_to("http://localhost/lotusyoga/backend/index.php", "Erfolgreich eingeloggt!");
                        session_write_close();
                    }
                }
            } else {
                $error = 1;

            }
        }

        if($error == 1) {
            $errors["auth"] = "Die eingegebene Email-Passwort-Kombination stimmt nicht überein.";

        }
        if($error == 2) {
            $errors["user"] = "Der eingegebene User ist inaktiv.";
        }
    }

//}
