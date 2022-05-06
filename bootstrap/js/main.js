$(document).ready(function() {

    //nav
    $('body').scrollspy({ target: '#navbar-example' })

    //visual
    $('.carousel').carousel()

    //popup
    $('.openBtn').on('click', function(e){
        e.preventDefault();

        $(this).next('.big').fadeIn('slow');
        $('.box').show();
    });
   
    $('.closeBtn, .box').on('click', function(e){
        e.preventDefault();

        $('.big').fadeOut('fast');
        $('.box').hide();
    });

   $('.topMove').click(function(e){
     e.preventDefault();
     
     $("html,body").stop().animate({"scrollTop":0},1000); 
   });


});