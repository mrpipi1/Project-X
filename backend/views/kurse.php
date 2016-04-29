<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/04/16
 * Time: 09:12
 */
?>

<section class="content-wrapper_backend">

    <h3 class="main-hl_backend">Kurse</h3>

    <table class="table_backend">
        <thead>
        <tr>
            <th><?php echo sort_table("kurse", "id", "ID") ?></th>
            <th><?php echo sort_table("lurse", "kursname", "Name") ?></th>
            <th><?php echo sort_table("kurse", "beschreibung", "Beschreibung") ?></th>
            <th><?php echo sort_table("kurse", "is_active", "Aktiv") ?></th>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($contents['contents'] as $kurs): ?>
            <tr>
                <td><?php echo $kurs["id"]; ?></td>
                <td><?php echo $kurs["kursname"]; ?></td>
                <td><?php echo truncate($kurs["beschreibung"]); ?></td>
                <td><?php echo bool_to_word($kurs["is_active"]); ?></td>
                <td>
                    <a class="btn-default btn-xs" href="index.php?page=kurse&amp;action=edit&amp;id=<?php echo $kurs['id']; ?>">edit</a>
                    <a class="btn-danger btn-xs" href="index.php?page=kurse&amp;action=delete&amp;id=<?php echo $kurs['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <?php pagination_backend("kurse", $current_page, $contents['total_pages']);
    include('form_backend.php');
    ?>



</section>

