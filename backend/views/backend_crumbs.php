<?php

    $crumb = $page;

?>


    <h3 class="main-hl_backend"><?php echo ucfirst($crumb); ?></h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#"><?php echo ucfirst($crumb); ?></a>
                </li>
            </ul>

        </div>