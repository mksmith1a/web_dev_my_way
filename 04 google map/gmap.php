<?php
$gmapkey = 'AIzaSyAur3fnSajZPYQvijG9WOPHfv__nkOKjzg';
$lat = '40.800533';
$lng = '-81.375547';
$addr = '324 Cleveland Ave NW, Canton, OH 44702';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Map Demo</title>
</head>
<body onload="init()" >
	<div id="map_canvas" STYLE="width:400px;height:300px;border:solid thin black;padding:5px" ></div><BR />
    <div id="sv" STYLE="width:400px;height:300px;border:solid thin gray;padding:5px" ></div><br />

<script src="http://maps.google.com/maps/api/js?key=<?php echo $gmapkey; ?>&sensor=false" type="text/javascript"></script>
<script>
var myMap;
var app;
var geocoder;
var markersArray = [];
var infowindow;


function App() {	
	var centerstart =  new google.maps.LatLng(<?php echo $lat.','.$lng; ?>);
	this.myMap = null;
	
	var myOptions = {
	  zoom: 15,
	  center: centerstart,
	  mapTypeId: google.maps.MapTypeId.ROADMAP,
	};
	this.myMap = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	window.myMap = this.myMap;
	var marker = new google.maps.Marker({
		map: myMap, 
		title:'Demotek', //icon: 'http://demotek/imgs/home.png',
		position: centerstart
	});
	infowindow = new google.maps.InfoWindow({
		content: 'DemoTek Industry <br> <?php echo $addr; ?>'
	});
	
	infowindow.open(myMap,marker);	
	var pcenterstart =  new google.maps.LatLng(<?php echo $lat.','.$lng; ?>);
	var panoramaOptions = {
      position: pcenterstart,
      pov: {
        heading: 90,
        pitch: 0,
        zoom: 1
      }
    };
    var panorama = new  google.maps.StreetViewPanorama(document.getElementById("sv"),panoramaOptions);
    this.myMap.setStreetView(panorama);

	markersArray.push(marker);
}

function init() {
	if(typeof google != 'undefined'){
		app = new App();
	}
}	
</script>
</body>
</html>