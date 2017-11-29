<!DOCTYPE html>
<html lang="en">
<head>
<title>RUMARU </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css"/>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.js"></script>
	<script src="<?php echo base_url() ?>assets/script.js"></script>

	<style>
	forehead{
		style="font-size:200%";
	}
	a.logo{
		width: 120px;
		float: left;		
	}
	a.logo img{
		width: inherit;
	}
	</style>


<!-- Owl stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/owl-carousel/owl.theme.css">
	<script src="<?php echo base_url() ?>assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="<?php echo base_url() ?>assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

<!-- DateTimePicker -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/moment.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/datetimepicker.js"></script>
<!-- DateTimePicker -->
	 
</head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation" style="margin-bottom:0px; background-color: grey">
          <div class="container">
            <div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
            </div>

            <!-- Nav Starts style="height: 106px; padding:28px"-->
            <div>
				<a class="logo" href="<?php echo base_url()?>index.php/auth">
					<img src="<?php echo base_url() ?>images/logo.png" alt="Realestate" width="20%">
				</a>
				<nav class="navbar-collapse collapse">
				  <ul class="nav navbar-nav navbar-right">
				    <li <?php if($name == "home") echo "class='active'"; ?>><a href="<?php echo base_url();?>index.php/auth" style="font-size:150%">Home</a></li>
					<li <?php if($name == "about") echo "class='active'"; ?>><a href="<?php echo base_url();?>index.php/auth/about" style="font-size:150%">About</a></li>
					<li <?php if($name == "agent") echo "class='active'"; ?>><a href="<?php echo base_url();?>index.php/auth/agents" style="font-size:150%">Agents</a></li>
					<li <?php if($name == "buy") echo "class='active'"; ?>><a href="<?php echo base_url();?>index.php/auth/buy" style="font-size:150%">Buy</a></li>
					<li <?php if($name == "sale") echo "class='active'"; ?>><a href="<?php echo base_url();?>index.php/auth/sale" style="font-size:150%">Sale</a></li>         
					<li <?php if($name == "rent") echo "class='active'"; ?>><a href="<?php echo base_url();?>index.php/auth/rent" style="font-size:150%">Rent</a></li>
					<?php
						if($this->session->userdata('logged_in')){
							echo "<li><a href='".base_url()."index.php/auth/logout' style='font-size:150%'>Logout</a></li>";
						}
						else{
							echo "<li><a href='".base_url()."index.php/auth/login' style='font-size:150%'>Login</a></li>";
							echo "<li><a href='".base_url()."index.php/auth/register' style='font-size:150%'>Sign up</a></li>";
						}
					?>
				  </ul>
				</nav>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->


<!--
<div class="container">


<div class="header">

              <ul class="pull-right">
                
              </ul>
</div>

</div>

-->