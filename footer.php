
  <footer class="footer_main">
    <!-- <ul class="socialmedia_footer">
      <li class="instagram footer_sm-icon"><a href="#">instagram</a></li>
      <li class="facebook footer_sm-icon"><a href="#">Facebook</a></li>
      <li class="youtube footer_sm-icon"><a href="#">youtube</a></li>
    </ul> -->
    <section class="links_footer" >
<?php
    $cnt = 0;
    while( $row = mysqli_fetch_assoc($footer) ){
      if($row['type'] == 'subheadline'){
          if($cnt != 0){
            echo '</ul>';
          }
          echo '<ul><li><h4>'.$row["content"].'</h4></li>';
      }else{
          echo '<li><a href="'.$row["content"].'">'.$row["type"].'</a>';
      }
      if($cnt == mysqli_num_rows($footer)){
        echo '</ul>';
      }
      $cnt++;
    }
    ?>





     <!--   <li><a href="http://www.instagram.com">Instagram</a>
        <li><a href="http://www.youtube.com">Youtube</a>
      </ul>

      <ul>
        <li><h4>Kurse</h4></li>
        <li><a href="#">Yin Yogs</a>
        <li><a href="#">Ashtanga Yoga</a>
        <li><a href="#">Tri Yoga</a>
      </ul>

      <ul>
        <li><h4>Shop</h4></li>
        <li><a href="#">Angebote</a>
        <li><a href="#">Produkte</a>
        <li><a href="#">Rückgaberecht</a>
        <li><a href="#">Lorem</a>
      </ul>

      <ul>
        <li><h4>Lorem</h4></li>
        <li><a href="index.php?page=Impressum"<?php /*if( $page == "Impressum" ) echo ' class="active_footer"'; */?>>Impressum</a></li>
        <li><a href="index.php?page=AGB"<?php /*if( $page == "AGB" ) echo ' class="active_footer"'; */?>>AGB</a></li>
        <li><a href="index.php?page=Datenschutz"<?php /*if( $page == "Datenschutz" ) echo ' class="active_footer"'; */?>>Datenschutz</a></li>
        <li><a href="index.php?page=FAQs"<?php /*if( $page == "FAQs" ) echo ' class="active_footer"'; */?>>FAQs</a></li>
      </ul>-->
    </section>


    <small class="copyright">
      &copy; Lotus Yoga
    </small>

  </footer>

  <!-- jQuery library (served from Google) -->
  <script src="js/jquery-1.12.2.min.js"></script>
  <!-- Main JS File -->
  <script src="js/main.js"></script>
  <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDIkCPnQjJCYkt0fCqvvec7rBEaU9645A&callback=initMap">
    </script>

</body>
</html>
