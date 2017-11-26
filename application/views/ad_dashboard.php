<!DOCTYPE html>
<html>

<body>

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
                        <div class="col-md-8">
							<canvas id='sold_graph' style='height: 100vh; margin-top: 0px'></canvas>							
                        </div>
                        <div class="col-md-6">
                            <canvas id='sold_graph1' style='height: 250px; margin-top: 0px'></canvas>
							<!--<figure><img src="<?php// echo base_url() ?>assets/img/kolecko.png" width="200" height="180">
                                <figcaption>Overall House Sold</figcaption>
                            </figure>
							-->
                        </div>
                        <div class="col-md-6">
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
					data: [2500, 1902, 1041, 610],
					backgroundColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
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
					data: [1051, 1502, 2200, 2410],
					backgroundColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
				}
			]

		};
		  
		  var options = {
			title : {
			  display : true,
			  position : "top",
			  text : "Rumaru House Listed",
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
					data: [1651, 2502, 2850, 2220],
					 backgroundColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
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