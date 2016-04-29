<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/04/16
 * Time: 15:31
 */

?>

<section class="content-wrapper_backend">

    <h3 class="main-hl_backend">User</h3>

    <table class="table_backend">
        <thead>
        <tr>
            <th><?php echo sort_table("users", "id", "ID") ?></th>
            <th><?php echo sort_table("users", "username", "Name") ?></th>
            <th><?php echo sort_table("users", "email", "Email") ?></th>
            <th><?php echo sort_table("users", "gender", "Gender") ?></th>
            <th><?php echo sort_table("users", "birthday", "Geburtstag") ?></th>
            <th><?php echo sort_table("users", "pref_delivery", "bev. Versand") ?></th>
            <th><?php echo sort_table("users", "pref_payment", "bev. Bezahlung") ?></th>
            <th><?php echo sort_table("users", "address", "Adresse") ?></th>
            <th><?php echo sort_table("users", "zip_code", "PLZ") ?></th>
            <th><?php echo sort_table("users", "is_active", "Aktiv") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php

        foreach($contents['contents'] as $user): ?>
            <tr>
                <td><?php echo $user["id"]; ?></td>
                <td><?php echo $user["username"]; ?></td>
                <td><?php echo $user["email"]; ?></td>
                <td><?php echo $user["gender"]; ?></td>
                <td><?php echo $user["birthday"]; ?></td>
                <td><?php echo $user["pref_delivery"]; ?></td>
                <td><?php echo $user["pref_payment"]; ?></td>
                <td><?php echo $user["address"]; ?></td>
                <td><?php echo $user["zip_code"]; ?></td>
                <td><?php echo bool_to_word($user["is_active"]); ?></td>
                <td>
                    <a class="btn-default btn-xs" href="index.php?page=users&amp;action=edit&amp;id=<?php echo $user['id']; ?>">edit</a>
                    <a class="btn-danger btn-xs" href="index.php?page=users&amp;action=delete&amp;id=<?php echo $user['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <?php  pagination_backend("users", $current_page, $contents['total_pages']);
    include('form_backend.php');
    ?>

</section>

