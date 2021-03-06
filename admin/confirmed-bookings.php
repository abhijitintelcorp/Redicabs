<?php
include("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php include("includes/headerlink.php"); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php include('includes/sidebar.php'); ?>

        <div class="content-wrapper">
            <section class="content" style="margin-left: -251px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">ConfirmedBooking</h2>

                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body" style="padding: 0px;">
                                    <table id="example2" class="table table-bordered table-hover"
                                        style="font-size: 1rem;">
                                        <thead>
                                            <tr>
                                                <th>SlNo</th>
                                                <th>BookingNo</th>
                                                <th>VehicleName</th>
                                                <th>FromDate</th>
                                                <th>ToDate</th>
                                                <th>Drivername</th>
                                                <th>DriverNumber</th>
                                                <th>OwnerName</th>
                                                <th>OwnerNumber</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                        </thead>

                                        <?php
                                        extract($_POST);
                                        $status = 1;
                                        $query = "SELECT * from tblbooking where Status='$status'";
                                        $query_run = mysqli_query($conn, $query);
                                        $count = 1;
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_array($query_run)) {

                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $count; ?></td>

                                                <th><?php echo $row['BookingNumber']; ?>
                                                </th>
                                                <th><?php echo $row['owner_vehicle_name']; ?>
                                                </th>
                                                <th><?php echo $row['FromDate']; ?>
                                                </th>
                                                <th><?php echo $row['ToDate']; ?>
                                                </th>
                                                <th><?php echo $row['DriverName']; ?>
                                                </th>
                                                <th><?php echo $row['DriverMobile']; ?>
                                                </th>
                                                <th><?php echo $row['OwnerName'] ?>
                                                </th>
                                                <th><?php echo $row['owner_mobile'] ?>
                                                </th>
                                                <td><?php
                                                            if ($row['Status'] == 0) {
                                                                echo htmlentities('Not Confirmed yet');
                                                            } else if ($row['Status'] == 1) {
                                                                echo htmlentities('Confirmed');
                                                            } else if ($row['Status'] == 2) {
                                                                echo htmlentities('Cancelled');
                                                            } else {
                                                                echo htmlentities('Delayed');
                                                            }
                                                            ?></td>
                                                <td><a href="bookig-details.php?bid=<?php echo $row['id']; ?>"><i
                                                            class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php $count = $count + 1;
                                            }
                                        }
                                        ?>

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
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js">
    </script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
    </script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
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
            "buttons": ["copy", "csv", "excel", "pdf", "print",
                "colvis"
            ]
        }).buttons().container().appendTo(
            '#example1_wrapper .col-md-6:eq(0)');
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