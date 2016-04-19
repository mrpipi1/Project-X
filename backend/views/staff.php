<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 09:14
 */
?>

<section class="content-wrapper_backend">

    <h3 class="main-hl_backend">Mitarbeiter</h3>

    <table class="table_backend">
        <thead>
        <tr>
            <th><?php echo sort_table("staff", "id", "ID") ?></th>
            <th><?php echo sort_table("staff", "fullname", "Name") ?></th>
            <th><?php echo sort_table("staff", "email", "Email") ?></th>
            <th><?php echo sort_table("staff", "telno", "Tel. Nummer") ?></th>
            <th><?php echo sort_table("staff", "pic", "Bild") ?></th>
            <th><?php echo sort_table("staff", "kurse_id", "Kurs") ?></th>
            <th><?php echo sort_table("staff", "description", "Beschreibung") ?></th>
            <th><?php echo sort_table("staff", "is_active", "active") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($staff as $guy): ?>
            <tr>
                <td><?php echo $guy["id"]; ?></td>
                <td><?php echo $guy["fullname"]; ?></td>
                <td><?php echo $guy["email"]; ?></td>
                <td><?php echo $guy["telno"]; ?></td>
                <td><?php echo $guy["pic"]; ?></td>
                <td><?php echo $guy["kurse_id"]; ?></td>
                <td><?php echo truncate($guy["description"], $chars = 25); ?></td>
                <td><?php echo $guy["is_active"]; ?></td>
                <td>
                    <a class="btn-default btn-xs" href="index.php?page=staff&amp;action=edit&amp;id=<?php echo $guy['id']; ?>">edit</a>
                    <a class="btn-danger btn-xs" href="index.php?page=staff&amp;action=delete&amp;id=<?php echo $guy['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <?php pagination_backend("kurse", $current_page, $total_pages); ?>




</section>

