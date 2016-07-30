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
  console.log(myLatLng)

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

if(!$('.header').hasClass('header_no_landingpage')){
  $('.landingpage_wrapper').append("<?phpsetcookie ( 'landingpage', 'landingpage_visited', time() + 60, \"/\");?><div class=\"landingpage\"><h4 class=\"landingpage_headline\"><span class=\"light\">Willkommen <br> bei </span><br>Lotus Yoga</h4></div>");
}
