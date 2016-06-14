// ***  MAIN JavaScript *** //

// class .showing beim togggeln
$('.handle').on('click', function(){
  $('nav ul').toggleClass('showing');
});


// class .tiny für den header
$(window).on("scroll touchmove", function () {
  $('.header').toggleClass('tiny', $(document).scrollTop() > 0);
});


// anker animation
$(function() {
 $('a[href*="#"]:not([href="#"])').click(function() {
   if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
     var target = $(this.hash);
     target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
     if (target.length) {
       $('html, body').animate({
         scrollTop: target.offset().top
       }, 2000);
       return false;
     }
   }
 });
 });


// Produktansicht Hover
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


// Google Maps

function initMap() {
  var myLatLng = {lat: 48.20294029999999, lng: 16.356826899999987};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}
