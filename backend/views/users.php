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
            <th><?php echo sort_table("reservations", "id", "ID") ?></th>
            <th><?php echo sort_table("reservations", "username", "Name") ?></th>
            <th><?php echo sort_table("reservations", "email", "Email") ?></th>
            <th><?php echo sort_table("reservations", "gender", "Gender") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo $user["id"]; ?></td>
                <td><?php echo $user["username"]; ?></td>
                <td><?php echo $user["email"]; ?></td>
                <td><?php echo $user["gender"]; ?></td>
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

