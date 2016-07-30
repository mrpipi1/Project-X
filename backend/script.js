
$(document).ready(function(){

    //needs to be fixed so only 1 a is active at a time
    $('.sidebar li p').click(function(event){

    /*if($(this).attr("href") != "") {
        window.location.href = $(this).attr("href");
    }*/
    $(this).addClass('active');

    var menu = $('.sidebar');

    var parent = $(this).parent().parent();
    var the = $(this);

    parent.children('li.open, li.active').children('p').removeClass('active');
    parent.children('li.open, li.active').children('.sub-menu').children('p.active').removeClass('active');
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
        event.preventDefault();
        event.stopPropagation();
    });


});

/*$(".backend_wrapper").load("logic/get_contents.php", function(responseTxt, statusTxt, xhr){
    console.log(responseTxt);
    console.log(statusTxt);
    console.log(xhr);
});*/
function load_Content(page, site, order_by, order_dir){

    if(!page){
        page = 'dashboard';
    }
    if(!site){
        site = 1;
    }
    if(!order_by){
        order_by = 'id';
    }
    if(!order_dir){
        order_dir = 'ASC';
    }

    $.post('logic/get_contents.php', {page: page, site: site, order_by: order_by, order_dir: order_dir}, function(response, status) {
        $(".content-wrapper_backend").empty();
        $(".content-wrapper_backend").append(response);
    });

}


load_Content('dashboard', '1', 'id', 'ASC');
/*$.ajax({
    type:"POST",
    url: "logic/get_contents.php",
    datatype: "json",
    success: function(data, textStatus, xhr) {
       console.log(data);

    }
});*/



function notification(type, message){
    if(type === 'success'){
        $('.notification').css("background-color", "#65a591");
        $('.notification h4').html(message);
        $('.notification').slideDown('slow', function(){
            setTimeout(function(){
                $('.notification').slideUp('slow', function(){});
            }, 3000);
        });
    }else if (type === 'error'){
        $('.notification').css("background-color", "#8e0000");
        $('.notification h4').html(message);
        $('.notification').slideDown('slow', function(){
            setTimeout(function(){
                $('.notification').slideUp('slow', function(){});
            }, 3000);
        });
    }

}

function delete_Query(el, tablename, Id) {
    console.log(el);
    $.post('logic/delete_contents.php', {id: Id, table: tablename}, function(response, status) {
        if(response === 1 && status == success) {
            notification('success', 'Eintrag erfolgreich gelöscht!');
            //todo reload the data
        }else{
            notification('error', 'Eintrag konnte nicht gelöscht werden!');
        }
    });

}

function update_Query(data) {
    $.post('logic/edit_contents.php', data, function(response, status) {
        console.log(response, status);
    });

}




