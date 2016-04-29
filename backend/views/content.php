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
            <th><?php echo sort_table("content", "id", "ID") ?></th>
            <th><?php echo sort_table("content", "headline", "Headline") ?></th>
            <th><?php echo sort_table("content", "text", "Text") ?></th>
            <th><?php echo sort_table("content", "is_active", "Aktiv") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($contents['contents'] as $content): ?>
            <tr>
                <td><?php echo $content["id"]; ?></td>
                <td><?php echo $content["headline"]; ?></td>
                <td><?php echo truncate($content["text"]); ?></td>
                <td><?php echo bool_to_word($content["is_active"]); ?></td>
                <td>
                    <a class="btn-default btn-xs" href="index.php?page=content&amp;action=edit&amp;id=<?php echo $content['id']; ?>">edit</a>
                    <a class="btn-danger btn-xs" href="index.php?page=content&amp;action=delete&amp;id=<?php echo $content['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <?php pagination_backend("kurse", $current_page, $contents['total_pages']);
    include('form_backend.php');
    ?>



</section>
