<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 15:17
 */

$categories = get_categories($current_page, $entries_per_page, $order_by, $order_dir);
$total_categories = total_categories();

$total_pages = floor($total_categories / $entries_per_page);
