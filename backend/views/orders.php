<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 09:15
 */
?>

<section class="content-wrapper_backend">

    <h3 class="main-hl_backend">Bestellungen</h3>

    <table class="table_backend">
        <thead>
        <tr>
            <th><?php echo sort_table("staff", "id", "ID") ?></th>
            <th><?php echo sort_table("staff", "bestellnummer", "Bestellnummer") ?></th>
            <th><?php echo sort_table("staff", "user_id", "User") ?></th>
            <th><?php echo sort_table("staff", "created_at", "created at") ?></th>
            <th><?php echo sort_table("staff", "gutscheincode", "Gutscheincode") ?></th>
            <th><?php echo sort_table("staff", "zahlungsart", "Zahlung") ?></th>
            <th><?php echo sort_table("staff", "lieferadresse", "Lieferadresse") ?></th>
            <th><?php echo sort_table("staff", "rechnungsadresse", "Rechnungsadresse") ?></th>
            <th><?php echo sort_table("staff", "price", "Preis") ?></th>
            <th><?php echo sort_table("staff", "bestellstatus", "Bestellstatus") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($orders as $order): ?>
            <tr>
                <td><?php echo $order["id"]; ?></td>
                <td><?php echo $order["bestellnummer"]; ?></td>
                <td><?php echo $order["user_id"]; ?></td>
                <td><?php echo $order["created_at"]; ?></td>
                <td><?php echo $order["gutscheincode"]; ?></td>
                <td><?php echo $order["zahlungsart"]; ?></td>
                <td><?php echo $order["lieferadresse"]; ?></td>
                <td><?php echo $order["rechnungsadresse"]; ?></td>
                <td><?php echo $order["price"]; ?></td>
                <td><?php echo $order["bestellstatus"]; ?></td>

                <td>
                    <a class="btn-default btn-xs" href="index.php?page=orders&amp;action=edit&amp;id=<?php echo $order['id']; ?>">edit</a>
                    <a class="btn-danger btn-xs" href="index.php?page=orders&amp;action=delete&amp;id=<?php echo $order['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <?php pagination_backend("kurse", $current_page, $total_pages); ?>



</section>

