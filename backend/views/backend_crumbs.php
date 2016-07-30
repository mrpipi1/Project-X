<?php
include('../../functions/helpers.php');

    $crumb = underscore_to_space(ucfirst($page));

?>


    <h3 class="main-hl_backend"><?php echo $crumb; ?></h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <span onClick="load_Content('dashboard', '1', 'id', 'ASC')">Home</span>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span onClick="load_Content('<?php echo $crumb ?>', '1', 'id', 'ASC')"><?php echo ucfirst($crumb); ?></span>
                </li>
            </ul>

        </div>