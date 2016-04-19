<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 10:59
 */


$admins = get_admins($current_page, $entries_per_page, $order_by, $order_dir);
$total_admins = total_admins();

$total_pages = floor($total_admins / $entries_per_page);

