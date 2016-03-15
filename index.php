<!DOCTYPE html>
<html>
	<head>
		<title>Local Tweet Map : Visualizer by Sahil Dua</title>
		<style>
			html, body, #map-canvas{height:100%;margin:0;padding:0;font-family:Calibri,sans-serif; }
		</style>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6oyKPyKj1JsXHLaKtvEFIlhOVgtfT8aE"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script>
			// global variables to be assigned values, later on, in functions
			var latitude=0, longitude=0, map;
			// queue to store the markers for purpose of deleting older ones when length exceeds 100
			var markersList=[];
			// variable for storing the value of latest tweet id_str for sending along with next API call.
			var since_id='0';
			var locationFound = false;
		</script>	
		</head>
	<body>
		<h1 style="text-align:center;">Local Tweet Map</h1>
		<p style="text-align:center;">Visualize the most recent tweets within 1-mile radius of your current location(Hover over the profile pic of the user to read the tweet text)</p>
		<div id="status"></div>
		<div id="map-canvas"></div>
	</body>
</html>
