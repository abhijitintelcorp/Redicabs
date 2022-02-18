<?php
include("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php include("includes/headerlink.php"); ?>

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>Redicabs | Canceled Bookings </title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="css/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    .errorWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #dd3d36;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }

    .succWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }
    </style>

</head>

<body>
    <?php include('includes/header.php');?>

    <div class="ts-main-content">
        <?php include('includes/leftbar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Canceled Bookings</h2>

                        <!-- Zero Configuration Table -->
                        <div class="panel panel-default">
                            <div class="panel-heading">Bookings Info</div>
                            <div class="panel-body">

                                <table id="zctb" class="display table table-striped table-bordered table-hover"
                                    cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Booking No.</th>
                                            <th>Vehicle</th>
                                            <th>From Date</th>
                                            <th>To Date</th>
                                            <th>Status</th>
                                            <th>Posting date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Booking No.</th>
                                            <th>Vehicle</th>
                                            <th>From Date</th>
                                            <th>To Date</th>
                                            <th>Status</th>
                                            <th>Posting date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php 
	extract($_POST);
	$status=2;
	$query = "SELECT tblusers.FullName,tblbrands.BrandName,tblvehicles.VehiclesTitle,tblbooking.FromDate,
	tblbooking.ToDate,tblbooking.message,tblbooking.VehicleId as vid,tblbooking.Status,tblbooking.
	PostingDate,tblbooking.id,tblbooking.BookingNumber  from tblbooking join tblvehicles on
	 tblvehicles.id=tblbooking.VehicleId join tblusers on tblusers.EmailId=tblbooking.userEmail 
	 join tblbrands on tblvehicles.VehiclesBrand=tblbrands.id   where tblbooking.Status='$status'";
	$query_run = mysqli_query($conn, $query);
	$cnt=1;
	if (mysqli_num_rows($query_run) > 0) {
	while ($row = mysqli_fetch_array($query_run)) {
	?>
                                        <tr>
                                            <td><?php echo htmlentities($cnt); ?></td>
                                            <td><?php echo $row['FullName'];  ?></td>
                                            <td><?php echo $row['BookingNumber']; ?></td>
                                            <td><a href="edit-vehicle.php?id=<?php echo htmlentities($result->vid); ?>"><?php echo htmlentities($result->BrandName); ?>
                                                    , <?php echo htmlentities($row['VehiclesTitle']); ?></td>
                                            <td><?php echo htmlentities($row['FromDate']); ?></td>
                                            <td><?php echo htmlentities($row['ToDate']); ?></td>
                                            <td><?php
	if ($row['Status'] == 0) {
	echo htmlentities('Not Confirmed yet');
	} else if ($row['Status'] == 1) {
	echo htmlentities('Confirmed');
	} else {
	echo htmlentities('Cancelled');
	}
	?></td>
                                            <td><?php echo htmlentities($row['PostingDate']); ?></td>
                                            <td>


                                                <a
                                                    href="bookig-details.php?bid=<?php echo htmlentities($row['id']); ?>">
                                                    View</a>
                                            </td>

                                        </tr>
                                        <?php $cnt = $cnt + 1;
												}
											} ?>

                                    </tbody>
                                </table>





                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<?php } ?>
=======
    <title>Redicabs | Canceled Bookings </title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include('includes/sidebar.php'); ?>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <!-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">ManageOwner</li>
                            </ol>
                        </div> -->
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content" style="margin-left: -251px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Canceled Bookings</h2>

                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body" style="padding: 0px">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Booking No.</th>
                                                <th>Vehicle</th>
                                                <th>From Date</th>
                                                <th>To Date</th>
                                                <th>PickUp Time</th>
                                                <th>Status</th>
                                                <th>Posting Date</th>
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
                                                <td><?php echo $row['OwnerName'];  ?></td>
                                                <td><?php echo $row['BookingNumber']; ?></td>
                                                <td><a
                                                        href="edit-vehicle.php?id=<?php echo htmlentities($row['vid']); ?>"><?php echo htmlentities($row['owner_vehicle_name']); ?>
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
                                                <td><?php echo $row['CreatedDate']; ?></td>
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
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
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
</body>

</html>
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b
