<div class="errors_checkout_wrapper"><div class="error_message_checkout"></div></div>
<div class="breadcrumb_wrapper">
    <ul class="breadcrumbs" >
      <?php
      if(mysqli_num_rows($breadcrubms_checkout) > 0){
        $i = 0;
        while( $row = mysqli_fetch_assoc($breadcrubms_checkout) ){
          if(isset($_GET['page']) && $row['name'] == $_GET['page']){
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
       <!-- <span class="span-wrapper">-->
           <!-- <span class="line-rand"></span> -->
           <!-- <a href="index.php?page=<?php// if($row['name'] == 'Adresse'){echo 'Adressen';}elseif(strpos($row['name'], 'Versand')>0){echo 'Versand';}else{echo $row['name'];} ?>" class="number_wrapper"> -->
                <!-- <span class="number visited_color"><?php //echo $row['position']; ?></span> -->
           <!-- </a> -->
           <!-- <span class="line visited_color"></span> -->
       <!-- </span> -->
        <!-- <li class="breadcrumb-item visited">
            <span class="span-wrapper">
                <span class="line-rand"></span>
                <a href="index.php?page=Warenkorb" class="number_wrapper">
                     <span class="number visited_color">1</span>
                </a>
                <span class="line visited_color"></span>
            </span>
            <span class="text_wrapper">
                <a href="index.php?page=Warenkorb" class="text_a">
                    <span class="text visited_color">Warenkorb</span>
                </a>
            </span>
        </li>

        <li class="breadcrumb-item visited">
            <span class="span-wrapper">
                <span class="line visited_color"></span>
                <a href="index.php?page=Anmelden" class="number_wrapper">
                    <span class="number visited_bg-color">2</span>
                </a>
                <span class="line visited_color"></span>
            </span>
            <span class="text_wrapper">
                <a href="index.php?page=Anmelden" class="text_a">
                    <span class="text visited_color">Anmelden</span>
                </a>
             </span>
        </li>

        <li class="breadcrumb-item crumb-current">

            <span class="span-wrapper">
                 <span class="line visited_color"></span>
                 <a href="index.php?page=Adressen" class="number_wrapper">
                     <span class="number active_color">3</span>
                  </a>
                 <span class="line future_color"></span>
            </span>
            <span class="text_wrapper">
                <a href="index.php?page=Adressen" class="text_a">
                    <span class="text active_color">Lieferadresse</span>
                </a>
            </span>
        </li>

        <li class="breadcrumb-item two-lines">
            <span class="span-wrapper">
                <span class="line future_color"></span>
                <a href="index.php?page=Versand" class="number_wrapper">
                    <span class="number future_color">4</span>
                </a>
                <span class="line future_color"></span>
             </span>
            <span class="text_wrapper">
                <a href="index.php?page=Versand" class="text_a">
                    <span class="text future_color">Bezahlung<br/>& Versand</span>
                </a>
            </span>
        </li>

        <li class="breadcrumb-item">
            <span class="span-wrapper">
                <span class="line future_color"></span>
                <a href="index.php?page=Zusammenfassung" class="number_wrapper">
                    <span class="number future_color">5</span>
                </a>
                <span class="line-rand"></span>
            </span>
            <span class="text_wrapper">
                <a href="index.php?page=Zusammenfassung" class="text_a">
                    <span class="text future_color">Zusammenfassung</span>
                </a>
            </span>
        </li> -->
    </ul>
</div>
