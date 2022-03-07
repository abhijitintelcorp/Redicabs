<?php
include("includes/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<?php include("includes/headerlink.php"); ?>

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <title>Redicabs | Canceled Bookings </title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include('includes/sidebar.php'); ?>

        <div class="content-wrapper">
            <section class="content" style="margin-left: -251px;">


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Canceled Bookings</h2>
                            <div class="panel panel-default">
                                <div class="panel-body" style=" overflow-x:auto;">
                                    <table id="zctb" class="display table table-striped table-bordered table-hover"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Booking No.</th>
                                                <th>VehicleName</th>
                                                <th>Drivername</th>
                                                <th>DriverNo</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <?php
                                        extract($_POST);
                                        $status = 2;
                                        $retrive_qyr = "SELECT * FROM tblbooking  where Status='$status'";
                                        $retrive_fn_query = mysqli_query($conn, $retrive_qyr);
                                        $cnt = 1;
                                        while ($row = mysqli_fetch_array($retrive_fn_query)) {
                                            $cnt++;
                                        ?>

                                        <tbody>
                                            <tr>
                                                <td><?php echo htmlentities($cnt); ?></td>
                                                <td><?php echo $row['UserName'];  ?></td>
                                                <td><?php echo $row['BookingNumber']; ?></td>
                                                <td><?php echo $row['owner_vehicle_name']; ?></td>
                                                <td><?php echo $row['DriverName']; ?>
                                                </td>
                                                <td><?php echo $row['DriverMobile']; ?>
                                                </td>
                                                <td><?php
                                                        if ($row['Status'] == 0) {
                                                            echo htmlentities('Not Confirmed yet');
                                                        } else if ($row['Status'] == 1) {
                                                            echo htmlentities('Confirmed');
                                                        } else {
                                                            echo htmlentities('Cancelled');
                                                        }
                                                        ?></td>

                                                <td><a href="booking-details.php?bid=<?php echo $row['id']; ?>">View</a>
                                                </td>
                                            </tr>
                                            <?php $cnt = $cnt + 1;
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
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
    <!-- ./wrapper -->
    <?php
    include("includes/footerlink.php");
    ?>
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
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js">
    </script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
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
    <script>
    $(document).ready(function() {
        $('#zctb').DataTable();
    });
    </script>
</body>
<?php  ?>

</html>