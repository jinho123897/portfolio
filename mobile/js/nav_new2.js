$(document).ready(function() {
   var op = false;  //네비가 열려있으면(true) , 닫혀있으면(false)
 	
   $(".menu_ham").click(function() { //메뉴버튼 클릭시
       
       var documentHeight =  $(document).height();
       $("#gnb").css('height',documentHeight);  //전체 컨텐츠의 길이 만큼 네비 높이로 반환

      if(op==false){
        $("#gnb").animate({right:0,opacity:1}, 'fast');
        $('#headerArea').addClass('mn_open');   // 네비가 닫혀있는 상태에서 클릭했냐?
        op=true;
      }else{
        $("#gnb").animate({right:'-100%',opacity:0}, 'fast');
        $('#headerArea').removeClass('mn_open');
        op=false;
      }

   });
   
   
    //2depth 메뉴 교대로 열기 처리 
    var onoff=[false,false,false,false,false,false]; //각각의 메뉴가 닫혀있으면(false)  /  열려있으면(true)
    var arrcount=onoff.length;  //메뉴의 개수
    
    console.log(arrcount);
    
    $('#gnb .depth1 h3 a').click(function(){  //1depth 메뉴를 클릭하면
        var ind=$(this).parents('.depth1').index();
        
        console.log(ind);
        
       if(onoff[ind]==false){
        //$('#gnb .depth1 ul').hide();
        $(this).parents('.depth1').find('ul').slideDown('slow');  //클릭한 해당 메뉴의 2depth를 열어라
        $(this).parents('.depth1').siblings('li').find('ul').slideUp('fast'); // 나머지 메뉴의 서브를 닫아라
         for(var i=0; i<arrcount; i++) {
            onoff[i]=false; // 모든 메뉴 상태를 false로..
          }
         onoff[ind]=true;  //자신의 상태만 true..
           
         $('.depth1 i').addClass('fas fa-chevron-down');   
         $(this).find('i').addClass('fas fa-chevron-up');   
            
       }else{ //클릭한 해당메뉴가 열려있는냐?
         $(this).parents('.depth1').find('ul').slideUp('fast');  // 자신의 서브메뉴만 닫아라
         onoff[ind]=false;   
           
         $(this).find('i').removeClass('fa-chevron-up');     
       }
    });    
  
  });


