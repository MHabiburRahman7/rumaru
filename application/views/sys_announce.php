<!DOCTYPE html>
<html>



<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <?php $now = "dash"; include('sys_navbar.php');?>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Information Announcement</h2></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Title :</h4></div>
                        <div class="col-md-9">
                            <input type="text" placeholder="Please Enter Name ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Desc :</h4></div>
                        <div class="col-md-9">
                            <input type="text" placeholder="About">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Start :</h4></div>
                        <div class="col-md-9">
                            <input type="date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>End :</h4></div>
                        <div class="col-md-9">
                            <input type="date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Comment :</h4></div>
                        <div class="col-md-9">
                            <input type="text" placeholder="Mr. ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Attachment :</h4></div>
                        <div class="col-md-4">
                            <input type="file">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-default btn-block" type="button">Upload </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div></div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>