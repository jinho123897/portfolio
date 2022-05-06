// JavaScript Document

 function initialize() {
  var myLatlng = new google.maps.LatLng(37.49855316249204, 127.03500323541479);
  var myOptions = {
   zoom: 15,
   center: myLatlng

  }
  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
 
  var marker = new google.maps.Marker({
   position: myLatlng, 
   map: map, 
   title:"우리집"
  });   
  
 
  var infowindow = new google.maps.InfoWindow({
   content: "우리집"
  });
 
  infowindow.open(map,marker);
 }
 
 
 window.onload=function(){
  initialize();
 }

