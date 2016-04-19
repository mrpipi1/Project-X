<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/04/16
 * Time: 15:31
 */

?>

<section class="content-wrapper_backend">

    <h3 class="main-hal_backend">Users</h3>
    <p class="hl_backend">Hallo</p>



    <table class="table_backend">
        <thead>
        <tr>
            <th><?php echo sort_table("reservations", "id", "ID") ?></th>
            <th><?php echo sort_table("reservations", "fullname", "Name") ?></th>
            <th><?php echo sort_table("reservations", "reservation_on", "Datum") ?></th>
            <th><?php echo sort_table("reservations", "smoking_area", "Raucherbereich") ?></th>
            <th><?php echo sort_table("reservations", "created_at", "Reserviert am") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo $user["id"]; ?></td>
                <td><?php echo $user["fullname"]; ?></td>
                <td><?php echo $user["reservation_on_formatted"]; ?></td>
                <td><?php echo $user["smoking_area"]; ?></td>
                <td><?php echo $user["created_at"]; ?></td>
                <td>
                    <a class="btn btn-default btn-xs" href="index.php?site=reservations&amp;action=edit&amp;id=<?php echo $reservation['id']; ?>">edit</a>
                    <a class="btn btn-danger btn-xs" href="index.php?site=reservations&amp;action=delete&amp;id=<?php echo $reservation['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <?php pagination_backend("reservations", $current_page, $total_pages); ?>


</section>

