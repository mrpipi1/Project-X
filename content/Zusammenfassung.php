<section class="content-wrapper wrapper_checkout">

<?php
include("breadcrumbs.php");

while( $row = mysqli_fetch_assoc($orders) ) {
?>

    <!-- Adressen -->
    <section class="wrapper_form wrapper_form_zusammenfassung">
      <?php
      if(isset($_SESSION['guest_id'])){
        ?>
        <section class="billing-address address_zusammenfassung">
            <h2 class="hl_checkout">Rechnungsadresse</h2>
            <form class="form_checkout" action="#" method="post">

              <?php
              $reciept_address_all = $row['receipt_address'];
              $reciept_address_array = explode(',', $reciept_address_all);
              $reciept_address = $reciept_address_array[0];
              $reciept_city = $reciept_address_array[2];
              $reciept_zip = $reciept_address_array[1];
              ?>

                <div class="form-group">
                    <input type="text" name="address" value="<?php echo $reciept_address?>" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Strasse | Hausnummer*</label>
                    <span class="error">
                </div>

                <div class="form-group">
                    <input type="text" name="city" value="<?php echo $reciept_city?>" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Stadt*</label>
                    <span class="error">
                </div>
                <div class="form-group">
                    <input type="text" name="zip_code" value="<?php echo $reciept_zip?>" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Postleitzahl*</label>
                    <span class="error">
                </div>

                <div class="btn_checkout btn_big-checkout change_reciept_address">
                    <input type="submit" name="change_reciept_address" value="Ändern" class="btn_big-checkout input checkout_default_address_submit hange_reciept_address">
                </div>

            </form>

        </section>

        <section class="address_zusammenfassung shipping-address">
            <h2 class="hl_checkout hl_shipping_address">Lieferadresse</h2>
            <form class="form_checkout" action="#" method="post">

              <div class="raidiobutton_wrapper_shipping">
                <input type="checkbox" name="is_shipping_address" id="is_shipping_address"  checked/>
                <label for="is_shipping_address" class="">Gleich wie Rechnungsadresse</label>
              </div>

              <div class="shipping_form_wrapper">

                <?php
                $shipping_address_all = $row['delivery_address'];
                $shipping_address_array = explode(',', $shipping_address_all);
                $shipping_address = $shipping_address_array[0];
                $shipping_city = $shipping_address_array[2];
                $shipping_zip = $shipping_address_array[1];
                ?>

                <div class="form-group">
                    <input type="text" name="address" value="<?php echo $shipping_address ?>" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Strasse | Hausnummer</label>
                    <span class="error">
                </div>

                <div class="form-group">
                    <input type="text" name="city" value="<?php echo $shipping_city ?>" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Stadt*</label>
                    <span class="error">
                </div>
                <div class="form-group">
                    <input type="text" name="zip_code" value="<?php echo $shipping_zip ?>" required class="input">
                    <span class="highlight"></span>
                    <span class="form-bar"></span>
                    <label class="label">Postleitzahl*</label>
                    <span class="error">
                </div>

                <div class="btn_checkout btn_big-checkout change_delivery_address">
                    <input type="submit" name="change_delivery_address" value="Ändern" class="btn_big-checkout input checkout_receipt_address_submit">
                </div>
              </div>
            </form>
        </section>
        <?php
        //
      }elseif(isset($_SESSION['user']['user_id'])){
          ?>
          <section class="billing-address address_zusammenfassung">

              <h2 class="hl_checkout">Rechnungsadresse</h2>

              <form class="form_checkout" action="#" method="post">

                <?php
                $reciept_address_all = $row['receipt_address'];
                $reciept_address_array = explode(',', $reciept_address_all);
                $reciept_address = $reciept_address_array[0];
                $reciept_city = $reciept_address_array[2];
                $reciept_zip = $reciept_address_array[1];
                ?>
                  <div class="form-group">
                      <input type="text" name="address" value="<?php echo $reciept_address?>" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Strasse | Hausnummer*</label>
                      <span class="error">
                  </div>


                  <div class="form-group">
                      <input type="text" name="city" value="<?php echo $reciept_city?>" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Stadt*</label>
                      <span class="error">
                  </div>
                  <div class="form-group">
                      <input type="text" name="zip_code" value="<?php echo $reciept_zip?>" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Postleitzahl*</label>
                      <span class="error">
                  </div>

                  <div class="btn_checkout btn_big-checkout change_reciept_address">
                      <input type="submit" name="change_reciept_address" value="Ändern" class="btn_big-checkout input checkout_receipt_address_submit">
                  </div>

              </form>

          </section>


          <section class="shipping-address address_zusammenfassung">

              <h2 class="hl_checkout hl_shipping_address">Lieferadresse</h2>

              <form class="form_checkout" action="#" method="post">
                <?php
                $shipping_address_all = $row['delivery_address'];
                $shipping_address_array = explode(',', $shipping_address_all);
                $shipping_address = $shipping_address_array[0];
                $shipping_city = $shipping_address_array[2];
                $shipping_zip = $shipping_address_array[1];
                ?>

                <div class="raidiobutton_wrapper_shipping">
                  <input type="checkbox" name="is_shipping_address" id="is_shipping_address"  checked/>
                  <label for="is_shipping_address" class="">gleich wie Rechnungsadresse</label>
                </div>

                <div class="shipping_form_wrapper">

                  <div class="form-group">
                      <input type="text" name="address" value="<?php echo $shipping_address ?>" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Strasse | Hausnummer*</label>
                      <span class="error">
                  </div>

                  <div class="form-group">
                      <input type="text" name="city" value="<?php echo $shipping_city ?>" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Stadt*</label>
                      <span class="error">
                  </div>
                  <div class="form-group">
                      <input type="text" name="zip_code" value="<?php echo $shipping_zip ?>" required class="input">
                      <span class="highlight"></span>
                      <span class="form-bar"></span>
                      <label class="label">Postleitzahl*</label>
                      <span class="error">
                  </div>

                  <div class="btn_checkout btn_big-checkout change_delivery_address">
                      <input type="submit" name="change_delivery_address" value="Ändern" class="btn_big-checkout input">
                  </div>
                </div>

              </form>

          </section>
          <?php

        }
        ?>
    </section>

        <section class="wrapper_shipping-info wrapper_shipping-info_zusammenfassung">
          <?php
          $shipping_info = get_specific_content_data('delivery_options', 'id', $row['delivery_option_id']);
          $payment_info = get_specific_content_data('payment_options', 'id', $row['payment_option_id']);

            while( $row = mysqli_fetch_assoc($shipping_info) ){
              $delivery_option = $row['_name'];
          ?>
            <section class="shipping-info info_zusammenfassung">

                <h2 class="hl_checkout">Versandart:</h2>

                <form class="form_shipping" action="#" method="post">


                    <p class="radiobutton_wrapper">
                        <input type="radio" id="post" name="delivery_option" class="radiobutton" <?php if($delivery_option == 'Post'){echo 'checked';} ?>/> <label for="post">Post (5€ Versandkosten, ab 40€ Versandkostenfrei.)</label>
                    </p>

                    <p class="radiobutton_wrapper">
                        <input type="radio" id="DHL" name="delivery_option" class="radiobutton" <?php if($delivery_option == 'DHL'){echo 'checked';} ?>/> <label for=DHL>DHL (5€ Versandkosten, ab 40€ Versandkostenfrei.)</label>
                    </p>

                    <p class="radiobutton_wrapper">
                        <input type="radio" id="express" name="delivery_option" class="radiobutton" <?php if($delivery_option == 'Expressversand'){echo 'checked';} ?>/> <label for="express">Expreeversand (10€ Versandkosten.)</label>
                    </p>

                </form>

            </section>
            <?php
          }
            while( $row = mysqli_fetch_assoc($payment_info) ){
            $payment_option = $row['_name'];
          ?>
            <section class="shipping-info info_zusammenfassung">

                <h2 class="hl_checkout">Zahlungsart:</h2>

                <form class="form_payment" action="#" method="post">
                    <p class="radiobutton_wrapper">
                        <input type="radio" id="vorkasse" name="payment_option" class="radiobutton" <?php if($payment_option == 'Vorkasse'){echo 'checked';} ?>/> <label for="vorkasse">Vorkasse (Das Paket wird nach eingang der Zahlung verschickt.)</label>
                    </p>

                    <p class="radiobutton_wrapper">
                        <input type="radio" id="rechnung" name="payment_option" class="radiobutton" <?php if($payment_option == 'Rechnung'){echo 'checked';} ?>/> <label for=rechnung>Rechnung (Zahlung binnen 14 Tagen nach Erhat der Ware.)</label>
                    </p>

                    <p class="radiobutton_wrapper">
                        <input type="radio" id="nachname" name="payment_option" class="radiobutton" <?php if($payment_option == 'Nachname'){echo 'checked';} ?>/> <label for="nachname">Nachname (Bezahlung bei lieferung des Pakets.)</label>
                    </p>
                </form>
            </section>
            <?php
          }
              ?>

</section>
<?php
}
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
                <li>Vorraussichtliche Lieferung:</li>
                <li>in 3 - 5 Werktagen</li>
            </ul>

            <ul class="sum_card">
                <li>Versandkosten: <?php echo $delivery_cost; ?> €</li>
                <li>Gesammtpreis: <?php echo $price; ?> €</li>
                <li class="small-text">* alle Preise inkl. MwSt.</li>
                <li class="small-text">* Versandkostenfrei ab 40€</li>
            </ul>
        </div>


        <!-- AGB und Datenschutzbestimmungen akzeptieren -->
        <form class="form_confirmation" action="#" method="post">

            <p class="form_confirmation_content">
                <input type="checkbox" id="agbs" name="agb-confirmation"/>
                <label class="label_normal" for="agbs">Ich stimme den <a href="#">Datenschutzbestimmungen</a> und <a href="#">AGBs</a> zu.*</label>
            </p>

        </form>
    </section>
    <div class="btn-wrapper_checkout">
        <div  class="btn_checkout">
            <a href="index.php?page=Versand">zurück</a>
        </div>

        <div class="btn_checkout btn_order_final" id="<?php if(isset($_SESSION['user']['user_id'])){echo $_SESSION['user']['user_id'];}elseif(isset($_SESSION['guest_id'])){echo $_SESSION['guest_id'];} ?>">
            <span>zahlungspflichtig bestellen</span>
        </div>
    </div>
    <?php
  //  }
     ?>

</section>
