<section class="content-wrapper footer-content">
	<?php
		while( $row = mysqli_fetch_assoc($agb) ){
			if($row['type'] == 'headline'){
				echo '<h2>'.$row["content"].'</h2>';
			}elseif($row['type'] == 'subheadline'){
              echo '<h3>'.$row["content"].'</h3>';
          }else{
              echo '<p>'.$row["content"].'</p>';
            }
        }
    ?>
</section>
