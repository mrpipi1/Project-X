<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 09:51
 */

// user

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

function total_users() {
    global $link;

    $sql = "SELECT COUNT(*) as total_count FROM users WHERE deleted_at IS NULL";
    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($result)["total_count"];
}




function update_user($id, $username, $email, $gender) {
    global $link;

    // sql update
    $sql = "UPDATE users SET username = '$username', email = '$email', gender = '$gender' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}

function delete_user($id) {
    global $link;
    $sql = "UPDATE users SET is_active = 0 WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}


// admin

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


//shop categories

function total_categories() {
    global $link;

    $sql = "SELECT COUNT(*) as total_count FROM shop_category WHERE deleted_at IS NULL";
    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($result)["total_count"];
}

function get_categories($current_page, $entries_per_page, $order_by, $order_dir) {
    global $link;       //limit ??

    $limit_start = $current_page * $entries_per_page - $entries_per_page;
    $sql = "SELECT * FROM shop_category ORDER BY $order_by $order_dir";
    $result = mysqli_query($link, $sql);

    if(!$result) {
        echo mysqli_error($link);
    }
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}

function update_categorie($id, $category_name, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE shop_category SET category_name = '$category_name', is_active = '$is_active' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}

function delete_category($id) {
    global $link;
    $sql = "UPDATE shop_category SET is_active = 0 WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}

// shop items

function total_items() {
    global $link;

    $sql = "SELECT COUNT(*) as total_count FROM shop_item WHERE deleted_at IS NULL";
    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($result)["total_count"];
}

function get_items($current_page, $entries_per_page, $order_by, $order_dir) {
    global $link;       //limit ??

    $limit_start = $current_page * $entries_per_page - $entries_per_page;
    $sql = "SELECT * FROM shop_item ORDER BY $order_by $order_dir";
    $result = mysqli_query($link, $sql);

    if(!$result) {
        echo mysqli_error($link);
    }
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $items;
}

function update_item($id, $product_name, $price, $category_id, $description, $pic, $thumbnail_1, $thumbnail_2, $thumbnail_3, $size, $in_aktion, $price_in_aktion, $stock, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE shop_item SET product_name = '$product_name', price = '$price', category_id = '$category_id', description = '$description', pic = '$pic', thumbnail_1 = '$thumbnail_1', thumbnail_2 = '$thumbnail_2', thumbnail_3 = '$thumbnail_3', size = '$size', in_action = '$in_aktion', price_in_action = '$price_in_aktion', stock = '$stock', is_active = '$is_active' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}

function delete_item($id) {
    global $link;
    $sql = "UPDATE shop_item SET is_active = 0 WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}


// kurse

function total_kurse() {
    global $link;

    $sql = "SELECT COUNT(*) as total_count FROM kurse WHERE deleted_at IS NULL";
    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($result)["total_count"];
}

function get_kurse($current_page, $entries_per_page, $order_by, $order_dir) {
    global $link;       //limit ??

    $limit_start = $current_page * $entries_per_page - $entries_per_page;
    $sql = "SELECT * FROM kurse ORDER BY $order_by $order_dir";
    $result = mysqli_query($link, $sql);

    if(!$result) {
        echo mysqli_error($link);
    }
    $kurse = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $kurse;
}

function update_kurs($id, $kursname, $beschreibung, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE kurse SET kursname = '$kursname', beschreibung = '$beschreibung' is_active = '$is_active' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}

function delete_kurs($id) {
    global $link;
    $sql = "UPDATE kurse SET is_active = 0 WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}


// Mitarbeiter

function total_staff() {
    global $link;

    $sql = "SELECT COUNT(*) as total_count FROM mitarbeiter WHERE deleted_at IS NULL";
    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($result)["total_count"];
}

function get_staff($current_page, $entries_per_page, $order_by, $order_dir) {
    global $link;       //limit ??

    $limit_start = $current_page * $entries_per_page - $entries_per_page;
    $sql = "SELECT * FROM mitarbeiter ORDER BY $order_by $order_dir";
    $result = mysqli_query($link, $sql);

    if(!$result) {
        echo mysqli_error($link);
    }
    $kurse = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $kurse;
}

function update_guy($id, $fullname, $email, $telno, $pic, $kurse_id, $description, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE maitarbeiter SET fullname = '$fullname', email = '$email', telno ='$telno', pic = '$pic', kurse_id = '$kurse_id', description = '$description', is_active = '$is_active' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}

function delete_guy($id) {
    global $link;
    $sql = "UPDATE mitarbeiter SET is_active = 0 WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}



// Bestellungen

function total_orders() {
    global $link;

    $sql = "SELECT COUNT(*) as total_count FROM bestellungen WHERE deleted_at IS NULL";
    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($result)["total_count"];
}

function get_orders($current_page, $entries_per_page, $order_by, $order_dir) {
    global $link;       //limit ??

    $limit_start = $current_page * $entries_per_page - $entries_per_page;
    $sql = "SELECT * FROM bestellungen ORDER BY $order_by $order_dir";
    $result = mysqli_query($link, $sql);

    if(!$result) {
        echo mysqli_error($link);
    }
    $kurse = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $kurse;
}

function update_order($id, $bestellnummer, $user_id, $created_at, $gutscheincode, $zahlungsart, $versandart, $lieferadresse, $rechnungsadesse, $price, $bestellstatus) {
    global $link;

    // sql update
    $sql = "UPDATE bestellungen SET bestellnummer = '$bestellnummer', user_id = '$user_id', created_at ='$created_at', gutscheincode = '$gutscheincode', zahlungsart = '$zahlungsart', versandart = '$versandart', lieferadresse = '$lieferadresse', rechnungsadresse = '$rechnungsadesse', price = '$price', bestellstatus = '$bestellstatus' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}

function delete_order($id) {
    global $link;
    $sql = "UPDATE bestellungen SET is_active = 0 WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}


// socialmedia

function get_s_icons($current_page, $entries_per_page, $order_by, $order_dir) {
    global $link;       //limit ??

    $limit_start = $current_page * $entries_per_page - $entries_per_page;
    $sql = "SELECT * FROM socialmedia WHERE deleted_at IS NULL ORDER BY $order_by $order_dir";
    $result = mysqli_query($link, $sql);

    if(!$result) {
        echo mysqli_error($link);
    }
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $users;
}

function total_s_icons() {
    global $link;

    $sql = "SELECT COUNT(*) as total_count FROM socialmedia WHERE deleted_at IS NULL";
    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($result)["total_count"];
}

function update_s_icon($id, $icon_name, $s_pic, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE socialmedia SET icon_name = '$icon_name', pic = '$s_pic', is_active = '$is_active' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}

function delete_s_icon($id) {
    global $link;
    $sql = "UPDATE socialmedia SET is_active = 0 WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}


// content

function get_contents($current_page, $entries_per_page, $order_by, $order_dir) {
    global $link;       //limit ??

    $limit_start = $current_page * $entries_per_page - $entries_per_page;
    $sql = "SELECT * FROM content WHERE deleted_at IS NULL ORDER BY $order_by $order_dir";
    $result = mysqli_query($link, $sql);

    if(!$result) {
        echo mysqli_error($link);
    }
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $users;
}

function total_contents() {
    global $link;

    $sql = "SELECT COUNT(*) as total_count FROM content WHERE deleted_at IS NULL";
    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($result)["total_count"];
}




function update_content($id, $headline, $text, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE content SET headline = '$headline', text = '$text', is_active = '$is_active' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}

function delete_content($id) {
    global $link;
    $sql = "UPDATE content SET is_active = 0 WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
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