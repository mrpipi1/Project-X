<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 22/03/16
 * Time: 20:15
 */

$link = mysqli_connect("localhost", "root", "", "LotusYoga");

if (!$link) {
    die('Verbindungsfehler: (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}


mysqli_set_charset($link, 'utf8');

?>