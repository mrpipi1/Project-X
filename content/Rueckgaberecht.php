<section class="content-wrapper footer-content">
  <?php
  while( $row = mysqli_fetch_assoc($rueckgaberecht) ) {
    ?>
    <h2><?php echo $row['headline'];?></h2>
    <p><?php echo $row['content'];?></p>
    <?php } ?>

</section>
