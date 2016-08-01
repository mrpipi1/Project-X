<div class="errors_checkout_wrapper"><div class="error_message_checkout"></div></div>
<div class="breadcrumb_wrapper">
    <ul class="breadcrumbs" >
      <?php
      if(mysqli_num_rows($breadcrubms_checkout) > 0){
        $i = 0;
        while( $row = mysqli_fetch_assoc($breadcrubms_checkout) ){
          if(isset($_GET['page']) && (strpos($row['name'], $_GET['page']) > -1 || $_GET['page'] == 'Adressen' && $row['name'] == 'Adresse')){
            $class = 'crumb-current';
          }elseif($row['position'] < $i){
            $class = 'visited';
          }elseif($row['position'] > $i){
            $class = '';
          }
          if(strpos($row['name'],'&') > 0){
            $class .= ' two-lines';
          }
          ?>
        <li class="breadcrumb-item <?php echo $class; ?>" position="<?php echo $row['position']; ?>">

            <span class="text_wrapper">
                <a href="index.php?page=<?php if($row['name'] == 'Adresse'){echo 'Adressen';}elseif(strpos($row['name'], 'Versand')>0){echo 'Versand';}else{echo $row['name'];} ?>" class="text_a">
                    <span class="text visited_color"><?php echo $row['name']; ?></span>
                </a>
            </span>
        </li>
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <?php
        $i++;
        }
      }

       ?>

    </ul>
</div>
