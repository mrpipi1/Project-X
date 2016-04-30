<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/04/16
 * Time: 15:31
 */

?>

<section class="content-wrapper_backend">

    <h3 class="main-hl_backend">
     <?php
        if($_GET['page'] == "staff"){
        echo "Mitarbeiter";
        }elseif($_GET['page'] == "orders"){
        echo "Bestellungen";
        }elseif($_GET['page'] == "shop_categories"){
        echo "Kategorien";
        }elseif($_GET['page'] == "shop_item"){
        echo "Produkte";
        }elseif($_GET['page'] == "socialmedia"){
        echo "Icons";
        }else{
        echo ucfirst($_GET['page']);
        }
    ?>
    </h3>

    <table class="table_backend">
        <thead>
        <tr>
            <?php
            $table = create_table($_GET['page']);
            echo $table['ths'];
            ?>
            <th>Aktionen</th>
        </tr>
        </thead>

        <tbody>
        <?php
        foreach($contents as $content): ?>
        <tr>
                <?php echo $table['tds']; ?>
                <td>
                    <a class="btn_table" href="index.php?page=users&amp;action=edit&amp;id=<?php echo $user['id']; ?>">edit</a>
                    <a class="btn_table" href="index.php?page=users&amp;action=delete&amp;id=<?php echo $user['id']; ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>
    <?php  pagination_backend($_GET['page'], $current_page, $contents['total_pages']); ?>
</section>

