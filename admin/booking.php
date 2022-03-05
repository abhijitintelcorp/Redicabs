<?php
session_start();
//error_reporting(0);
if (strlen($_SESSION['EmailId']) == 0) {
    header("location:login.php");
}
include("includes/config.php");
?>
<?php include("includes/headerlink.php"); ?>
<!DOCTYPE html>
<html lang="en">

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->


        <?php include("includes/sidebar.php"); ?>

        <div class="content-wrapper">


            <!-- Main content -->
            <section class="content" style="margin-left: -251px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Booking info</h2>
                            <!-- <a href="add-booking.php"><span class="pull-right">Add Booking</span></a> -->
                            <div class="col-sm-4">

                                <label>SeatingCapacity</label>

                                <select class="selectpicker" data-live-search="false" name="SeatingCapacity"
                                    id="SeatingCapacity">
                                    <option value="">SeatingCapacity</option>
                                    <?php
                                    $qry = "SELECT DISTINCT SeatingCapacity from tblbooking GROUP BY SeatingCapacity ASC";
                                    $exe = mysqli_query($conn, $qry);
                                    while ($row = mysqli_fetch_assoc($exe)) {

                                    ?>
                                    <option value="<?php echo $row['SeatingCapacity'] ?>">
                                        <?php echo $row['SeatingCapacity'] ?>
                                    </option>
                                    <?php }  ?>
                                </select>

                            </div>
                            <div class="card">

                                <div class="card-body" style="padding: 0px">

                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>SlNo.</th>
                                                <th>Brand</th>
                                                <th>VehicleName</th>
                                                <th>OwnerName</th>
                                                <th>DriverName</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <?php
                                        $status = 0;
                                        extract($_POST);
                                        $SeatingCapacity = $_GET['SeatingCapacity'];

                                        $retrive_qyr = "SELECT * FROM tblbooking  where SeatingCapacity='$SeatingCapacity'";
                                        $retrive_fn_query = mysqli_query($conn, $retrive_qyr);
                                        $cnt = 0;
                                        while ($row = mysqli_fetch_array($retrive_fn_query)) {
                                            $cnt++;
                                        ?>

                                        <tbody>
                                            <tr>
                                                <td><?php echo htmlentities($cnt); ?></td>
                                                <td><?php echo $row['UserName'];  ?></td>
                                                <td><?php echo $row['BookingNumber']; ?></td>
                                                <td><?php echo htmlentities($row['owner_vehicle_name']); ?>
                                                </td>
                                                <td><?php echo htmlentities($row['FromDate']); ?></td>
                                                <td><?php echo htmlentities($row['ToDate']); ?></td>
                                                <td><?php echo htmlentities($row['Time']); ?></td>
                                                <td><?php
                                                        if ($row['Status'] == 0) {
                                                            echo htmlentities('Not Confirmed yet');
                                                        } else if ($row['Status'] == 1) {
                                                            echo htmlentities('Confirmed');
                                                        } else {
                                                            echo htmlentities('Cancelled');
                                                        }
                                                        ?></td>

                                                <td>


                                                    <a href="booking-details.php?bid=<?php echo $row['id']; ?>">
                                                        View</a>
                                                    <a href="booking-modify-details.php?bid=<?php echo $row['id']; ?>">
                                                        Edit</a>
                                                </td>

                                            </tr>
                                            <?php $cnt = $cnt + 1;
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <?php
    include("includes/footerlink.php");
    ?>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->

    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</body>

</html>