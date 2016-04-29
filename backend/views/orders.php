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

    <a class="btn-default btn-xs" href="index.php?page=orders&amp;action=new">neue Bestellung</a>

    <table class="table_backend">
        <thead>
        <tr>
            <th><?php echo sort_table("orders", "id", "ID") ?></th>
            <th><?php echo sort_table("orders", "bestellnummer", "Bestellnummer") ?></th>
            <th><?php echo sort_table("orders", "users_id", "User") ?></th>
            <th><?php echo sort_table("orders", "gutscheincode", "Gutschein") ?></th>
            <th><?php echo sort_table("orders", "zahlungsart", "Zahlung") ?></th>
            <th><?php echo sort_table("orders", "lieferadresse", "Lieferadresse") ?></th>
            <th><?php echo sort_table("orders", "rechnungsadresse", "Rechnungsadresse") ?></th>
            <th><?php echo sort_table("orders", "price", "Preis") ?></th>
            <th><?php echo sort_table("orders", "bestellstatus", "Status") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($contents['contents'] as $order): ?>
            <tr>
                <td><?php echo $order["id"]; ?></td>
                <td><?php echo $order["bestellnummer"]; ?></td>
                <td><?php echo $order["users_id"]; ?></td>
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

    <?php pagination_backend("kurse", $current_page, $contents['total_pages']); ?>



</section>

