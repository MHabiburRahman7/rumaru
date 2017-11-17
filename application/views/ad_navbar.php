<nav class="navbar navbar-default navbar-static-top">
                        <div class="container-fluid">
                            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Hello <?php echo $this->session->userdata('logged_name') ?></a>
                                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                            </div>
                            <div class="collapse navbar-collapse" id="navcol-2">
                                <ul class="nav navbar-nav">
                                    <li role="presentation">
                                        <a href="#"><img class="img-thumbnail" src="<?php echo base_url() ?>assets/img/unnamed.png" width="100" height="100"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <ul class="list-group">
                        <li class="list-group-item"><a class="btn btn-success <?php if($now == "bid") echo "active";?>" href="<?php echo base_url() ?>index.php/auth/bidding"><span>Bidding </span></a></li>
                        <li class="list-group-item"><a class="btn btn-success <?php if($now == "ongoing") echo "active";?>" href=""><span>Ongoing </span></a></li>
                        <li class="list-group-item"><a class="btn btn-success <?php if($now == "schedule") echo "active";?>" href=""><span>Schedule </span></a></li>
                        <li class="list-group-item"><a class="btn btn-success <?php if($now == "msg") echo "active";?>" href=""><span>Messaging </span></a></li>
                        <li class="list-group-item"><a class="btn btn-success <?php if($now == "firend") echo "active";?>" href=""><span>Friends </span></a></li>
                        <li class="list-group-item"><a class="btn btn-success <?php if($now == "log") echo "active";?>" href=""><span>Logs </span></a></li>
                    </ul>