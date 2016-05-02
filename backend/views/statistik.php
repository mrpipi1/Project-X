<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30/04/16
 * Time: 14:07
 */
?>

<section class="content-wrapper_backend">

    <h2 class="main-hl_backend">Statistik</h2>

    <p class="hl_backend">Hier kommen statistiken hin :)</p>


    <section class="pie-chart_wrapper">
        <h3 class ="pie-chart_hl">Gender</h3>
        <div class="pie-chart"><?php echo get_gender()['male'] ?></div>
        <div class="pie-chart"><?php echo get_gender()['female'] ?></div>
    </section>














</section>