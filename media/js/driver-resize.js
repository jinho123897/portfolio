$(document).ready(function() {
    var boxHeight =  $('.drivers ul li:eq(0)').height(); 

    $(".drivers ul li:eq(7)").css('height',boxHeight);


    $(window).resize(function(){ 
        boxHeight =  $('.drivers ul li:eq(0)').height(); 
        $(".drivers ul li:eq(7)").css('height',boxHeight);

    });
});