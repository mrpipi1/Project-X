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

// ### FIXED SHOP CATEGORY ###

$(window).scroll(function(){
  var ShopCategories = $('.shop-categories'),
      scroll = $(window).scrollTop();

  if (scroll >= 132) ShopCategories.addClass('fixed')
  else ShopCategories.removeClass('fixed');
});


// ### SMOOTH SCROOL TO ANCHOR ###
$('a').click(function(){
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
 function updateSpinner(obj)
 {
     var contentObj = document.getElementById("content");
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
                  $('.error_detailansicht').text('Produkt konnt enicht in den Warenkorb hinzugefügt werden.');
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

function send_user_email(user_email, subject){
        $.post('logic/send_user_email.php', {
            user_mail: user_email, subject: subject,
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


//validation contact form


//validation login form

$('.form-group input[type="text"], .form-group input[type="password"]').keyup(function(event) {
    var input = $(this);
    var re;
    var errtxt = 'Bitte geben Sie einen gültigen Wert ein!';
    if ($(this).attr('name') == '_name' || $(this).attr('name') == 'name') {
        re = /^[a-z0-9_-]{3,16}$/;
        errtxt = 'Bitte geben Sie einen gültigen Namen ein!';
    } else if ($(this).attr('name').indexOf('password') > -1) {
        re = /^[a-z0-9_-]{5,18}$/;
        errtxt = 'Bitte geben Sie eine gültiges Passwort ein!';
    } else if ($(this).attr('name') == 'email' || $(this).attr('name') == 'login_guest')  {
        re = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
        errtxt = 'Bitte geben Sie eine gültige E-Mailaddresse ein!';
    } else if ($(this).attr('name') == 'tel'){
        re = /^0(6[045679][0469]){1}(\-)?(1)?[^0\D]{1}\d{6}$/;
        errtxt = 'Bitte geben Sie eine gültige Telefonnummer ein!';
    } else if($(this).attr('name') == 'zip_code'){
        re = /^\d{4,5}$/;
        errtxt = 'Bitte geben Sie eine gültige Postleitzahl ein!';
    }else if ($(this).attr('name').indexOf('address') > -1){
        re =  /^[a-zA-Z0-9-\/] ?([a-zA-Z0-9-\/]|[a-zA-Z0-9-\/] )*[a-zA-Z0-9-\/]$/;
        errtxt = 'Bitte geben Sie eine gültige Adresse ein!';
    }else if($(this).attr('name') == 'fullname'){
        re = /^[a-z ,.'-]+$/;
        errtxt = 'Bitte geben Sie gültige Vor und Nachnamen ein!';
    }
    var check=re.test(input.val());
    if(check){
        input.removeClass("invalid").addClass("valid");
        $(this).parent().children('.form-bar').css('display', 'block');
        $(this).parent().children('.error').text('');
    } else {
        $(this).parent().children('.error').text(errtxt);
        input.removeClass("valid").addClass("invalid");
        $(this).parent().children('.form-bar').css('display', 'none');
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











function checkout_next( next_page_href){
  // check if user has entered values
  // if(1 == 1){
  //   // load next page
  //   window.location.href = "index.php?page=Adressen";
  // }else{
  //
  // }
  console.log('hallo');

}

$('.next_btn_anmelden').click('click',function(){
  if(1 == 1){
    // load next page
    window.location.href = "index.php?page=Adressen";
  }else{

  }
});




//
