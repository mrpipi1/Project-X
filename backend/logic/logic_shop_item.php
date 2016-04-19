<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 11:06
 */

$items = get_items($current_page, $entries_per_page, $order_by, $order_dir);
$total_items = total_items();

$total_pages = floor($total_items / $entries_per_page);

