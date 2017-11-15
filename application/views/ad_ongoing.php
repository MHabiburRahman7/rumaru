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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <nav class="navbar navbar-default navbar-static-top">
                        <div class="container-fluid">
                            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Hello "Admin"</a>
                                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                            </div>
                            <div class="collapse navbar-collapse" id="navcol-2">
                                <ul class="nav navbar-nav">
                                    <li role="presentation">
                                        <a href="#"><img class="img-thumbnail" src="assets/img/unnamed.png" width="100" height="100"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <ul class="list-group">
                        <li class="list-group-item"><span>Bidding </span></li>
                        <li class="list-group-item active"><span>Ongoing </span></li>
                        <li class="list-group-item"><span>Schedule </span></li>
                        <li class="list-group-item"><span>Messaging </span></li>
                        <li class="list-group-item"><span>Friends </span></li>
                        <li class="list-group-item"><span>Logs </span></li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Your Clients</h3></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No </th>
                                            <th>Location </th>
                                            <th>Details </th>
                                            <th>Price </th>
                                            <th>Status </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Main Road, Jakata, Indonesia</td>
                                            <td>For Showing a house</td>
                                            <td>$ 12000</td>
                                            <td> Working</td>
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
</body>

</html>