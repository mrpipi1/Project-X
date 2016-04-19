<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 09:22
 */
?>


<section class="content-wrapper_backend">

    <h3 class="main-hl_backend">Shop Items</h3>

    <table class="table_backend">
        <thead>
        <tr>
            <th><?php echo sort_table("reservations", "id", "ID") ?></th>
            <th><?php echo sort_table("reservations", "product_name", "Name") ?></th>
            <th><?php echo sort_table("reservations", "category_id", "Kategorie") ?></th>
            <th><?php echo sort_table("reservations", "pic", "Bild") ?></th>
            <th><?php echo sort_table("reservations", "thumbnail_1", "Thumbnail_1") ?></th>
            <th><?php echo sort_table("reservations", "thumbnail_2", "Thumbnail_2") ?></th>
            <th><?php echo sort_table("reservations", "thumbnail_3", "Thumbnail_3") ?></th>
            <th><?php echo sort_table("reservations", "size", "Größe") ?></th>
            <th><?php echo sort_table("reservations", "in_aktion", "in Aktion") ?></th>
            <th><?php echo sort_table("reservations", "price_in_action", "Aktionspreis") ?></th>
            <th><?php echo sort_table("reservations", "stock", "Stock") ?></th>
            <th><?php echo sort_table("reservations", "is_active", "Aktiv") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($contents['contents'] as $item): ?>
            <tr>
                <td><?php echo $item["id"]; ?></td>
                <td><?php echo $item["product_name"]; ?></td>
                <td><?php echo $item["category_id"]; ?></td>
                <td><?php echo $item["description"]; ?></td>
                <td><?php echo $item["pic"]; ?></td>
                <td><?php echo truncate($item["thumbnail_1"], $chars = 25); ?></td>
                <td><?php echo truncate($item["thumbnail_2"], $chars = 25); ?></td>
                <td><?php echo truncate($item["thumbnail_3"], $chars = 25); ?></td>
                <td><?php echo $item["size"]; ?></td>
                <td><?php echo $item["in_aktion"]; ?></td>
                <td><?php echo $item["price_in_aktion"]; ?></td>
                <td><?php echo $item["stock"]; ?></td>
                <td><?php echo $item["is_active"]; ?></td>
                <td>
                    <a class="btn-default btn-xs" href="index.php?page=shop_item&amp;action=edit&amp;id=<?php echo $item['id']; ?>">edit</a>
                    <a class="btn-danger btn-xs" href="index.php?page=shop_item&amp;action=delete&amp;id=<?php echo $item['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <?php pagination_backend("reservations", $current_page, $contents['total_pages']); ?>



</section>
