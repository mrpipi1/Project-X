<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05/05/16
 * Time: 14:36
 */


function is_logged_in() {
    return (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true);
}

