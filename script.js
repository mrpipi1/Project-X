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


