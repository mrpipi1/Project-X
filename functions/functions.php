<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 09:51
 */

function get_users($current_page, $entries_per_page, $order_by, $order_dir) {
    global $link;       //limit ??

    $limit_start = $current_page * $entries_per_page - $entries_per_page;
    $sql = "SELECT * FROM users WHERE deleted_at IS NULL ORDER BY $order_by $order_dir";
    $result = mysqli_query($link, $sql);

    if(!$result) {
        echo mysqli_error($link);
    }
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $users;
}

function get_admins($current_page, $entries_per_page, $order_by, $order_dir) {
    global $link;

    $limit_start = $current_page * $entries_per_page - $entries_per_page;
    $sql = "SELECT * FROM admin WHERE deleted_at IS NULL ORDER BY $order_by $order_dir";
    $result = mysqli_query($link, $sql);

    if(!$result) {
        echo mysqli_error($link);
    }
    $admins = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $admins;
}


function update_user($id, $username, $email, $gender) {
    global $link;

    // sql update
    $sql = "UPDATE users SET username = '$username', email = '$email', gender = $gender WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}

function delete_user($id) {
    global $link;
    $sql = "UPDATE users SET is_active = 0 WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}

function total_admins() {
    global $link;

    $sql = "SELECT COUNT(*) as total_count FROM admin WHERE deleted_at IS NULL";
    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($result)["total_count"];
}


function update_admin($id, $admin_name, $admin_email, $password_hash, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE users SET admin_name = '$admin_name', admin_email = '$admin_email', password_hash = $password_hash, is_active = $is_active WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}

function delete_admin($id) {
    global $link;
    $sql = "UPDATE admin SET is_active = 0 WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}

function total_users() {
    global $link;

    $sql = "SELECT COUNT(*) as total_count FROM users WHERE deleted_at IS NULL";
    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($result)["total_count"];
}





function pagination_backend($site, $current_page, $total_pages) {
    $start = max($current_page-2, 1);
    $end = min($current_page+2, $total_pages);

    if($total_pages > 0) {
        if($current_page != 1) {
            include("views/pagination/pagination_first_link.php");
        }

        for ($i=$start; $i <= $end; $i++) {
            include("views/pagination/pagination_link.php");
        }


        if($current_page != $total_pages) {
            include("views/pagination/pagination_last_link.php");
        }
    }

}

function sort_table($site, $column, $anchor) {
    $order_dir = isset($_GET["order_dir"]) && $_GET["order_dir"] == "asc" ? "desc" : "asc";
    $output = <<<HEREDOC
<a href="?site=$site&order_by=$column&order_dir=$order_dir">$anchor</a>
HEREDOC;

    return $output;
}