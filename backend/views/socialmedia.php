<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 09:17
 */
?>


<section class="content-wrapper_backend">

    <h3 class="main-hl_backend">Social Media</h3>

    <table class="table_backend">
        <thead>
        <tr>
            <th><?php echo sort_table("staff", "id", "ID") ?></th>
            <th><?php echo sort_table("staff", "icon_name", "Name") ?></th>
            <th><?php echo sort_table("staff", "pic", "Bild") ?></th>
            <th><?php echo sort_table("staff", "is_active", "Aktiv") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($s_icons as $s_icon): ?>
            <tr>
                <td><?php echo $s_icon["id"]; ?></td>
                <td><?php echo $s_icon["icon_name"]; ?></td>
                <td><?php echo $s_icon["pic"]; ?></td>
                <td><?php echo $s_icon["is_active"]; ?></td>
                <td>
                    <a class="btn-default btn-xs" href="index.php?page=socialmedia&amp;action=edit&amp;id=<?php echo $s_icon['id']; ?>">edit</a>
                    <a class="btn-danger btn-xs" href="index.php?page=socialmedia&amp;action=delete&amp;id=<?php echo $s_icon['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <?php pagination_backend("kurse", $current_page, $total_pages); ?>




</section>
