/**
 * Created by alex on 23/03/16.
 */

$(document).ready(function() {
    $(".img-container").hover(function () {
        console.log($(".img-container").attr("src"));
        console.log($(".zoomed-picture img").attr("src"));
        $('.zoomed-picture img').attr("src", $(this).attr("src"));
        console.log($(".zoomed-picture img").attr("src"));
    }, function () {
        $('.zoomed-picture img').attr("src", $(".zoomed-picture img").attr("src"));
    })
});


