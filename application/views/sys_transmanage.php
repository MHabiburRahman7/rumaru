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
                            <h3>Transaction </h3></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No </th>
                                            <th>ID </th>
                                            <th>Title </th>
                                            <th>Location </th>
                                            <th>Price </th>
                                            <th>Details </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 </td>
                                            <td class="info">TR0001 </td>
                                            <td>John Mansion</td>
                                            <td>22 Revenue Street,Jakata</td>
                                            <td>10 Million</td>
                                            <td> <a href="#" target="_blank">More</a></td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td class="info">TR0002 </td>
                                            <td>Leisure House</td>
                                            <td>800 University Road, Sumatra</td>
                                            <td>25 Milliion</td>
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