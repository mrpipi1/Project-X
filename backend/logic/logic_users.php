<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 10:39
 */

$users = get_users($current_page, $entries_per_page, $order_by, $order_dir);
$total_reservations = total_users();

$total_pages = floor($total_reservations / $entries_per_page);

require("views/reservations.php");