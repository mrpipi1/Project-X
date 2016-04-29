<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 15:16
 */
?>

<section class="content-wrapper_backend">

<h3 class="main-hl_backend">Shop Kategorien</h3>

    <table class="table_backend">
        <thead>
        <tr>
            <th><?php echo sort_table("shop_categories", "id", "ID") ?></th>
            <th><?php echo sort_table("shop_categories", "title", "Name") ?></th>
            <th><?php echo sort_table("shop_categories", "is_active", "Aktiv") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($contents['contents'] as $category): ?>
            <tr>
                <td><?php echo $category["id"]; ?></td>
                <td><?php echo $category["title"]; ?></td>
                <td><?php echo bool_to_word($category["is_active"]); ?></td>
                <td>
                    <a class="btn-default btn-xs" href="index.php?page=shop_categories&amp;action=edit&amp;id=<?php echo $category['id']; ?>">edit</a>
                    <a class="btn-danger btn-xs" href="index.php?page=shop_categories&amp;action=delete&amp;id=<?php echo $category['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <?php pagination_backend("shop_categories", $current_page, $contents['total_pages']); ?>

</section>
