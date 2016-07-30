// ###*****************###
//    *** MAIN JS ***
// ###*****************###


// ### TOGGLE .SHOWING CLASS ON CLICK - 'MOBILE-NAV' ###
$('.handle').on('click', function(){
  $('nav ul').toggleClass('showing');
});

// ### FIXED HEADER onScroll
if($('.header').hasClass('header_home')){
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

  if (scroll >= 129) ShopCategories.addClass('fixed')
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
	var scrollPosition = $(document).scrollTop();
   $('.nav_main a').each(function () {
     var currentLink = $(this);
     var refElement = $(currentLink.attr("href"));
     if (refElement.position().top <= scrollPosition
         && refElement.position().top + refElement.height() > scrollPosition) {
       $('.nav_main ul li a').removeClass("active_nav");
       currentLink.addClass("active_nav");
     }
     else{
       currentLink.removeClass("active_nav");
     }
   });
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

function add_to_Cart(user_id, product_id){
    var size = $(".size-selected").text();
    var quantity = $(".quantity").val();
    if(size && quantity > 0) {
        $.post('logic/add_to_cart.php', {
            user_id: user_id,
            product_id: product_id,
            size: size,
            quantity: quantity
        }, function (response, status) {
            if (response == 1 && status == 'success') {
                console.log('okay');
            } else if(response == 2 && status == 'success'){
                console.log('menge nicht verfügbar');
            } else {
                console.log('fehler');
            }
        });
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
//if($('.send_password_message')){
  console.log($('.deny'))
  $('.confirm').click(function(){
    $('.send_password_message').css('display', 'none');
    $('.profile_shop_link').css('display', 'none');
    $('.email_was_send').css('display', 'block');
  });
  $('.deny').click(function(){
    $('.send_password_message').css('display', 'none');
  })
//}

$('.pencil_frontend').click(function(){
  $('.user_info_wrapper').toggleClass('showing_form');
  if($('.user_info_wrapper').hasClass('showing_form')){
    $('.user_info_wrapper').css('display', 'none');
    $('.user_info_change_wrapper').css('display', 'block');
  }else{
  $('.user_info_wrapper').css('display', 'block');
  $('.user_info_change_wrapper').css('display', 'none');
}});

$('.profile_update_btn').click(function(){
  $('.user_info_wrapper').css('display', 'block');
  $('.user_info_change_wrapper').css('display', 'none');
  
});
//validation contact form

$('#contact_email').on('input', function() {
    var input=$(this);
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var is_email=re.test(input.val());
    if(is_email){
        input.removeClass("invalid").addClass("valid");
    } else {
        $('.error_email').text('Bitte geben Sie eine gültige E-Mailadresse ein!');
        input.removeClass("valid").addClass("invalid");
    }
});

$('#contact_comment').keyup(function(event) {
    var input=$(this);
    var message=$(this).val();
    console.log(message);
    if(message){
        input.removeClass("invalid").addClass("valid");
    } else {
        $('.error_comment').text('Bitte geben Sie eine Nachricht ein!');
        input.removeClass("valid").addClass("invalid");
    }
});

$('#contact_name').keyup(function(event) {
    var input=$(this);
    var message=$(this).val();
    console.log(message);
    if(message){
        input.removeClass("invalid").addClass("valid");
    } else {
        $('.error_comment').text('Bitte geben Sie einen Namen ein!');
        input.removeClass("valid").addClass("invalid");
    }
});

$('#contact_name').on('input', function() {
    var input=$(this);
    var re = /^([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})*$/;
    var is_tel=re.test(input.val());
    if(is_tel){
        input.removeClass("invalid").addClass("valid");
    } else {
        $('.error_tel').text('Bitte geben Sie eine gültige Telefonnummer ein!');
        input.removeClass("valid").addClass("invalid");
    }
});
//
