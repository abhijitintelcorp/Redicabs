<?php
error_reporting(0);
include("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php include("includes/headerlink.php"); ?>

<head>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <title>Redicabs | Completed Bookings </title>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php include('includes/sidebar.php'); ?>

        <div class="content-wrapper">
            <section class="content" style="margin-left: -251px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Completed Booking</h2>

                            <div class="panel panel-default">
                                <div class="panel-body" style=" overflow-x:auto;">
                                    <table id="zctb" class="display table table-striped table-bordered table-hover" style="border: 1px solid #212529;" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>SlNo</th>
                                                <th>Name</th>
                                                <th>BookingNo</th>
                                                <th>VehicleName</th>
                                                <th>Drivername</th>
                                                <th>DriverNumber</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                        </thead>

                                        <?php
                                        extract($_POST);
                                        $status = 1;
                                        $query = "SELECT * FROM tblbooking WHERE Status='1' OR Status='6'";
                                        $query_run = mysqli_query($conn, $query);
                                        $count = 1;
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_array($query_run)) {

                                        ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $count; ?></td>
                                                        <th><?php echo $row['UserName']; ?>
                                                        </th>
                                                        <th><?php echo $row['BookingNumber']; ?>
                                                        </th>
                                                        <th><?php echo $row['owner_vehicle_name']; ?>
                                                        </th>

                                                        <th><?php echo $row['DriverName']; ?>
                                                        </th>
                                                        <th><?php echo $row['DriverMobile']; ?>
                                                        </th>

                                                        <td><?php
                                                            if ($row['Status'] == 0) {
                                                                echo htmlentities('Not Confirmed yet');
                                                            } else if ($row['Status'] == 1) {
                                                                echo htmlentities('Confirmed');
                                                            } else if ($row['Status'] == 2) {
                                                                echo htmlentities('Cancelled');
                                                            } else if ($row['Status'] == 6) {
                                                                echo htmlentities('Completed');
                                                            } else {
                                                                echo htmlentities('Delayed');
                                                            }
                                                            ?></td>

                                                        <td>
                                                            <a href="completed_booking_details.php?id=<?php echo $row['id']; ?>">Edit</a>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js">
    </script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#zctb').DataTable();
        });
    </script>


</body>

</html>