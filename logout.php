<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05/05/16
 * Time: 15:36
 */

require_once("functions/helpers.php");

session_start();
session_destroy();

redirect_to("index.php?page=home#about_us", "Erfolgreich ausgeloggt!");
