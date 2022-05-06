$(document).ready(function () {


    //슬라이드 메뉴 클릭시 해당 콘텐츠로 스스륵~~~ 이동
    $('.tabs a').click(function(e){
        e.preventDefault(); //href="#" 속성을 막아주는..메소드

        var value=0; //이동할 스크롤의 거리

        if($(this).hasClass('link1')){   //첫번째 메뉴를 클릭했냐?   if($(this).is('#link1')){
            value= $('#content .history1').offset().top-220;  // 해당 콘테츠의 상단의 거리~~
        }else if($(this).hasClass('link2')){
            value= $('#content .history2').offset().top-220; 
        }else if($(this).hasClass('link3')){
            value= $('#content .history3').offset().top-220; 
        }
        
    $("html,body").stop().animate({"scrollTop":value},1000);
    });

});