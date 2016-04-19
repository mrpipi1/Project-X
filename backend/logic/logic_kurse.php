<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 11:06
 */


$kurse = get_kurse($current_page, $entries_per_page, $order_by, $order_dir);
$total_kurse = total_kurse();

$total_pages = floor($total_kurse / $entries_per_page);
