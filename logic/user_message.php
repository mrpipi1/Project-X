<?php

global $link;


/*if(is_logged_in() && !isset ($_SESSION['is_admin'])){
    redirect_to("index.php");
}elseif(is_logged_in() && isset ($_SESSION['is_admin'])){
    redirect_to("backend/index.php");
}else {*/
    if(is_post_request("user_message")) {
        $error = 0;
        $name = mysqli_real_escape_string($link, $_POST["fullname"]);
        $tel = mysqli_real_escape_string($link, $_POST["tel"]);
        $email = mysqli_real_escape_string($link, $_POST["email"]);
        $comment = mysqli_real_escape_string($link, $_POST["comment"]);
        $sql = "INSERT INTO user_messages ( fullname, telno,  email, comment) VALUES ( '$name', '$tel', '$email', '$comment')";
        $result = mysqli_query($link, $sql);
        if($result){
            //echo "Nachricht erfolgreich gesendet! Danke dass Sie uns kontaktiert haben";
        }

        if($error == 1) {
            $errors["auth"] = "Die eingegebene Email-Passwort-Kombination stimmt nicht überein.";

        }
        if($error == 2) {
            $errors["user"] = "Der eingegebene User ist inaktiv.";
        }
    }

//}
