<?php include ('content/landingpage.php');?>

<main class="main">

     <section class="about_us section_main" id="about_us">
         <h2>
             Über uns
         </h2>
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
          <h3 class="employees_headline ">  <!-- spezieller stylen als andere H3 -->
              Mitarbeiter
          </h3>
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
             <h2><?php echo $row['fullname']; ?></h2>
             <p>
              <?php echo $row['description']; ?>
            </p>
         </li>

        </ul>
        <?php
      }
      ?>
        <!--<ul class="employees_main-info">


          <li>
             <ul class="employees_main-contact">
               <li><img src="img/mitarbeiter/1.png" alt="lorem ipsum"/></li>
               <li>0664 555 555<i class="fa icon-mobile"></i></li>
               <li><a href="mailto:j.ulrike@lotusyoga.at?subject=lorem">j.ulrike@lotusyoga.at</a><i class="fa icon-mail"></i></li>
             </ul>
          </li>
          <li>
             <h2>Julia Ulrike</h2>
             <p>
             Hallo, mein Name ist Julia Ulrike. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
         </li>

        </ul>

        <ul class="employees_main-info">
          <li>
             <ul class="employees_main-contact">
               <li><img src="img/mitarbeiter/2.png" alt="lorem ipsum"/></li>
               <li>0664 555 555</li>
               <li><a href="mailto:l.thekla@lotusyoga.at?subject=lorem">l.thekla@lotusyoga.at</a></li>
             </ul>
          </li>
          <li>
             <h2>Lisbeth Thekla</h2>
             <p>
             Hallo, mein Name ist Lisbeth Thekla. Ich bin  ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
         </li>
        </ul>

        <ul class="employees_main-info">
          <li>
             <ul class="employees_main-contact">
               <li><img src="img/mitarbeiter/3.png" alt="lorem ipsum"/></li>
               <li>0664 555 555</li>
               <li><a href="mailto:c.augustine@lotusyoga.at?subject=lorem">c.augustine@lotusyoga.at</a></li>
             </ul>
          </li>
          <li>
             <h2>Clara Augustine</h2>
             <p>
             Hallo, mein Name ist Clara Augustine. Ich bin  ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
         </li>
        </ul>

        <ul class="employees_main-info">
          <li>
             <ul class="employees_main-contact">
               <li><img src="img/mitarbeiter/4.png" alt="lorem ipsum"/></li>
               <li>0664 555 555</li>
               <li><a href="mailto:l.barbara@lotusyoga.at?subject=lorem">l.barbara@lotusyoga.at</a></li>
             </ul>
          </li>
          <li>
             <h2>Leonie Barbara</h2>
             <p>
             Hallo, mein Name ist Lenoie Barbara. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
         </li>
        </ul>

        <ul class="employees_main-info">
          <li>
             <ul class="employees_main-contact">
               <li><img src="img/mitarbeiter/5.png" alt="lorem ipsum"/></li>
               <li>0664 555 555</li>
               <li><a href="mailto:z.kristiane@lotusyoga.at?subject=lorem">z.kristiane@lotusyoga.at</a></li>
             </ul>
          </li>
          <li>
             <h2>Zella Kristiane</h2>
             <p>
             Hallo, mein Name ist Zella Kristiane. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
         </li>
        </ul>

        <ul class="employees_main-info">
          <li>
             <ul class="employees_main-contact">
               <li><img src="img/mitarbeiter/6.png" alt="lorem ipsum"/></li>
               <li>0664 555 555</li>
               <li><a href="mailto:l.luri@lotusyoga.at?subject=lorem">l.luri@lotusyoga.at</a></li>
             </ul>
          </li>
          <li>
             <h2>Laurenz Luri</h2>
             <p>
             Hallo, mein Name ist Laurenz Luri. Ich bin  ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
         </li>
        </ul>

        <ul class="employees_main-info">
          <li>
             <ul class="employees_main-contact">
               <li><img src="img/mitarbeiter/7.png" alt="lorem ipsum"/></li>
               <li>0664 555 555</li>
               <li><a href="mailto:e.sophie@lotusyoga.at?subject=lorem">e.sophie@lotusyoga.at</a></li>
             </ul>
          </li>
          <li>
             <h2>Elli Sophie</h2>
             <p>
             Hallo, mein Name ist Elli Sophie. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
         </li>
        </ul>

        <ul class="employees_main-info">
          <li>
             <ul class="employees_main-contact">
               <li><img src="img/mitarbeiter/8.png" alt="lorem ipsum"/></li>
               <li>0664 555 555</li>
               <li><a href="mailto:l.bernhard@lotusyoga.at?subject=lorem">l.bernhard@lotusyoga.at</a></li>
             </ul>
          </li>
          <li>
             <h2>Lukas Bernhard</h2>
             <p>
             Hallo, mein Name ist Lukas Bernhard. Ich bin  ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
         </li>
        </ul>

        <ul class="employees_main-info">
          <li>
             <ul class="employees_main-contact">
               <li><img src="img/mitarbeiter/9.png" alt="lorem ipsum"/></li>
               <li>0664 555 555</li>
               <li><a href="mailto:k.antonia@lotusyoga.at?subject=lorem">k.antonia@lotusyoga.at</a></li>
             </ul>
          </li>
          <li>
             <h2>Katrin Antonia</h2>
             <p>
             Hallo, mein Name ist Katrin Antonia. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
         </li>
        </ul>-->

      </section>

  <div class="parallax parallax1">
    <div class="parallax_textoverlay">
      <h4>Zufriedenheit</h4>
    </div>
  </div>



   <section class="courses_main section_main" id="course">

       <h2> <!--<a name="course"></a>-->
           Kurse
       </h2>

      <!-- <h3 class="courses_headline">Anfänger</h3>
      <section class="beginners-courses_main">
          <ul>
            <li><img src="img/kurse/yin_yoga.svg" alt="" /></li>
            <li><h5>yin yoga</h5></li>
            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
          </ul>

          <ul>
            <li><img src="img/kurse/ashtanga_yoga.svg" alt="" /></li>
            <li><h5>ashtanga yoga</h5></li>
            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
          </ul>

          <ul>
            <li><img src="img/kurse/tri_yoga.svg" alt="" /></li>
            <li><h5>tri yoga</h5></li>
            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
          </ul>
      </section> -->

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


          <!--<ul>
            <li><img src="img/kurse/ashtanga_yoga.svg" alt="" /></li>
            <li><h5>ashtanga yoga</h5></li>
            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
          </ul>

          <ul>
            <li><img src="img/kurse/tri_yoga.svg" alt="" /></li>
            <li><h5>tri yoga</h5></li>
            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
          </ul>-->
      </section>
   </section>

  <div class="parallax parallax2">
    <div class="parallax_textoverlay">
      <h4>Gelassenheit</h4>
    </div>
  </div>



      <section class="saleproducts_main section_main" id="saleproducts_main">

          <h2>Produkt Aktion</h2>

          <?php
          while( $row = mysqli_fetch_assoc($products) ){
          ?>
          <a class="product product-main" href="index.php?page=Detailansicht&product_id=<?php echo $row['id'] ?>">
            <img class="product-img" src="<?php echo $row['pic'] ?>" alt="<?php echo $row['products_name'] ?>"/>
            <ul class="info">
                <li><?php echo $row['products_name'] ?></li>
                <li><?php echo $row['price'] ?></li>
            </ul>
            <ul class="overlay overlay-checkout" >
                <li><h1><?php echo $row['products_name'] ?></h1></li>
                <li><p><?php echo $row['price'] ?></p></li>
                <li>
                    <ul class="colors colors-checkout">
                        <li>RED</li>
                        <li>RED</li>
                        <li>RED</li>

                        
                    </ul>
                </li>
            </ul>
          </a>
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
          <h2>Kontakt</h2>
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

           <form class="form_main" method="post">

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
               <input type="submit" class="submit_main input" name="name" value="Absenden" >
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
