// 네비게이션 , top


//상단으로 이동
$('.topMove').hide();
           
$(window).on('scroll',function(){ //스크롤 값의 변화가 생기면
    var scroll = $(window).scrollTop(); //스크롤의 거리
    
    
    // $('.text').text(scroll);  // 스크롤 높이를 보이게 측정하는 코드

    if(scroll>200){ //500이상의 거리가 발생되면
        $('.topMove').fadeIn('slow');  //top보여라~~~~
    }else{
        $('.topMove').fadeOut('fast');//top안보여라~~~~
    }
});

$('.topMove').click(function(e){
    e.preventDefault();
    //상단으로 스르륵 이동합니다.
    $("html,body").stop().animate({"scrollTop":0},1000); 
});