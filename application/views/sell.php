<?//php include base_url().'application/views/header.php';?>

<div class="">
    
		<!--
		<div class="header">
		</div>
		-->
		
        <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="#">Sell Your Home with a Redfin Partner Agent</a></h2>
              <blockquote>              
              <p>Redfin Agents provide full service at every step, and get better results for lower fees.</p>
              </blockquote>
            </div>
          </div>

        </div><!-- /sl-slider -->

      </div>
	  <!-- /slider-wrapper -->
</div>



<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3 style="text-align:center">Talk with our agent</h3>
	<h4 style="text-align:center; color:white">Request a free, no-obligation listing consultation with a Redfin Agent.</h4>
    <div class="searchbar" style="width:70%; text-align:center; margin:0 auto">
      <div class="row">
        <div class="d-inline-form" style="margin:0 auto">
		<br>
          <input type="text" class="form-control" placeholder="Type your address">
          <div class="row">
              <div style="width: 40%; margin:0 auto">
              <button class="btn btn-success"  onclick="window.location.href='<?php echo base_url();?>index.php/auth/buysalerent'">Submit now</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container spacer">
	<div class="row">
		<div class="container col-lg-6">
			<h2 style="text-align:center">Strategic Pricing</h2>
			<h4 >Based on your needs and the local real estate data, your Redfin Agent will come up with a pricing strategy to sell your home for the highest possible price.
			</h4>
			<br>
			<p >A Redfin Agent will:
			</p>
			<ul>
				<li>
					<p>
					Prepare a thorough comparative market analysis (CMA), showing recent comparable home sales and demand in your neighborhood
					</p>
				</li>
				<li>
					<p>
					Talk with you to understand your selling motivations and timeline
					</p>
				</li>
				<li>
					<p>
					Walk through your home’s selling features and suggest improvements that could lift your price
					</p>
				</li>
				<li>
					<p>
					Recommend a target price, plus a marketing plan for how to get it
					</p>
				</li>
			</ul>
		</div>
		<div class="container col-lg-6" style="text-align:center">
			<h2>The offer and close</h2>
			<h4>
			Once you get an offer, we can send Redfin.com buyers and local agents a “Last Call” email to generate more demand
			<br>often resulting in multiple offers and a higher price. We’re always there when you need us. 
			<br>Your Redfin Agent stays on the case through your offer, inspection, and appraisal
			<br>all the way to closing.
			</h4>
		</div>
	</div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="<?php echo base_url();?>index.php/auth/buy" class="pull-right viewall">View All Listing</a>
    <h2>Featured Properties</h2>
    <div id="owl-example" class="owl-carousel">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url() ?>images/properties/1.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url() ?>images/properties/2.jpg" class="img-responsive" alt="properties"/>
          <div class="status new">New</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url() ?>images/properties/3.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url() ?>images/properties/4.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url() ?>images/properties/1.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url() ?>images/properties/2.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url() ?>images/properties/3.jpg" class="img-responsive" alt="properties"/>
          <div class="status new">New</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url() ?>images/properties/4.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url() ?>images/properties/1.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="i<?php echo base_url() ?>mages/properties/2.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url() ?>images/properties/3.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      
    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>About Us</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
		<br><a href="<?php echo base_url();?>index.php/auth/about">Learn More</a></p>
      
      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>Recommended Properties</h3>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="row">
                <div class="col-lg-4"><img src="<?php echo base_url() ?>images/properties/1.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="<?php echo base_url() ?>images/properties/2.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="<?php echo base_url() ?>images/properties/3.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="<?php echo base_url() ?>images/properties/4.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<//?php include'footer.php';?>