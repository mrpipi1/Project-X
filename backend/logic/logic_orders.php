<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 11:08
 */

$orders = get_orders($current_page, $entries_per_page, $order_by, $order_dir);
$total_orders = total_orders();

$total_pages = floor($total_orders / $entries_per_page);

