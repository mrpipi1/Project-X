// ###*****************###
//    *** MAIN JS ***
// ###*****************###


// ### TOGGLE .SHOWING CLASS ON CLICK - 'MOBILE-NAV' ###
$('.handle').on('click', function(){
  $('nav ul').toggleClass('showing');
});

// ### FIXED HEADER onScroll
if($('header').hasClass('header_home')){
  $(window).scroll(function(){
    //var headerOffSetTop = 530;
      var height = Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
      var headerOffSetTop = height - 65;
      var headerOffSet = height - 1;
      if ($(window).scrollTop() >= headerOffSetTop) {
         $('.header').addClass('fixed');
      }
      else {
         $('.header').removeClass('fixed');
      }
      if($(document).scrollTop() > headerOffSet){
        $('.header').addClass('tiny');
      }else{
        $('.header').removeClass('tiny');
      }

  });
}else{
  $('.header').addClass('fixed');
  $('.header').addClass('tiny');

}

// ###  ADD ACTIVE CLASS
$('input[type="checkbox"]').change(function() {
    if($(this).is(':checked')) {
        $(this).parent().addClass('checkbox-active');
    } else {
        $(this).parent().removeClass('checkbox-active');
    }
});

// ### FIXED SHOP CATEGORY ###

$(window).scroll(function(){
  var ShopCategories = $('.shop-categories'),
      scroll = $(window).scrollTop();

  if (scroll >= 132) ShopCategories.addClass('fixed')
  else ShopCategories.removeClass('fixed');
});


// ### SMOOTH SCROOL TO ANCHOR ###
$('.nav_main a').click(function(){
  var scrollOffSet = 43;
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset() .top - scrollOffSet
    }, 1200);
    return false;
});

// ### SET ACTIVE CLASS TO NAV DURING SCROLL ###
$(document).ready(function () {
	$(document).on("scroll", onScroll);
});


function onScroll(event){
  if($('header').hasClass('header_home')){
	var scrollPosition = $(document).scrollTop();
   $('.nav_main a').each(function () {
     var currentLink = $(this);
       if(currentLink.attr("href").indexOf('#') > -1){
           var refElement = $(currentLink.attr("href"));
           if (refElement.position().top <= scrollPosition
               && refElement.position().top + refElement.height() > scrollPosition) {
               $('.nav_main ul li a').removeClass("active_nav");
               currentLink.addClass("active_nav");
           }
           else {
               currentLink.removeClass("active_nav");
           }
       }
   });
 }
}

// ### PRODUCTVIEW HOVER ###
 $(document).ready(function() {
     $(".img-container").hover(function () {
         $('.zoomed-picture img').attr("src", $(this).attr("src"));
     }, function () {
         $('.zoomed-picture img').attr("src", $(".zoomed-picture img").attr("src"));
     })
 });

// Produktmengenauswahl
 /* Mengenwahl, nur con 0 bis 11 => max value müssen wir dann aus der db holn, eingabe von user muss noch validiert werden ( auch ohne + & - */
 function updateSpinner(obj, cart_id){
     var contentObj = document.getElementById(cart_id);
     console.log(contentObj);
       var value = parseInt(contentObj.value);
       console.log(value);
       if(obj.id == "down") {
           if(value != 0 ){
               value--;
           }
       } else {
           if(value < 11){
               value++;
           }
       }
       contentObj.value = value;
 }
 function updateSpinner_detail(obj){
     var contentObj = document.getElementById('content');
       var value = parseInt(contentObj.value);
       if(obj.id == "down") {
           if(value != 0 ){
               value--;
           }
       } else {
           if(value < 11){
               value++;
           }
       }
       contentObj.value = value;
 }

// ### GOOGLE MAPS API - VIEW CONFIGS ###
function initMap() {

    var Lat = Number($('#map').attr('lat'));
    var Lng = Number($('#map').attr('lng'));
    var myLatLng = {lat: Lat, lng: Lng};


  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatLng,
    scrollwheel: false
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Lotus Yoga'
  });
}

function add_to_Cart(user_id, guest_id, product_id){
    var size = $(".size-selected").text();
    var quantity = $(".quantity").val();
    if(size && quantity > 0) {
      if(quantity > 11){
        $('.error_detailansicht').text('');
        $('.error_detailansicht').append('Die maximale bestellmenge für dieses Produkt sind 11 Stück. Wenn Du mehr bestellen möchtest kontaktiere uns bitte unter <a href="mailto:office@lotusyoga.at?subject=order_quantity">office@lotusyoga.at</a> oder <a href="tel:0155555555">01 555 555 55</a>');
        $('.errormessage_detail_wrapper').css('display', 'block');
      }else{
        $.post('logic/add_to_cart.php', {
            user_id: user_id,
            guest_id: guest_id,
            product_id: product_id,
            size: size,
            quantity: quantity
          }, function (response, status) {
              if (response == 1 && status == 'success') {
                  window.location.href = "index.php?page=shop";
                  $('.error_detailansicht').text('');
                  $('.errormessage_detail_wrapper').css('display', 'none');
              } else if(response == 2 && status == 'success'){
                  $('.error_detailansicht').text('');
                  $('.error_detailansicht').text('Menge leider nicht verfügbar.');
                  $('.errormessage_detail_wrapper').css('display', 'block');
              } else {
                  $('.error_detailansicht').text('');
                  $('.error_detailansicht').text('Produkt konnte nicht in den Warenkorb hinzugefügt werden.');
                  $('.errormessage_detail_wrapper').css('display', 'block');
              }
          });
      }
    }else{
      $('.error_detailansicht').text('');
      $('.error_detailansicht').text('Du hast kein Produkt ausgewählt.');
      $('.errormessage_detail_wrapper').css('display', 'block');
    }
}

function delete_from_cart(cart_id){
        $.post('logic/delete_from_cart.php', {
            cart_id: cart_id
        }, function (response, status) {
            if (response == 1 && status == 'success') {
                location.reload();
            } else {
                console.log('fehler');
            }
        });
}

function delete_from_cart(cart_id){
        $.post('logic/delete_from_cart.php', {
            cart_id: cart_id
        }, function (response, status) {
            if (response == 1 && status == 'success') {
                location.reload();
            } else {
                console.log('fehler');
            }
        });
}

function edit_cart_item(cart_id){

       $('.edit-hide-'+cart_id).hide();
        $('.edit-show-'+cart_id).css('display', 'flex');
}

function save_edited_cart_item(product_id, cart_id){
  // var class_id = "."+product_id;
   //var size = $(class_id).text();
  var size = $('.size-selected.'+cart_id).text();
    var quantity = $(".quantity."+cart_id).val();
    if(size && quantity > 0) {
       $.post('logic/update_cart_item.php', {
            product_id: product_id,
            cart_id: cart_id,
            size: size,
            quantity: quantity
          }, function (response, status) {
            if(response == 1 && status == 'success'){
                location.reload();
            }
          });
    }
}
$('.form-group input[name="gutschein"]').on('input', function(event){
      var input = $(this);
      var coupon_code = input.val();
      clearTimeout(check_coupon);
      var check_coupon = setTimeout(function() {
        if(coupon_code){
           $.post('logic/check_coupon.php', {
            coupon_code: coupon_code,
          }, function (response, status) {
            console.log(response);
            console.log(status);
            if(response != 0 && status == 'success'){
                console.log('erfolgreich werte abziehen irgendwie');
                console.log(response);
                 input.parent().children('.form-bar').css('display', 'block');
                 input.parent().children('.error').text('');
            }else{
                console.log('error display');
                console.log($('.form-group input[name="gutschein"]'));
                input.parent().children('.error').text('Gutscheincode ist ungültig!');
                input.parent().children('.form-bar').css('display', 'none');
            }
          });
        }
    // do stuff when user has been idle for 1 second
      }, 1000);
});





$('.size').on('click', function(){
    $(".size").removeClass("size-selected");
    $(this).addClass( "size-selected" );
})

$('.raidiobutton_wrapper_shipping').click(function(){
  if(!$('.raidiobutton_wrapper_shipping input').prop('checked')){
    $('.raidiobutton_wrapper_shipping input').removeAttr('checked');
    $('.shipping_form_wrapper').css('display','block');
  }else{
    $('.raidiobutton_wrapper_shipping input').attr('checked');
    $('.shipping_form_wrapper').css('display','none');
  }
});


$('.profile_shop_link').click(function(){
  $('.send_password_message').css('display', 'block');
});

function send_user_email(user_email, subject, user_id = ''){
        $.post('logic/send_user_email.php', {
            user_mail: user_email, subject: subject, user_id: user_id
        }, function (response, status) {
            if (status == 'success' && response == true) {
                $('.email_was_send').css('display', 'block');
                $('.profile_error_message_password').css('display', 'none');
            } else {
                $('.profile_error_message_password').css('display', 'block');
            }
        });
}

  $('.confirm').click(function(){
    $('.send_password_message').css('display', 'none');
    $('.profile_shop_link').css('display', 'none');
    var user_email = $('.profile_info_value_email').value;
    send_user_email(user_email, 'new_password');
  });

  $('.confirm_anmelden').click(function(){
    $('.send_password_message').css('display', 'none');
    $('.profile_shop_link').css('display', 'none');
    var user_email = $('.input_anmelden_email').value;
    send_user_email(user_email, 'new_password');
  });


  $('.deny').click(function(){
    $('.send_password_message').css('display', 'none');
  })

$('.pencil_frontend').click(function(){
  $('.user_info_wrapper').toggleClass('showing_form');
  if($('.user_info_wrapper').hasClass('showing_form')){
    $('.user_info_wrapper').css('display', 'none');
    $('.user_info_change_wrapper').css('display', 'block');
  }else{
  $('.user_info_wrapper').css('display', 'block');
  $('.user_info_change_wrapper').css('display', 'none');
}});

$(".cart").hover(
    function () {
        var offset_right = $( window ).width() - $('.cart').position().left - 140;
        if($('#cart-header-quantity').text()) {
            $('#cart-display').css('top', $('.header').height() + 'px');
            $('#cart-display').css('right', offset_right + 'px');
            $("#cart-display").show();
        }
    },
    function () {
        $("#cart-display").hide();
    }
);

function update_user_profile(cart_id){
        // $.post('iwas.php', {
        //     //data
        // }, function (response, status) {
        //     if (status == 'success') {
        //         location.reload();
        //     } else {
        //         $('.profile_error_message_user').css();
        //     }
        // });
}

function insert_or_update(page, action, id){
    var values = {};
    $.each($('.form_profile input').serializeArray(), function(i, field) {
        values[field.name] = field.value;
        if(i == $('.form_profile').serializeArray().length -1 ){
                var data = {page: page, action: action, id: id, data: values};
            console.log(values);
            $.post('backend/logic/insert_or_update_contents.php', data, function(response, status) {
                if(response == 1 && status == 'success'){
                    $('.profile_success_message_user').css('display', 'block');
                    setTimeout(function(){ $('.profile_success_message_user').css('display', 'none'); }, 10000);
                }else{
                    $('.profile_error_message_user').css('display', 'block');
                }
            });
        }
    });
}

function insert_or_update_checkout_address(action, step){
    var billing_values = {};
    var shipping_values = {};
    var error = 0;
    var check_shipping = $('#is_shipping_address:checked').length > 0 ? false : true;

    $.each($('.checkout_billing input').serializeArray(), function(i, field) {
        var el = $('.checkout_billing input').eq(i);
        if(field.value != ""){
          billing_values[field.name] = field.value;
          el.parent().children('.error').text('');
          el.removeClass('invalid');
        }else{
          el.addClass('invalid');
          el.parent().children('.error').text('Dieses Feld darf nicht leer sein');
          error++;
        }
        if(i == $('.checkout_billing input').serializeArray().length -1 ){
            $.each($('.checkout_shipping input').serializeArray(), function(j, field2) {
              var el2 = $('.checkout_shipping input').eq(j+1);
              console.log(el2)
                      if(field2.value == "" && check_shipping == true){
                                el2.addClass('invalid');
                                el2.parent().children('.error').text('Dieses Feld darf nicht leer sein');
                                error++;
                              }else{
                                el2.parent().children('.error').text('');
                                el2.removeClass('invalid');
                                 shipping_values[field2.name] = field2.value;
                              }

                if (j == $('.checkout_shipping input').serializeArray().length - 1) {
                  if(error == 0){
                    var data = {action: action, billing: billing_values, shipping: shipping_values, step: step};
                    $.post('logic/insert_checkout.php', data, function (response, status) {
                        console.log(response);
                        console.log(status);
                        if (response != 0 && status == 'success') {
                            window.location.href = "index.php?page=Versand&order="+response;
                            /*$('.profile_success_message_user').css('display', 'block');
                             setTimeout(function(){ $('.profile_success_message_user').css('display', 'none'); }, 10000);*/
                        } else {
                            $('.error_message_checkout').text('');
                            $('.error_message_checkout').text('Ein Fehler ist aufgetreten!');
                            $('.errors_checkout_wrapper').css('display', 'block');
                        }
                    });
                  }else{
                      console.log('fields empty '+error);
                  }
                }
            });
        }
    });
}

function insert_or_update_checkout_payment(action, step) {
    var delivery_values = $('.form_shipping input:checked').attr('id');
    var payment_values = $('.form_payment input:checked').attr('id');
    var coupon_code = $('.form_payment input[name=gutschein]').val();
    var guest_id = $('.form_payment input[name=guest_id]').val();
    var user_id = $('.form_payment input[name=user_id]').val();
    var data = {action: action, delivery: delivery_values, payment: payment_values, step: step, coupon: coupon_code, user_id: user_id, guest_id: guest_id};
    $.post('logic/insert_checkout.php', data, function (response, status) {
        console.log(response);
        console.log(status);
        if (response != 0 && status == 'success') {
            window.location.href = "index.php?page=Zusammenfassung";
            /*$('.profile_success_message_user').css('display', 'block');
             setTimeout(function(){ $('.profile_success_message_user').css('display', 'none'); }, 10000);*/
        } else {
            $('.error_message_checkout').text('');
            $('.error_message_checkout').text('Ein Fehler ist aufgetreten!');
            $('.errors_checkout_wrapper').css('display', 'block');
        }

    });

}



//validation contact form


//validation login form

$('.form-group input[type="text"][name!="gutschein"] , .form-group input[type="password"]').keyup(function(event) {
    var input = $(this);
    var re;
    var errtxt = 'Bitte geben Sie einen gültigen Wert ein!';
    if($(this).val()) {
        if ($(this).attr('name') == '_name' || $(this).attr('name') == 'name') {
            re = /^[a-z0-9_-]{3,16}$/;
            errtxt = 'Bitte geben Sie einen gültigen Namen ein!';
        } else if ($(this).attr('name').indexOf('password') > -1) {
            re = /^[a-z0-9_-]{5,18}$/;
            errtxt = 'Das Passwort muss mindestens 5, maximal 18 Zeichen beinhalten!';
        } else if ($(this).attr('name') == 'email' || $(this).attr('name') == 'login_guest') {
            re = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
            errtxt = 'Bitte geben Sie eine gültige E-Mailaddresse ein!';
        } else if ($(this).attr('name') == 'tel') {
            re = /^0(6[045679][0469]){1}(\-)?(1)?[^0\D]{1}\d{6}$/;
            errtxt = 'Bitte geben Sie eine gültige Telefonnummer ein!';
        } else if ($(this).attr('name') == 'zip_code') {
            re = /^\d{4,5}$/;
            errtxt = 'Bitte geben Sie eine gültige Postleitzahl ein!';
        } else if ($(this).attr('name').indexOf('address') > -1) {
            re = /^[a-zA-Z0-9-\/] ?([a-zA-Z0-9-\/]|[a-zA-Z0-9-\/] )*[a-zA-Z0-9-\/]$/;
            errtxt = 'Bitte geben Sie eine gültige Adresse ein!';
        } else if ($(this).attr('name') == 'fullname') {
            re = /^[a-zA-Z ,.'-]+$/;
            errtxt = 'Bitte geben Sie gültige Vor und Nachnamen ein!';
        } else if ($(this).attr('name') == 'city') {
            re = /^([a-zA-Z\u0080-\u024F]+(?:(\. )|-| |'))*[a-zA-Z\u0080-\u024F]*$/;
            errtxt = 'Bitte geben Sie gültige Stadt ein!';
        }
        var check = re.test(input.val());
        if (check) {
            input.removeClass("invalid").addClass("valid");
            $(this).parent().children('.form-bar').css('display', 'block');
            $(this).parent().children('.error').text('');
        } else {
            $(this).parent().children('.error').text(errtxt);
            input.removeClass("valid").addClass("invalid");
            $(this).parent().children('.form-bar').css('display', 'none');
        }
    }else{
        input.removeClass("invalid").addClass("valid");
        $(this).parent().children('.form-bar').css('display', 'block');
        $(this).parent().children('.error').text('');
    }
});

$('.login_submit').on('click',function(event){
    var form_data=$(this).parent().parent().find('input.invalid');
    if(form_data.length > 0){
        console.log('error hier anzeigen');
        event.preventDefault();
    }
});

$('.register_submit').on('click',function(event){
    var form_data=$(this).parent().parent().find('input.invalid');
    if(form_data.length > 0){
        console.log('error hier anzeigen');
        event.preventDefault();
    }
});

$('.register_submit').on('click',function(event){
    var form_data=$(this).parent().find('input.invalid');
    if(form_data.length > 0){
        console.log('error hier anzeigen');
        event.preventDefault();
    }
});

$('.contact_submit').on('click',function(event){
    var form_data=$(this).parent().parent().find('input.invalid');
    if(form_data.length > 0){
        console.log('error hier anzeigen');
        event.preventDefault();
    }
});

$('.checkout_login_submit').on('click',function(event){
    var form_data=$(this).parent().parent().find('input.invalid');
    if(form_data.length > 0){
        console.log('error hier anzeigen');
        event.preventDefault();
    }
});

$('.checkout_guest_submit').on('click',function(event){
    var form_data=$(this).parent().parent().find('input.invalid');
    if(form_data.length > 0){
        console.log('error hier anzeigen');
        event.preventDefault();
    }
});

$('.checkout_default_address_submit').on('click',function(event){
    var form_data=$(this).parent().parent().find('input.invalid');
    if(form_data.length > 0){
        console.log('error hier anzeigen');
        event.preventDefault();
    }
});

$('.checkout_receipt_address_submit').on('click',function(event){
    var form_data=$(this).parent().parent().find('input.invalid');
    if(form_data.length > 0){
        console.log('error hier anzeigen');
        event.preventDefault();
    }
});

$('.profile_submit').on('click',function(event){
    var form_data=$(this).parent().parent().parent().find('input.invalid');
    if(form_data.length > 0){
        console.log('error hier anzeigen');
        event.preventDefault();
    }else{
        $('.user_info_wrapper').css('display', 'block');
        $('.user_info_change_wrapper').css('display', 'none');
        var id = $('.profile_update_btn').attr('id');
        console.log(id);
        insert_or_update('users', 'edit', id );
    }
});

$('.next_btn_adressen').on('click',function(event){
    console.log($(this).parent().parent().parent().find('input.invalid'));
    var form_data=$(this).parent().parent().parent().find('input.invalid');
    if(form_data.length > 0){
        console.log('error hier anzeigen');
        event.preventDefault();
    }else{
        /*$('.user_info_wrapper').css('display', 'block');
        $('.user_info_change_wrapper').css('display', 'none');*/
        //var id = $('.profile_update_btn').attr('id');
        console.log('test');
        insert_or_update_checkout_address('new', 'address');
    }
});

$('.next_btn_versand').on('click',function(event){
    var form_data=$(this).parent().parent().parent().find('input.invalid');
    if(form_data.length > 0){
        console.log('error hier anzeigen');
        event.preventDefault();
    }else{
        /*$('.user_info_wrapper').css('display', 'block');
         $('.user_info_change_wrapper').css('display', 'none');*/
        //var id = $('.profile_update_btn').attr('id');
        console.log('test');
        insert_or_update_checkout_payment('new', 'payment_shipping');
    }
});

$('.btn_cart_next').click(function(event){
  console.log('click');
  var data = {action:'add_cart'};
  $.post('logic/checkout_logic.php', data, function(response, status) {
      if(status == 'success'){
        console.log('success');
        console.log(response);
      }else{
        console.log('error');
        $('.error_message_checkout').text('');
        $('.error_message_checkout').text('Ein Fehler ist aufgetreten!');
        $('.errors_checkout_wrapper').css('display', 'block');
      }
  });
});

$('.address_zusammenfassung input').focus(function(){
  $('.change_reciept_address').css('display', 'block');
});


$('.btn_order_final').click(function(){
    if($('#agbs').is(':checked')){
      var user_id = $('.btn_order_final').attr('id');
      send_user_email('keine_mail', 'Deine Bestellung bei lotusyoga', user_id);
      window.location.href = "index.php?page=Abschluss";
    }

});








//
