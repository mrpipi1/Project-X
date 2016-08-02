
<section class="content-wrapper wrapper_checkout">
    <?php
    include("breadcrumbs.php");
    ?>
    <?php
    if(mysqli_num_rows($cart) == 0){
      ?>
      <div class="empty_cart">Dein Warenkorb ist leer! <a href="index.php?page=Shop">Hier gehts zum Shop.</a></div>
    </section>
      <?php
    }else{
      ?>
      <section class="wrapper_card">
          <div>
              <ul class="card-header">
                  <li class="description">Artikel</li>
                  <li class="actions size_header">Größe</li>
                  <li class="actions quantity_header">Menge</li>
                  <li class="actions_price">Preis</li>
              </ul>
          </div>
          <?php
          $cnt = 0;
          $price = 0;
          $delivery_cost = 5;
          mysqli_data_seek($cart, 0);
          while ($row = mysqli_fetch_assoc($cart)) {
              mysqli_data_seek($products, 0);
              while ($row2 = mysqli_fetch_assoc($products)) {

                  if($row['product_id'] == $row2['id']) {
                      $price += $row2['price']*$row['quantity'];
                      ?>

                      <div class="card-item <?php echo 'cart_item_'.$row['id'].' '; if ($cnt == 0) {echo 'card-item_first';} ?> ">

                          <img src="<?php echo $row2['pic']; ?>" class="img_card" alt="<?php echo $row2['pic']; ?>"/>

                          <ul class="description_card-item">
                              <li><?php echo $row2['_name']; ?></li>
                              <li><?php echo $row2['description']; ?></li>
                          </ul>

                          <ul class="actions_card-item edit-hide edit-hide-<?php echo $row['id']; ?>">
                              <li <?php if($row['product_size'] == 'onesize'){echo 'class="onesize"';} ?>><?php echo strtoupper($row['product_size']); ?></li>
                              <li><?php echo $row['quantity']; ?></li>
                          </ul>

                          <ul class="actions_card-item edit-show edit-show-<?php echo $row['id']; ?>">
                            <li><ul class="selects">
                                      <?php

                                                mysqli_data_seek($sizes, 0);
                                                $size_cnt = 0;
                                                while ($row4 = mysqli_fetch_assoc($sizes)) {
                                                    //print_r($row3);

                                                    if($row['product_id'] == $row4['product_id']) {
                                                        $size_cnt++;
                                                        if($row4['stock'] > 0){
                                                            if($row4['size'] == 'onesize'){
                                                                echo "<li class='size size-selected ".$row['id']." no-size'>".strtoupper($row4['size'])."</li>";
                                                              }else if($row4['size'] == $row['product_size']){
                                                                echo "<li class='size size-selected ".$row['id']."'>".strtoupper($row4['size'])."</li>";
                                                              }else{
                                                                  echo "<li class='size ".$row['id']."'>".strtoupper($row4['size'])."</li>";
                                                              }
                                                        }else{
                                                                echo "<li class='size-out'>".strtoupper($row4['size'])."</li>";
                                                        }
                                                    }
                                                }
                                                if($size_cnt == 0){
                                                  echo "<li class='size size-selected no-size'>'onesize'</li>";
                                                }
                                          ?>
                                        </ul>
                                    </li>

                            <li class="farbe"><?php echo $row2['color']; ?></li>
                            <li><div class="quantity_wrapper">
                        <span id="down"  onclick="updateSpinner(this, <?php echo $row['id']; ?>);">-</span><input id="<?php echo $row['id']; ?>" value="<?php echo $row['quantity'];?>" type="text" class=" quantity <?php echo $row['id'];?>"/><span id="up" onclick="updateSpinner(this, <?php echo $row['id']; ?>);">+</span>
                    </div></li>



                    <!--<div class="color colorpicker-red"></div>
                    <div class="color colorpicker-white"></div>-->
                </ul>


                          <div class="price_wrapper"><?php echo $row2['price']; ?></div>
                          <div class="delete_wrapper">
                            <span class="edit edit-show edit-show-<?php echo $row['id']; ?>" onClick="save_edited_cart_item('<?php echo $row['product_id']; ?>','<?php echo $row['id']; ?>')"><i class="fa fa-floppy-o" aria-hidden="true"></i></span>
                            <span class="edit edit-hide edit-hide-<?php echo $row['id']; ?>" onClick="edit_cart_item('<?php echo $row['id']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                            <span class="delete edit-hide edit-hide-<?php echo $row['id']; ?>" onClick="delete_from_cart(<?php echo $row['id']; ?>)"><i class="fa fa-ban" aria-hidden="true"></i></span>
                          </div>

                      </div>
                      <?php
                  }
              }
              $cnt++;
          }
          if($price >= 40){
              $delivery_cost = 0;
          }
          $price += $delivery_cost;

          ?>

      </section>

      <div class="sum_card_wrapper">

          <ul class="versand-datum">
              <li><h5>Vorraussichtliche Lieferung:</h5></li>
              <li>in 3 - 5 Werktagen</li>
          </ul>
          <ul class="sum_card">
              <li>Versandkosten: <?php echo $delivery_cost; ?> €</li>
              <li><h5>Gesammtpreis: </h5> <?php echo $price; ?> €</li>
              <li class="small-text">* alle Preise inkl. MwSt.</li>
              <li class="small-text">* Versandkostenfrei ab 40€</li>
          </ul>
      </div>
      <div class="btn-wrapper_checkout">
          <div  class="btn_checkout">
              <a href="index.php?page=Detailansicht">zurück</a>
          </div>

          <div class="btn_checkout btn_cart_next">
              <?php if(isset($_SESSION['user'])){
                  echo '<a href="index.php?page=Adressen" >weiter</a>';
              }else{
                  echo '<a href="index.php?page=Anmelden">weiter</a>';
              }
              ?>
          </div>
      </div>

      </section>

      <?php
    $cnt = 0;
    $price = 0;
    $delivery_cost = 5;
    while ($row = mysqli_fetch_assoc($cart)) {
        mysqli_data_seek($products, 0);
        while ($row2 = mysqli_fetch_assoc($products)) {

            if($row['product_id'] == $row2['id']) {
                $price += $row2['price']*$row['quantity'];
                ?>

                <div class="card-item <?php echo 'cart_item_'.$row['id'].' '; ?> ">

                    <img src="<?php echo $row2['pic']; ?>" class="img_card" alt="<?php echo $row2['pic']; ?>"/>

                    <ul class="description_card-item">
                        <li><?php echo $row2['_name']; ?></li>
                        <li><?php echo $row2['description']; ?></li>
                    </ul>

                    <ul class="actions_card-item">
                        <li><?php echo $row['product_size']; ?></li>
                        <li class="farbe"><?php echo $row2['color']; ?></li>
                        <li><?php echo $row['quantity']; ?></li>
                    </ul>


                    <div class="price_wrapper"><?php echo $row2['price']; ?></div>
                    <div class="delete_wrapper"><a href="#" class="delete" onClick="delete_from_cart(<?php echo $row['id']; ?>)"><i class="fa fa-ban" aria-hidden="true"></i></a></div>

                </div>
                <?php
            }
        }
        $cnt++;
    }
    if($price > 50){
        $delivery_cost = 0;
    }
  }
