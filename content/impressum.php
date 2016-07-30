<section class="content-wrapper footer-content">
  <?php
  while( $row = mysqli_fetch_assoc($impressum) ) {
    ?>
    <h2><?php echo $row['headline']; ?></h2>
    <p><?php echo $row['content']; ?></p>
    <!--<h2>Impressum</h2>
    <h3>Yoga Studio - Lotus Yoga</h3>
    <p>Siebensterngasse 2</p>
    <p>A-1070 Wien</p>
    <p>Tel.: 01 555 555 55</p>
    <p>E-Mail: office@lotusyoga.at</p>
    <p>Web: www.lotusyoga.at</p>
    <br>
    <p>Firmenname: Lotus Yoga</p>
    <p>Firmengericht: Handelsgericht Wien</p>
    <p>FN:</p>
    <p>UID:</p>
    <img class="impressum-img" src="../../MS_3/img/logo_impressum.svg" alt="Lotus Yoga Logo"/>-->
    <?php
  }
  ?>
</section>
