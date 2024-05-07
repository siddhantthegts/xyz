

// Open Side-Menu Function ==========================

var sideMenu_btn = $('.side-menu-btn');
var sideMenu = $('.side-menu-area');
var sideMenu_overlay = $('.side-menu-area .overlay');
var sideMenu_close = $('.side-menu-area .close-btn button');

$(sideMenu_btn).click(function(){
    $(sideMenu).addClass('active');
    $('body').css({'overflow' : 'hidden'});
});

$(sideMenu_overlay).click(function(){
    $(sideMenu).removeClass('active');
    $('body').css({'overflow' : ''});
});

$(sideMenu_close).click(function(){
    $(sideMenu).removeClass('active');
    $('body').css({'overflow' : ''});
});

$('.side-menu-area .side-menu-box .side-menu .nav li a').click(function(){
    $(sideMenu).removeClass('active');
    $('body').css({'overflow' : ''});
});


// Choose File Function ============================

$("#attachment").change(function() {
    if(!(this.files.length == 0)){
        $('.form-1 form .input-field.file label').addClass('selected');
    }
    else{
        $('.form-1 form .input-field.file label').removeClass('selected');
    }
    
    var attachment = $(this).val().replace(/C:\\fakepath\\/i, '');

    $('.form-1 form .input-field label p').text(attachment);

});