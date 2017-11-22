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
                            <h3>Users </h3></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No </th>
                                            <th>ID </th>
                                            <th>Name </th>
                                            <th>Email </th>
                                            <th>Status </th>
                                            <th>Details </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 </td>
                                            <td class="info">AG001 </td>
                                            <td>Mr.Robin Hood</td>
                                            <td>robin@rumaru.com </td>
                                            <td>Agent </td>
                                            <td> <a href="#" target="_blank">More</a></td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td class="info">CUS001 </td>
                                            <td>Mr.Steven</td>
                                            <td>steven@gmail.com </td>
                                            <td>Customer </td>
                                            <td> <a href="#" target="_blank">More</a></td>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>