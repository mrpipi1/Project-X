<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 09:20
 */
?>


<section class="content-wrapper_backend">

    <h3 class="main-hl_backend">Admins</h3>

    <table class="table_backend">
        <thead>
        <tr>
            <th><?php echo sort_table("reservations", "id", "ID") ?></th>
            <th><?php echo sort_table("reservations", "admin_name", "Name") ?></th>
            <th><?php echo sort_table("reservations", "admin_email", "Email") ?></th>
            <th><?php echo sort_table("reservations", "is_active", "active") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($admins as $admin): ?>
            <tr>
                <td><?php echo $admin["id"]; ?></td>
                <td><?php echo $admin["admin_name"]; ?></td>
                <td><?php echo $admin["admin_email"]; ?></td>
                <td><?php echo $admin["is_active"]; ?></td>
                <td>
                    <a class="btn-default btn-xs" href="index.php?site=reservations&amp;action=edit&amp;id=<?php echo $reservation['id']; ?>">edit</a>
                    <a class="btn-danger btn-xs" href="index.php?site=reservations&amp;action=delete&amp;id=<?php echo $reservation['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <?php pagination_backend("reservations", $current_page, $total_pages); ?>


</section>
