<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 11:05
 */


$s_icons = get_s_icons($current_page, $entries_per_page, $order_by, $order_dir);
$total_s_icons = total_s_icons();

$total_pages = floor($total_s_icons / $entries_per_page);
