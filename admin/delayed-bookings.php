<?php
session_start();
error_reporting(0);
include("includes/config.php");
?>

<!doctype html>
<html lang="en" class="no-js">
<?php include("includes/headerlink.php"); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php include('includes/sidebar.php'); ?>
        <div class="content-wrapper">
            <section class="content" style="margin-left: -251px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">DelayedPickup</h2>

                            <div class="panel panel-default">
                                <div class="panel-heading">Bookings Info</div>
                                <div class="panel-body" style=" overflow-x:auto;">
                                    <table id="zctb" class="display table table-striped table-bordered table-hover"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>SlNo</th>
                                                <th>Name</th>
                                                <th>BookingNo</th>
                                                <th>VehicleName</th>
                                                <th>FromDate</th>
                                                <th>ToDate</th>
                                                <th>PickupTime</th>
                                                <th>Drivername</th>
                                                <th>DriverNumber</th>

                                                <th>Status</th>
                                                <th>Action</th>
                                        </thead>

                                        <tbody>

                                            <?php
                                            extract($_POST);
                                            $status = 4;
                                            date_default_timezone_set('Asia/Kolkata');
                                            //$date = date('h:i:s');
                                            echo $time;
                                            $query = "SELECT * from tblbooking where Status='$status'";
                                            $query_run = mysqli_query($conn, $query);
                                            $count = 1;
                                            if (mysqli_num_rows($query_run) > 0) {
                                                while ($row = mysqli_fetch_array($query_run)) {
                                                    $time = htmlspecialchars($_POST['Time']);


                                            ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <th><?php echo $row['UserName']; ?>
                                                </th>
                                                <th><?php echo $row['BookingNumber']; ?>
                                                </th>
                                                <th><?php echo $row['owner_vehicle_name']; ?>
                                                </th>
                                                <th><?php echo $row['FromDate']; ?>
                                                </th>
                                                <th><?php echo $row['ToDate']; ?>
                                                </th>
                                                <th><?php echo $row['Time']; ?>
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
                                                            } else {
                                                                echo htmlentities('Delayed');
                                                            }
                                                            ?></td>
                                                <td><a
                                                        href="delayed-booking-details.php?bid=<?php echo $row['id']; ?>">View</a>
                                                </td>
                                            </tr>
                                            <?php $count = $count + 1;
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

        </div>
    </div>
    </div>
    <?php
    include("includes/footerlink.php");
    ?>
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
<?php  ?>