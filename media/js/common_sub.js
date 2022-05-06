$(document).ready(function() {
  // 상단메뉴 스크롤 이벤트
  $(window).on('scroll',function(){
    var smh= $('#imgBG').height();
    var scroll = $(window).scrollTop();
    
    if(scroll>=smh){ 
        $('#headerArea').css('background','rgba(255,255,255,.95)');
        $('#gnb ul li a').css('color','#333');
    }else{
        $('#headerArea').css('background','rgba(0,0,0,.5)');
        $('#gnb ul li a').css('color','#fff');
    }

  });

$(window).on('scroll',function(){
  var smh= $('#imgBG').height();
  var scroll = $(window).scrollTop();
  var screenSize = $(window).width();

  if(scroll>=smh && screenSize < 768){
    $('#gnb ul').css('background','rgba(255,255,255,.95)');
  }if(scroll<smh && screenSize < 768){
    $('#gnb ul').css('background','rgba(0,0,0,.5)');
  }

});
  
  //햄버거 메뉴
  $(".menuOpen").toggle(function() {
      $("#gnb").slideDown('slow');
      }, function() {
      $("#gnb").slideUp('fast');
  });
  
  
  var current=0;
  $(window).resize(function(){ 
      var screenSize = $(window).width(); 

      if( screenSize > 768){
        $("#gnb").show();
        $('#gnb ul').css('background','');
        current=1;
      }
      if(current==1 && screenSize <= 768){
        $("#gnb").hide();
        $('#headerArea').removeClass('mn_open');
        current=0;
      }
  }); 
  // 햄버거 메뉴 열렸을때
  var op = false;  //네비가 열려있으면(true) , 닫혀있으면(false)
 	
  $(".menuOpen").click(function() { //메뉴버튼 클릭시
     if(op==false){
       $('#headerArea').addClass('mn_open');   // 네비가 닫혀있는 상태에서 클릭했냐?
       op=true;
     }else{
       $('#headerArea').removeClass('mn_open');
       $("#gnb").css('dispaly','none');
       op=false;
     }
   });

   //상단으로 이동
   $('.topMove').hide();
          
       $(window).on('scroll',function(){ //스크롤 값의 변화가 생기면
            var scroll = $(window).scrollTop(); //스크롤의 거리
           
           
            // $('.text').text(scroll);  // 스크롤 높이를 보이게 측정하는 코드
   
            if(scroll>500){ //500이상의 거리가 발생되면
                $('.topMove').fadeIn('slow');  //top보여라~~~~
            }else{
                $('.topMove').fadeOut('fast');//top안보여라~~~~
            }
    });

    $('.topMove').click(function(e){
      e.preventDefault();
      
      $("html,body").stop().animate({"scrollTop":0},1000); 
    });
});