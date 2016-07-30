
<?php
 if(!isset($_COOKIE['landingpage'])){
   include ('content/landingpage.php');
 }else{
//   // we don't want the landingpage to be includet because we want to show it once a day
//
 }

?>
  <main class="main">

     <section class="about_us section_main" id="about_us">
         <h3>
             Über uns
         </h3>
         <?php

          while( $row = mysqli_fetch_assoc($about_us) ){

          ?>
       <p>
        <?php echo $row['content']; ?>
       </p>
       <?php
     }
     ?>
     </section>

      <section class="employees_main section_main">
          <h4 class="employees_headline ">  <!-- spezieller stylen als andere H3 -->
              Mitarbeiter
         </h4>
          <?php
          while( $row = mysqli_fetch_assoc($employees) ){
          ?>

          <ul class="employees_main-info">


          <li>
             <ul class="employees_main-contact">
               <li><img src="<?php echo $row['pic']; ?>" alt="lorem ipsum"/></li>
               <li><?php echo $row['telno']; ?><i class="fa icon-mobile"></i></li>
               <li><a href="<?php echo $row['email']; ?>?subject=lorem"><?php echo $row['email']; ?></a><i class="fa icon-mail"></i></li>
             </ul>
          </li>
          <li>
             <h6><?php echo $row['fullname']; ?></h6>
             <p>
              <?php echo $row['description']; ?>
            </p>
         </li>

        </ul>
        <?php
      }
      ?>

      </section>

  <div class="parallax parallax1">
    <div class="parallax_textoverlay">
      <h2>Zufriedenheit</h2>
    </div>
  </div>



   <section class="courses_main section_main" id="course">

       <h3> <!--<a name="course"></a>-->
           Kurse
       </h3>

      <!-- <h3 class="courses_headline">Fortgeschrittener</h3> <! Anders stylen als Mitarbeiter H3 -->
      <section class="courses_main-all">
         <?php
          while( $row = mysqli_fetch_assoc($courses) ){
            $img = str_replace(' ', '_', $row['_name']);
          ?>
          <ul>
            <li><h5><?php echo $row['_name'] ?></h5></li>
            <li><img src="img/kurse/<?php echo $img ?>.svg" alt="" /></li>
            <li><p><?php echo $row['description'] ?>.</p></li>
            <!-- <a class="btn_main"href="#">Erfahren Sie mehr</a> -->
          </ul>
          <?php
        }
        ?>



      </section>
   </section>

  <div class="parallax parallax2">
    <div class="parallax_textoverlay">
      <h2>Gelassenheit</h2>
    </div>
  </div>



      <section class="saleproducts_main section_main" id="saleproducts_main">

        <h3>Produkt Aktion</h3>
          <section class="wrapper_saleproducts_main">
            <?php
            while( $row = mysqli_fetch_assoc($sale_products) ){
            ?>
                <section class="product">
                    <a href="index.php?page=Detailansicht&amp;product_id=<?php echo $row['id'] ?>">
                        <ul class="product-img">
                            <img src="<?php echo $row['pic'] ?>" class="jumper_white"/>
                        </ul>
                        <ul class="info">
                            <li><?php echo $row['_name'] ?></li>
                            <li><?php echo $row['price_in_aktion'] ?></li>
                        </ul>
                        <ul class="overlay overlay-checkout">
                            <li><h1><?php echo $row['_name'] ?></h1></li>
                            <li><p><?php echo $row['price_in_aktion'] ?></p></li>
                            <li>
                                <ul class="colors colors-checkout">
                                    <?php
                                    mysqli_data_seek($color, 0);
                                    while ($row3 = mysqli_fetch_assoc($color)) {
                                        //print_r($row3);
                                        if($row['id'] == $row3['product_id']) {
                                            ?>
                                            <li style="Background-color: <?php echo $row3['color'] ?>"><?php echo $row3['color'] ?></li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                        </ul>
                    </a>
                </section>
            <?php
          }
          ?>
        </section>


     </section>



     <div class="btn">
          <a href="index.php?page=shop">Zum Shop</a>
     </div>


     <section class="contact_main section_main" id="contact">

              <?php
              $cnt = 0;
              while( $row = mysqli_fetch_assoc($contact) ){
                  if($cnt == 0) {
                      echo '<section class="' . $row['_name'] . '">';
                  }
                  if($row['type'] == 'headline'){
                      echo '<h3>' .$row['content'].'</h3>';
                  }else if($row['type'] == 'subheadline'){
                      echo '<h4>' .$row['content'].'</h4>';
                  }else if ($row['type'] == 'content'){
                      echo '<p>' .$row['content'].'</p>';
                  }else if ($row['type'] == 'email'){
                      echo '<p><a href=\"mailto:\"'.$row["content"].'\"?subject=Kontaktformular-Website\">'.$row['content'].'</a></p>';
                  }else if ($row['type'] == 'tel'){
                      echo '<p><a href=\"tel:\"'.$row["content"].'\"?subject=Kontaktformular-Website\">'.$row['content'].'</a></p>';
                  }
                  $cnt++;
              }
          ?>
      </section>

                <div id='map'
                    <?php
                        while( $row = mysqli_fetch_assoc($map) ) {
                            echo $row['type']."='".$row['content']."'";
                        }
                    ?>
                >
               </div>

           <div class="btn">
             <a href="#contactform_main">Zum Kontaktformular</a>
           </div>

          </section>


        <?php
        $cnt = 0;
        while( $row = mysqli_fetch_assoc($contact_form) ){
            if($cnt == 0) {
                echo '<section class="' . $row['_name'] . '">';

            }
            if ($row['type'] == 'headline') {
                echo '<h3>' . $row['content'] . '</h3>';
            } else if ($row['type'] == 'subheadline') {
                echo '<h4>' . $row['content'] . '</h4>';
            }
            if($cnt == 0){
                echo '<form class="form_main" action="#" method="post">';
            }
            if ($row['type'] == 'comment') {
                echo '<div class="form-group">
                           <textarea class="textarea" name="'.$row['type'].'" rows="10" cols="100" placeholder="'.$row['content'].'" ></textarea>
                           <span class="highlight"></span>
                           <span class="form-bar"></span>
                      </div>';
            } else if($row['type'] == 'submit') {
                echo '<div class="btn">
                       <input type="submit" class="submit_main input" name="user_message" value="' . $row['content'] . '" >
                     </div>';
            }else{
                echo '<div class="form-group">
                       <input type="text" name="'.$row['type'].'" value="" required class="input">
                       <span class="highlight"></span>
                       <span class="form-bar"></span>
                       <label class="label">'.$row['content'].'</label>
                     </div>';
            }
            if($cnt == mysqli_num_rows($contact_form)){
                echo '</form>';
            }

            $cnt++;
        }

        echo '</section>';
        ?>


     </section>
  </main>
