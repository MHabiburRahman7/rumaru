<?php include'header.php';?>

<body>
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
	  div.side_row{
		margin-right: 0px;
		margin-left: 0px;
	  }
	  .side_container{
		  padding-left: 0px;
		  padding-right: 0px;
	  }
    </style>
	
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo base_url()?>index.php/auth">Home</a> / Rent</span>
    <h2>Rent new residence</h2>
</div>
</div>
<!-- banner -->

<div class="container" style="width:45vh; float:right">
<div class="properties-listing">

<div class="row">

<div class="side_row" style="overflow-y:scroll; height:100vh; float:right;">
	<!--<div class="wrapper" style="padding:10px; position: absolute; z-index:2"> -->
		<div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
			<input type="text" class="form-control" placeholder="Search of Properties">
			<div class="row">
					<div class="col-lg-5">
					  <select class="form-control">
						<option>Buy</option>
						<option>Rent</option>
						<option>Sale</option>
					  </select>
					</div>
					<div class="col-lg-7">
					  <select class="form-control">
						<option>Price</option>
						<option>$150,000 - $200,000</option>
						<option>$200,000 - $250,000</option>
						<option>$250,000 - $300,000</option>
						<option>$300,000 - above</option>
					  </select>
					</div>
				  </div>

				  <div class="row">
				  <div class="col-lg-12">
					  <select class="form-control">
						<option>Property Type</option>
						<option>Apartment</option>
						<option>Building</option>
						<option>Office Space</option>
					  </select>
					  </div>
				  </div>
				  <button class="btn btn-primary">Find Now</button>

		  </div>
		 
		<div class="sortby clearfix" style="margin:10px">
		<div class="pull-left result">Showing: 12 of 100 </div>
			<div class="pull-right">
				<select class="form-control">
				  <option>Sort by</option>
				  <option>Price: Low to High</option>
				  <option>Price: High to Low</option>
				</select>
			</div>
		</div>
	<!--</div> -->
	
     <!-- properties -->
      <div class="">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url();?>images/properties/1.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="<?php echo base_url();?>index.php/auth/property_rent">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/auth/property_rent">View Details</a>
      </div>
      </div>
      <!-- properties -->


      <!-- properties -->
      <div class="">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url();?>images/properties/2.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="<?php echo base_url();?>index.php/auth/property_rent">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/auth/property_rent">View Details</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class=" ">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url();?>images/properties/3.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="<?php echo base_url();?>index.php/auth/property_rent">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/auth/property_rent">View Details</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class="">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url();?>images/properties/1.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="<?php echo base_url();?>index.php/auth/property_rent">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/auth/property_rent">View Details</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class="">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url();?>images/properties/4.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="<?php echo base_url();?>index.php/auth/property_rent">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/auth/property_rent">View Details</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class=" ">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url();?>images/properties/1.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="<?php echo base_url();?>index.php/auth/property_rent">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/auth/property_rent">View Details</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class=" ">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url();?>images/properties/4.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="<?php echo base_url();?>index.php/auth/property_rent">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/auth/property_rent">View Details</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class=" ">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url();?>images/properties/3.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="<?php echo base_url();?>index.php/auth/property_rent">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/auth/property_rent">View Details</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class=" ">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url();?>images/properties/2.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="<?php echo base_url();?>index.php/auth/property_rent">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/auth/property_rent">View Details</a>
      </div>
      </div>
      <!-- properties -->
      <!-- properties -->
      <div class=" ">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url();?>images/properties/1.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="<?php echo base_url();?>index.php/auth/property_rent">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/auth/property_rent">View Details</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class=" ">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url();?>images/properties/4.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="<?php echo base_url();?>index.php/auth/property_rent">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/auth/property_rent">View Details</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class=" ">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url();?>images/properties/3.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="<?php echo base_url();?>index.php/auth/property_rent">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/auth/property_rent">View Details</a>
      </div>
      </div>
      <!-- properties -->
      <div class="center">
		<ul class="pagination">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul>
</div>

</div>
</div>
</div>
		<!--</div> -->
</div>
<!--<iframe style="position:relative" width="75%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe> -->
<div id="map" style="position:relative"></div>
</body>

	<script>
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: new google.maps.LatLng(-7.275973, 112.808304),
          mapTypeId: 'roadmap'
        });

        // Create a <script> tag and set the USGS URL as the source.
        var script = document.createElement('script');
        // This example uses a local copy of the GeoJSON stored at
        // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
        script.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
        document.getElementsByTagName('head')[0].appendChild(script);
      }

      // Loop through the results array and place a marker for each
      // set of coordinates.
      window.eqfeed_callback = function(results) {
        for (var i = 0; i < results.features.length; i++) {
          var coords = results.features[i].geometry.coordinates;
          var latLng = new google.maps.LatLng(coords[1],coords[0]);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map
          });
        }
      }/*
	  var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
	  */
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBSv1l_zZB-m75QQV3he2GMw0LeIYqyiE&callback=initMap"
    async defer></script>
	
<?//php include'footer.php';?>