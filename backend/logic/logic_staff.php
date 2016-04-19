<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 11:06
 */


$staff = get_staff($current_page, $entries_per_page, $order_by, $order_dir);
$total_staff = total_staff();

$total_pages = floor($total_staff / $entries_per_page);
