<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="jquery.js"></script>
	</head>
<body>

<table border="1">
	<tr>
		<td>
			Canvas
		</td>
		<td>
			<canvas id="myCanvas" width="300" height="150" style="border:1px solid #d3d3d3;">
			Your browser does not support the HTML5 canvas tag.</canvas>
		</td>
	</tr>
	<tr>
		<td>
			Geolocation
		</td>
		<td>
			<input type="button" onclick="get_loc()" value="click me">
			<article></article>
		</td>
	</tr>
	
	<tr>
		<td>
			Annotation
		</td>
		<td>
			<canvas id="tools_sketch" width="800" height="300" style="background: url(http://www.energymagic.com.au/images/u/auspicious%20goldfish_lge.jpg) no-repeat center center; background-size:100% 100%;"></canvas>
		</td>
</table>

<script>

$(function() {
    $('#tools_sketch').sketch({defaultColor: "#ffffff"});
  });

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");

var grd=ctx.createLinearGradient(0,0,170,0);
grd.addColorStop(0,"black");
grd.addColorStop(1,"white");

ctx.fillStyle=grd;
ctx.fillRect(20,20,150,100);

function success(position) {
  var mapcanvas = document.createElement('div');
  mapcanvas.id = 'mapcontainer';
  mapcanvas.style.height = '400px';
  mapcanvas.style.width = '600px';

  document.querySelector('article').appendChild(mapcanvas);

  var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  
  var options = {
    zoom: 15,
    center: coords,
    mapTypeControl: false,
    navigationControlOptions: {
    	style: google.maps.NavigationControlStyle.SMALL
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("mapcontainer"), options);

  var marker = new google.maps.Marker({
      position: coords,
      map: map,
      title:"You are here!"
  });
  
  var marker2 = new google.maps.Marker({
      position: new google.maps.LatLng(14.574084, -958.952268),
      map: map,
      title:"Boni Brach! wahahaha!"
  });
}

function get_loc(){
	if (navigator.geolocation) {
	  navigator.geolocation.getCurrentPosition(success);
	} else {
	  error('Geo Location is not supported');
	}
}

</script>

</body>
</html>

