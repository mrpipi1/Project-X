<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 09:51
 */

// allg. table functions

function table_logic($table_name, $current_page, $entries_per_page, $order_by, $order_dir){

    $contents = get_contents($table_name, $current_page, $entries_per_page, $order_by, $order_dir);
    $total_contents = total_contents($table_name);
    $total_pages = floor($total_contents / $entries_per_page);

    $return = ['contents' => $contents, 'total_contents' => $total_contents, 'total_pages' => $total_pages];


    if(isset($_GET['action'])){
        if($_GET['action'] == 'delete' ){
            $id = (int)$_GET["id"];
            $deleted = delete_content($table_name, $id);
            $return['deleted'] =  $deleted;
        }
    }

    return $return;
}

function get_contents($table_name, $current_page, $entries_per_page, $order_by, $order_dir) {
    global $link;       //limit ??

    $table_name = mysqli_real_escape_string($link, $table_name );
    $limit_start = $current_page * $entries_per_page - $entries_per_page;
    $sql = "SELECT * FROM " .$table_name ." WHERE deleted_at IS NULL ORDER BY " .$order_by ." " .$order_dir ." LIMIT " .$limit_start .", " .$entries_per_page;
    $result = mysqli_query($link, $sql);

    if(!$result) {
        echo mysqli_error($link);
    }
    $contents = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $contents;
}

function total_contents($table_name) {
    global $link;

    $sql = "SELECT COUNT(*) as total_count FROM " .$table_name ." WHERE deleted_at IS NULL";
    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($result)["total_count"];
}

function delete_content($table_name, $id) {
    global $link;
    $timestamp = time();
    $sql = "UPDATE " .$table_name ." SET is_active = 0, deleted_at = " .$timestamp ." WHERE id = " .$id;
    $result = mysqli_query($link, $sql);

    return $result;
}


// user

function update_user($id, $username, $email, $gender) {
    global $link;

    // sql update
    $sql = "UPDATE users SET username = '$username', email = '$email', gender = '$gender' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}


// admin

function update_admin($id, $admin_name, $admin_email, $password_hash, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE admins SET admin_name = '$admin_name', admin_email = '$admin_email', password_hash = $password_hash, is_active = $is_active WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}


//shop categories

function update_categorie($id, $category_name, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE shop_category SET category_name = '$category_name', is_active = '$is_active' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}


// shop items

function update_item($id, $product_name, $price, $category_id, $description, $pic, $thumbnail_1, $thumbnail_2, $thumbnail_3, $size, $in_aktion, $price_in_aktion, $stock, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE shop_item SET product_name = '$product_name', price = '$price', category_id = '$category_id', description = '$description', pic = '$pic', thumbnail_1 = '$thumbnail_1', thumbnail_2 = '$thumbnail_2', thumbnail_3 = '$thumbnail_3', size = '$size', in_action = '$in_aktion', price_in_action = '$price_in_aktion', stock = '$stock', is_active = '$is_active' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}


// kurse

function update_kurs($id, $kursname, $beschreibung, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE kurse SET kursname = '$kursname', beschreibung = '$beschreibung' is_active = '$is_active' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}


// Mitarbeiter

function update_guy($id, $fullname, $email, $telno, $pic, $kurse_id, $description, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE staff SET fullname = '$fullname', email = '$email', telno ='$telno', pic = '$pic', kurse_id = '$kurse_id', description = '$description', is_active = '$is_active' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}


// Bestellungen

function update_order($id, $bestellnummer, $user_id, $created_at, $gutscheincode, $zahlungsart, $versandart, $lieferadresse, $rechnungsadesse, $price, $bestellstatus) {
    global $link;

    // sql update
    $sql = "UPDATE orders SET bestellnummer = '$bestellnummer', user_id = '$user_id', created_at ='$created_at', gutscheincode = '$gutscheincode', zahlungsart = '$zahlungsart', versandart = '$versandart', lieferadresse = '$lieferadresse', rechnungsadresse = '$rechnungsadesse', price = '$price', bestellstatus = '$bestellstatus' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}


// socialmedia

function update_s_icon($id, $icon_name, $s_pic, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE socialmedia SET icon_name = '$icon_name', pic = '$s_pic', is_active = '$is_active' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}


// content

function update_content($id, $headline, $text, $is_active) {
    global $link;

    // sql update
    $sql = "UPDATE content SET headline = '$headline', text = '$text', is_active = '$is_active' WHERE id = '$id'";
    $result = mysqli_query($link, $sql);

    return $result;
}



function bool_to_word($bool){
    if($bool == 1){
        $word = 'Ja';
    }else{
        $word = 'Nein';
    }
    return $word;
}

function get_name_by_id($id, $table_name, $col_name){
    global $link;
    $sql = "SELECT * FROM " .$table_name ." WHERE id = " .$id;
    $result = mysqli_query($link, $sql);

    $result_name = mysqli_fetch_assoc($result);
    return $result_name[$col_name];
}

function truncate($text, $chars = 20) {
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    $text = $text."...";
    return $text;
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
    $order_dir = isset($_GET["order_dir"]) && $_GET["order_dir"] == "desc" ? "asc" : "desc";
    $output = <<<HEREDOC
<a href="?page=$site&order_by=$column&order_dir=$order_dir">$anchor</a>
HEREDOC;

    return $output;
}