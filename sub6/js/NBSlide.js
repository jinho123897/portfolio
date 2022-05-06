// JavaScript Document
$(document).ready(function() {
    var position=0;  //최초위치
    var movesize=150; //이미지 하나의 너비
    //var timeonoff;
   
    $('.slide_gallery ul').after($('.slide_gallery ul').clone());

    /*
    timeonoff= setInterval(function () {
           position-=movesize;  // 150씩 감소
       $('.slide_gallery').stop().animate({left:position}, 'fast',
            function(){							
           if(position==-750){
              $('.slide_gallery').css('left',0);
              position=0;
           }
       });
   }, 2000);
   */
    
    
        //슬라이드 겔러리를 한번 복제
 
  $('.button').click(function(e){
     e.preventDefault();

     //clearInterval(timeonoff);
     
     if($(this).is('.m1')){ // preview 버튼 클릭
          if(position==-750){
              $('.slide_gallery').css('left',0);
               position=0;
           }
         
          position-=movesize;  // 150씩 감소
              $('.slide_gallery').stop().animate({left:position}, 'fast',
                function(){							
                    if(position==-750){
                        $('.slide_gallery').css('left',0);
                        position=0;
                    }
                });
     }else if($(this).is('.m2')){  // next버튼 클릭
           if(position==0){
                $('.slide_gallery').css('left',-750);
                position=-750;
            }
 
            position+=movesize; // 150씩 증가
            $('.slide_gallery').stop().animate({left:position}, 'fast',
                function(){							
                    if(position==0){
                        $('.slide_gallery').css('left',-750);
                        position=-750;
                    }
                });
      }
   });
});

