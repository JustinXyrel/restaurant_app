<?php
$this->load->helper('url');
// $this->load->library('session');
?>
<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="<?php echo base_url();?>includes/JS/jquery.js"></script>
	</head>
<body>

<table border="1">
	<tr>
		<td>
			Geolocation
		</td>
		<td>
			<input type="button" onclick="get_loc()" value="click me">
			<article></article>
		</td>
	</tr>
</table>

<script>

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

