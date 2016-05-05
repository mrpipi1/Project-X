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
        <h3 class ="pie-chart_hl">Gender:</h3>

        <script>

            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['gender', 'anzahl'],
                    ['male',     <?php echo get_count_data('users', 'gender', 'male', 'female')['first'] ?>],
                    ['female',    <?php echo get_count_data('users', 'gender', 'male', 'female')['second'] ?>]
                ]);

                var options = {
                    //title: 'gender',
                    pieHole: 0.4,
                };

                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                chart.draw(data, options);
            }
        </script>

        <div id="donutchart" style="width: 500px; height: 300px;"></div>
    </section>

    





</section>