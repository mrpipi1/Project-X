<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 09:22
 */
?>


<section class="content-wrapper_backend">

    <h3 class="main-hl_backend">Produkte</h3>

    <table class="table_backend">
        <thead>
        <tr>
            <th><?php echo sort_table("shop_item", "id", "ID") ?></th>
            <th><?php echo sort_table("shop_item", "product_name", "Name") ?></th>
            <th><?php echo sort_table("shop_item", "category_id", "Kategorie") ?></th>
            <th><?php echo sort_table("shop_item", "pic", "Bild") ?></th>
            <th><?php echo sort_table("shop_item", "thumbnail_1", "Thumb_1") ?></th>
            <th><?php echo sort_table("shop_item", "thumbnail_2", "Thumb_2") ?></th>
            <th><?php echo sort_table("shop_item", "thumbnail_3", "Thumb_3") ?></th>
            <th><?php echo sort_table("shop_item", "size", "Größe") ?></th>
            <th><?php echo sort_table("shop_item", "in_aktion", "in Aktion") ?></th>
            <th><?php echo sort_table("shop_item", "price_in_action", "Aktionspreis") ?></th>
            <th><?php echo sort_table("shop_item", "stock", "Stock") ?></th>
            <th><?php echo sort_table("shop_item", "is_active", "Aktiv") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($contents['contents'] as $item): ?>
            <tr>
                <td><?php echo $item["id"]; ?></td>
                <td><?php echo $item["product_name"]; ?></td>
                <td><?php echo get_name_by_id($item["category_id"], "shop_categories", "category_name"); ?></td>
                <td><?php echo $item["description"]; ?></td>
                <td><?php echo $item["pic"]; ?></td>
                <td><?php echo truncate($item["thumbnail_1"]); ?></td>
                <td><?php echo truncate($item["thumbnail_2"]); ?></td>
                <td><?php echo truncate($item["thumbnail_3"]); ?></td>
                <td><?php echo $item["size"]; ?></td>
                <td><?php echo $item["in_aktion"]; ?></td>
                <td><?php echo $item["price_in_aktion"]; ?></td>
                <td><?php echo $item["stock"]; ?></td>
                <td><?php echo bool_to_word($item["is_active"]); ?></td>
                <td>
                    <a class="btn-default btn-xs" href="index.php?page=shop_item&amp;action=edit&amp;id=<?php echo $item['id']; ?>">edit</a>
                    <a class="btn-danger btn-xs" href="index.php?page=shop_item&amp;action=delete&amp;id=<?php echo $item['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <?php pagination_backend("shop_item", $current_page, $contents['total_pages']);
    include('form_backend.php');
    ?>



</section>
