<!DOCTYPE html>
<html>
	<?php include 'head.php';?>
	<?php include 'navbar.php';?>
  
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
	<div style="position:relative">
    <div id="map" style="width:67%"></div>
	
	<div style="padding:0; margin:0; width:30%; overflow-y:scroll; position:absolute; float:right; background-color: white; height:100%">
				<div class="container">
					<div class="row" style="border:1px;border-color:#333">
						<div class="panel panel-default">
							<div class="panel-body">
								<h2>Somewhere Else</h2>
								<p>Showing 1201 result</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="container">
							<h3>Address Amazone, lalala, skrrap, pap pap pap</h3>
							<br>
							<div class="d-inline-block" style="width: 53%">
								<img src="img/portfolio/01-thumbnail.jpg" width="100%">
							</div>
							<div class="d-inline-block" style="width: 45%; margin:0px">
								<p style="font-size: 80%">Price : $1.000.0000 <br>
								Bed : 2<br> 
								Bath : 3 <br>
								Area : 200m2								
								</p>
							</div>
							<div class="d-inline-block" style="width: 100%">
							<br>
								<a href="" class="btn btn-primary"> Detail
								</a>
								<a href="" class="btn btn-primary"> GO tour
								</a>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="container">
							<h3>Address Amazone, lalala, skrrap, pap pap pap</h3>
							<br>
							<div class="d-inline-block" style="width: 53%">
								<img src="img/portfolio/02-thumbnail.jpg" width="100%">
							</div>
							<div class="d-inline-block" style="width: 45%; margin:0px">
								<p style="font-size: 80%">Price : $1.000.0000 <br>
								Bed : 2<br> 
								Bath : 3 <br>
								Area : 200m2								
								</p>
							</div>
							<div class="d-inline-block" style="width: 100%">
							<br>
								<a href="" class="btn btn-primary"> Detail
								</a>
								<a href="" class="btn btn-primary"> GO tour
								</a>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="container">
							<h3>Address Amazone, lalala, skrrap, pap pap pap</h3>
							<br>
							<div class="d-inline-block" style="width: 53%">
								<img src="img/portfolio/03-thumbnail.jpg" width="100%">
							</div>
							<div class="d-inline-block" style="width: 45%; margin:0px">
								<p style="font-size: 80%">Price : $1.000.0000 <br>
								Bed : 2<br> 
								Bath : 3 <br>
								Area : 200m2								
								</p>
							</div>
							<div class="d-inline-block" style="width: 100%">
							<br>
								<a href="" class="btn btn-primary"> Detail
								</a>
								<a href="" class="btn btn-primary"> GO tour
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBSv1l_zZB-m75QQV3he2GMw0LeIYqyiE&callback=initMap"
    async defer></script>
  </body>
</html>