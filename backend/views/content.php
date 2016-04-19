<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/04/16
 * Time: 15:32
 */
?>
<section class="content-wrapper_backend">

    <h3 class="main-hl_backend">Content</h3>

    <table class="table_backend">
        <thead>
        <tr>
            <th><?php echo sort_table("staff", "id", "ID") ?></th>
            <th><?php echo sort_table("staff", "headline", "Headline") ?></th>
            <th><?php echo sort_table("staff", "text", "Text") ?></th>
            <th><?php echo sort_table("staff", "is_active", "Aktiv") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($contents as $content): ?>
            <tr>
                <td><?php echo $content["id"]; ?></td>
                <td><?php echo $content["headline"]; ?></td>
                <td><?php echo truncate($content["text"], $chars = 25); ?></td>
                <td><?php echo $content["is_active"]; ?></td>
                <td>
                    <a class="btn-default btn-xs" href="index.php?page=content&amp;action=edit&amp;id=<?php echo $content['id']; ?>">edit</a>
                    <a class="btn-danger btn-xs" href="index.php?page=content&amp;action=delete&amp;id=<?php echo $content['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <?php pagination_backend("kurse", $current_page, $total_pages); ?>



</section>
