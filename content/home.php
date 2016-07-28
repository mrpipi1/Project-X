<?php include ('content/landingpage.php');?>
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
         <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
         eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
         ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
         aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
         in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
         sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
         mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing
         elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
         ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
         commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
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
             <h5><?php echo $row['fullname']; ?></h5>
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
      <section class="advanced-courses_main">
         <?php
          while( $row = mysqli_fetch_assoc($courses) ){
            $img = str_replace(' ', '_', $row['_name']);
          ?>
          <ul>
            <li><img src="img/kurse/<?php echo $img ?>.svg" alt="" /></li>
            <li><h5><?php echo $row['_name'] ?></h5></li>
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

          <?php
          while( $row = mysqli_fetch_assoc($products) ){
          ?>
              <section class="product">
                  <a href="index.php?page=Detailansicht&amp;product_id=<?php echo $row['id'] ?>">
                      <ul class="product-img">
                          <img src="<?php echo $row['pic'] ?>" class="jumper_white"/>
                      </ul>
                      <ul class="info">
                          <li><?php echo $row['_name'] ?></li>
                          <li><?php echo $row['price'] ?></li>
                      </ul>
                      <ul class="overlay overlay-checkout">
                          <li><h1><?php echo $row['_name'] ?></h1></li>
                          <li><p><?php echo $row['price'] ?></p></li>
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




<!--
          <section class="product product-main">
               <a href="index.php?page=Detailansicht">
              <ul class="product-img">
                  <li class="jumper_black"></li>
              </ul>
              <ul class="info">
                  <li>Jumper</li>
                  <li>39,99€</li>
              </ul>
              <ul class="overlay overlay-checkout" >
                  <li><h1>Jumper - Unisex</h1></li>
                  <li><p>39,99€</p></li>
                  <li>
                      <ul class="colors colors-checkout">
                          <li>RED</li>
                          <li>RED</li>
                          <li>RED</li>
                      </ul>
                  </li>
              </ul>
              </a>
          </section>

          <section class="product product-main">
            <a href="index.php?page=Detailansicht">
              <ul class="product-img">
                  <li class="jumper_white"></li>
              </ul>
              <ul class="info">
                  <li>Jumper</li>
                  <li>39,99€</li>
              </ul>
                  <ul class="overlay overlay-checkout" >
                      <li><h1>Jumper - Unisex</h1></li>
                      <li><p>39,99€</p></li>
                      <li>
                          <ul class="colors colors-checkout">
                              <li>RED</li>
                              <li>RED</li>
                              <li>RED</li>
                          </ul>
                      </li>
                  </ul>
              </a>
          </section>

          <section class="product product-main">
               <a href="index.php?page=Detailansicht">
              <ul class="product-img">
                  <li class="yogabag-mat"></li>
              </ul>
              <ul class="info">
                  <li>Yogabag &amp; Matte</li>
                  <li>39,99€</li>
              </ul>
                  <ul class="overlay overlay-checkout" >
                      <li><h1>Bag &amp; Matte</h1></li>
                      <li><p>39,99€</p></li>
                      <li>
                          <ul class="colors colors-checkout">
                              <li>RED</li>
                              <li>RED</li>
                              <li>RED</li>
                          </ul>
                      </li>
                  </ul>
              </a>
          </section>

          <section class="product product-main">
               <a href="index.php?page=Detailansicht">
              <ul class="product-img">
                  <li class="tshirt_w-red"></li>
              </ul>
              <ul class="info">
                  <li>T-Shirt</li>
                  <li>19,99€</li>
              </ul>
                  <ul class="overlay overlay-checkout" >
                      <li><h1>T-Shirt - Damen</h1></li>
                      <li><p>19,99€</p></li>
                      <li>
                          <ul class="colors colors-checkout">
                              <li>RED</li>
                              <li>RED</li>
                              <li>RED</li>
                          </ul>
                      </li>
                  </ul>
              </a>
          </section>

          <section class="product product-main">
               <a href="index.php?page=Detailansicht">
              <ul class="product-img">
                  <li class="notebook"></li>
              </ul>
              <ul class="info">
                  <li>Notizbuch</li>
                  <li>19,99€</li>
              </ul>
                  <ul class="overlay overlay-checkout" >
                      <li><h1>Notizbuch</h1></li>
                      <li><p>19,99€</p></li>
                      <li>
                          <ul class="colors colors-checkout">
                              <li>RED</li>
                              <li>RED</li>
                              <li>RED</li>
                          </ul>
                      </li>
                  </ul>
              </a>
          </section>

          <section class="product product-main">
               <a href="index.php?page=Detailansicht">
              <ul class="product-img">
                  <li class="yogaring"></li>
              </ul>
              <ul class="info">
                  <li>Yogaring</li>
                  <li>24,99€</li>
              </ul>
                  <ul class="overlay overlay-checkout" >
                      <li><h1>Yogaring</h1></li>
                      <li><p>24,99€</p></li>
                      <li>
                          <ul class="colors colors-checkout">
                              <li>RED</li>
                              <li>RED</li>
                              <li>RED</li>
                          </ul>
                      </li>
                  </ul>
              </a>
          </section>
        -->

          <!-- <section class="product">
              <ul class="product-img">
                  <li class="product-1"></li>
              </ul>
              <ul class="info">
                  <li>Jumper</li>
                  <li>39,99€</li>
              </ul>
              <a href="index.php?page=Detailansicht">
                  <ul class="overlay overlay-checkout" >
                      <li><h1>Jumper - Unisex</h1></li>
                      <li><p>39,99€</p></li>
                      <li>
                          <ul class="colors colors-checkout">
                              <li>RED</li>
                              <li>RED</li>
                              <li>RED</li>
                          </ul>
                      </li>
                  </ul>
              </a>
          </section>

          <section class="product">
              <ul class="product-img">
                  <li class="product-1"></li>
              </ul>
              <ul class="info">
                  <li>Jumper</li>
                  <li>39,99€</li>
              </ul>
              <a href="index.php?page=Detailansicht">
                  <ul class="overlay overlay-checkout" >
                      <li><h1>Jumper - Unisex</h1></li>
                      <li><p>39,99€</p></li>
                      <li>
                          <ul class="colors colors-checkout">
                              <li>RED</li>
                              <li>RED</li>
                              <li>RED</li>
                          </ul>
                      </li>
                  </ul>
              </a>
          </section> -->
     </section>



     <div class="btn">
          <a href="index.php?page=shop">Zum Shop</a>
     </div>


     <section class="contact_main section_main" id="contact">
          <section class="contact_question">
          <h3>Kontakt</h3>
               <p>
                    Du hast Fragen ? <br> Kontaktiere uns doch einfach und wir melden uns unverzüglich.
               </p>
          </section>
          <section class="contactinfo">
             <h3>Unser Studio</h3>
               <p>
                    01 555 555 55
               </p>

               <p>
                   <a href="mailto:office@lotusyoga.at?subject=Kontaktformular-Website">office@lotusyoga.at</a>
              </p> <br>

               <p>
                    Siebensterngasse 2
               </p>

               <p>
                    Stock 1 | Tür 13
               </p>

               <p>
                    Österreich, Wien
               </p>

               <p>
                    1070
               </p>

               <div id='map'></div>

           <div class="btn">
             <a href="#contactform_main">Zum Kontaktformular</a>
           </div>

          </section>

         <section class="contactform_main"> <a name="contactform_main"></a>

             <h3>Schreibe uns</h3>

           <form class="form_main" action="#" method="post">

             <div class="form-group">
               <input type="text" name="name" value="" required class="input">
               <span class="highlight"></span>
               <span class="form-bar"></span>
               <label class="label">Vorname | Nachname*</label>
             </div>

             <div class="form-group">
               <input type="text" name="tel" value="" required class="input">
               <span class="highlight"></span>
               <span class="form-bar"></span>
               <label class="label">Telefonnumer*</label>
             </div>

             <div class="form-group">
               <input type="text" name="email" value="" required class="input">
               <span class="highlight"></span>
               <span class="form-bar"></span>
               <label class="label">E-Mailadresse*</label>
             </div>

             <div class="form-group">
               <textarea class="textarea" name="comment" rows="10" cols="100" placeholder="Kommentar" ></textarea>
               <span class="highlight"></span>
               <span class="form-bar"></span>

             </div>

             <div class="btn">
               <input type="submit" class="submit_main input" name="user_message" value="Absenden" >
             </div>

           </form>

          </section>
          

         <!-- <section class="socialmedia_main">
              <h3>Bleib in Kontakt</h3>
                   <ul>
                        <li class="instagram"><a href="#"><i class="fa fa-facebook-official fa-4x" aria-hidden="true"></i></a></li>
                        <li class="facebook"><a href="#"><i class="fa fa-instagram fa-4x" aria-hidden="true"></i></a></li>
                        <li class="youtube"><a href="#"><i class="fa fa-youtube-play fa-4x" aria-hidden="true"></i></a></li>
                  </ul>
         </section> -->

     </section>
  </main>
