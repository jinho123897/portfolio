$(document).ready(function() {
    var screenSize, screenHeight;
    var current=false;

    function screen_size(){
        screenSize = $(window).width(); //스크린의 너비
        screenHeight = $(window).height();  //스크린의 높이

        $("#content").css('margin-top',screenHeight);
        
        if( screenSize > 768 && current==false){
            $("#imgBG").attr('src','images/drivers_back.jpg');
            current=true;
        }
        if(screenSize <= 768){
            $("#imgBG").attr('src','images/drivers_back1.jpg');
            current=false;
        }
    }

    screen_size();  //최초 실행시 호출

    $(window).resize(function(){    //웹브라우저 크기 조절시 반응하는 이벤트 메소드()
        screen_size();
    }); 

    $('.down').click(function(){
        screenHeight = $(window).height();
        $('html,body').animate({'scrollTop':screenHeight}, 1000);
    });




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
   
});