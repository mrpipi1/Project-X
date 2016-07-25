/**
 * Created by Giusti on 25.07.2016.
 */
console.log();
$(document).ready(function(){
    //needs to be fixed so only 1 a is active at a time
    $('.sidebar li a').click(function(e){
    if($(this).attr("href") != "") {
        window.location.href = $(this).attr("href");
    }
    $(this).addClass('active');

    console.log(e);
    var menu = $('.sidebar');

    var parent = $(this).parent().parent();
    var the = $(this);

    parent.children('li.open, li.active').children('a').removeClass('active');
    parent.children('li.open, li.active').children('.sub-menu').children('a.active').removeClass('active');
    parent.children('li.open, li.active').children('.sub-menu').slideUp(200);
    parent.children('li.open').removeClass('open');

    var sub = jQuery(this).next();
    console.log(sub)
    var slideOffeset = -200;
    var slideSpeed = 200;

    if (sub.is(":visible")) {
        jQuery('.arrow', jQuery(this)).removeClass("open");
        jQuery(this).parent().removeClass("open");
        sub.slideUp(slideSpeed, function () {

        });
    } else {
        jQuery('.arrow', jQuery(this)).addClass("open");
        jQuery(this).parent().addClass("open");
        sub.slideDown(slideSpeed, function () {

        });
    }
    e.preventDefault();
    });
});
