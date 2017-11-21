<!DOCTYPE html>
<html>
<!--
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rumaru</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	
</head>
-->
<!--
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	-->
<body>
<!--
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><i class="glyphicon glyphicon-star"></i> Rumaru</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#">Setting </a></li>
                    <li role="presentation"><a href="#">Signout </a></li>
                </ul>
                <form class="navbar-form">
                    <input class="form-control" type="search" placeholder="City, Zip Code">
                    <button class="btn btn-default" type="button">Search </button>
                </form>
            </div>
        </div>
    </nav>
		-->
    <section style="padding-top:20px; padding-bottom:20px">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <?php $now = "dash"; include('ad_navbar.php');?>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Today Agenda</h3></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No </th>
                                            <th>Time </th>
                                            <th>Description </th>
                                            <th>Notes </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2017-11-27 10:00AM</td>
                                            <td>For Showing a house</td>
                                            <td>Cell 2</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2017-11-27 10:00AM</td>
                                            <td>For Showing a house</td>
                                            <td>Cell 2</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2017-11-27 10:00AM</td>
                                            <td>For Showing a house</td>
                                            <td>Cell 2</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2017-11-27 10:00AM</td>
                                            <td>For Showing a house</td>
                                            <td>Cell 2</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2017-11-27 10:00AM</td>
                                            <td>For Showing a house</td>
                                            <td>Cell 2</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2017-11-27 10:00AM</td>
                                            <td>For Showing a house</td>
                                            <td>Cell 2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-0">
                            <h3 class="text-muted">Progress </h3></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-0">
							<canvas id='sold_graph' style='height: 100vh; margin-top: 0px'></canvas>							
                        </div>
                        <div class="col-md-4 col-md-offset-0">
                            <canvas id='sold_graph1' style='height: 250px; margin-top: 0px'></canvas>
							<!--<figure><img src="<?php// echo base_url() ?>assets/img/kolecko.png" width="200" height="180">
                                <figcaption>Overall House Sold</figcaption>
                            </figure>
							-->
                        </div>
                        <div class="col-md-4 col-md-offset-0">
							<canvas id='prespective' style='height: 250px; margin-top: 0px'></canvas>
							<!--
                            <figure><img class="img-rounded" src="<?php// echo base_url() ?>assets/img/kolecko.png" width="200" height="180">
                                <figcaption>Buy,Sell, Rent Perspect</figcaption>
                            </figure>
							-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/Chart.min.js"></script>
	<script type="text/javascript">
		//Meletakkan grafik pada div yang memiliki id "grafik_comp"
		var ctx = document.getElementById("sold_graph").getContext("2d");
		
		var data = {
			labels: ['Sold', 'Rent', 'Ongoing Sold', 'Ongoing rent'],
			datasets: [
				{
					label: '2010 customers #',
					fillColor: '#382765',
					data: [2500, 1902, 1041, 610]
				}
			]

		};
		  
		  var options = {
			title : {
			  display : true,
			  position : "top",
			  text : "House You Handle",
			  fontSize : 12
			},
			legend : {
			  display : true,
			  position : "bottom"
			}
		  };
					
		  var myBarChart = new Chart(ctx, { //Inisiasi grafik
			  type: 'pie',
			  data: data,
			  options: options
		  });
	</script>
	<script type="text/javascript">
		//Meletakkan grafik pada div yang memiliki id "grafik_comp"
		var ctx = document.getElementById("sold_graph1").getContext("2d");
		
		var data = {
			labels: ['Sold', 'Rent', 'Ongoing Sold', 'Ongoing rent'],
			datasets: [
				{
					label: '2010 customers #',
					fillColor: '#382765',
					data: [1051, 1502, 2200, 2410]
				}
			]

		};
		  
		  var options = {
			title : {
			  display : true,
			  position : "top",
			  text : "Rumaru House Handled",
			  fontSize : 12
			},
			legend : {
			  display : true,
			  position : "bottom"
			}
		  };
					
		  var myBarChart = new Chart(ctx, { //Inisiasi grafik
			  type: 'pie',
			  data: data,
			  options: options
		  });
	</script>
	<script type="text/javascript">
		//Meletakkan grafik pada div yang memiliki id "grafik_comp"
		var ctx = document.getElementById("prespective").getContext("2d");
		
		var data = {
			labels: ['Sold', 'Rent', 'Ongoing Sold', 'Ongoing rent'],
			datasets: [
				{
					label: '2010 customers #',
					fillColor: '#382765',
					data: [1651, 2502, 2850, 2220]
				}
			]

		};
		  
		  var options = {
			title : {
			  display : true,
			  position : "top",
			  text : "Prespective in - Surabaya",
			  fontSize : 12
			},
			legend : {
			  display : true,
			  position : "bottom"
			}
		  };
					
		  var myBarChart = new Chart(ctx, { //Inisiasi grafik
			  type: 'pie',
			  data: data,
			  options: options
		  });
	</script>

	<!--
    <footer class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5>CopyRight © 2017</h5></div>
            </div>
        </div>
    </footer>
	
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	-->
</body>

</html>