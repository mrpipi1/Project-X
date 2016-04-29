/**
 * Created by alex on 23/03/16.
 */

$(document).ready(function() {
    $(".img-container").hover(function () {
        $('.zoomed-picture img').attr("src", $(this).attr("src"));
    }, function () {
        $('.zoomed-picture img').attr("src", $(".zoomed-picture img").attr("src"));
    })
});


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




