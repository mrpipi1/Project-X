<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 11:00
 */


$contents = get_contents($current_page, $entries_per_page, $order_by, $order_dir);
$total_contents = total_contents();

$total_pages = floor($total_contents / $entries_per_page);
