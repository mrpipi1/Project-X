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
            <th><?php echo sort_table("admins", "id", "ID") ?></th>
            <th><?php echo sort_table("admins", "admin_name", "Name") ?></th>
            <th><?php echo sort_table("admins", "admin_email", "Email") ?></th>
            <th><?php echo sort_table("admins", "is_active", "Aktiv") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($contents['contents'] as $admin): ?>
            <tr>
                <td><?php echo $admin["id"]; ?></td>
                <td><?php echo $admin["admin_name"]; ?></td>
                <td><?php echo $admin["admin_email"]; ?></td>
                <td><?php echo bool_to_word($admin["is_active"]); ?></td>
                <td>
                    <a class="btn-default btn-xs" href="index.php?page=admins&amp;action=edit&amp;id=<?php echo $admin['id']; ?>">edit</a>
                    <a class="btn-danger btn-xs" href="index.php?page=admins&amp;action=delete&amp;id=<?php echo $admin['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <?php pagination_backend("admins", $current_page, $contents['total_pages']); ?>


</section>
