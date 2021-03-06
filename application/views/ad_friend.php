<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rumaru</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <!--
	Just Comment it - it is already set

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#" target="_blank"><i class="glyphicon glyphicon-star"></i> Rumaru</a>
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                   <!-- This is a navbar-->
					<?php $now = "dash"; include('ad_navbar.php');?>
					
					<!--
                    <ul class="list-group">
                        <li class="list-group-item active"><span>Bidding </span></li>
                        <li class="list-group-item"><span>Ongoing </span></li>
                        <li class="list-group-item"><span>Schedule </span></li>
                        <li class="list-group-item"><span>Messaging </span></li>
                        <li class="list-group-item"><span>Friends </span></li>
                        <li class="list-group-item"><span>Logs </span></li>
                    </ul>
					
					-->
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Agents Contact</h3></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive" style="overflow-y:scroll">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No </th>
                                            <th>Name </th>
                                            <th>Location </th>
                                            <th>Phone Number</th>
                                            <th>Project Done</th>
                                            <th>Notes </th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
										//var_dump($wkwkwk);
										/*
										foreach($wkwkwk as $res){
											echo "<tr>";
												echo "<td>".$res['id']."</td>";
												echo "<td>".$res['username']."</td>";
												echo "<td>".$res['address']."</td>";
												echo "<td>".$res['phoneno']."</td>";
												echo "<td>Not yet</td>";
												echo "<td><a class='btn btn-default'>Not Yet</a></td>";
											echo "</tr>";
										};
										*/
									?>
									
                                        <tr>
                                            <td>1</td>
                                            <td class="info">MR A </td>
                                            <td>Main Road, Jakata, Indonesia </td>
                                            <td>010-123-4567 </td>
                                            <td>10 </td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td class="info">MR B</td>
                                            <td>Main Road, Jakata, Indonesia </td>
                                            <td>010-123-4567 </td>
                                            <td>20 </td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td class="info">MR C </td>
                                            <td>Main Road, Jakata, Indonesia </td>
                                            <td>010-123-4567 </td>
                                            <td>10 </td>
                                        </tr>
                                        <tr>
                                            <td>4 </td>
                                            <td class="info">Mrs A</td>
                                            <td>Main Road, Jakata, Indonesia </td>
                                            <td>010-123-4567 </td>
                                            <td>15 </td>
                                        </tr>
                                        <tr>
                                            <td>5 </td>
                                            <td class="info">Mrs B</td>
                                            <td>Main Road, Jakata, Indonesia </td>
                                            <td>010-123-4567 </td>
                                            <td>3 </td>
                                        </tr>
                                        <tr>
                                            <td>6 </td>
                                            <td class="info">Dev A</td>
                                            <td>Main Road, Jakata, Indonesia </td>
                                            <td>010-123-4567 </td>
                                            <td>10 </td>
                                        </tr>
                                        <tr>
                                            <td>7 </td>
                                            <td class="info">Dev B</td>
                                            <td>Main Road, Jakata, Indonesia </td>
                                            <td>010-123-4567 </td>
                                            <td>30 </td>
                                        </tr>
                                        <tr>
                                            <td>8 </td>
                                            <td class="info">Dev C</td>
                                            <td>Main Road, Jakata, Indonesia </td>
                                            <td>010-123-4567 </td>
                                            <td>50 </td>
                                        </tr>
										
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Just Comment it - it is already set-->
	
	<!--
    <footer class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h5>CopyRight © 2017</h5></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	-->
</body>

</html>