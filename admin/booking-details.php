<?php
session_start();
error_reporting(0);
include("includes/config.php");
date_default_timezone_set("Asia/Kolkata");
$msg = "";

if (strlen($_SESSION['EmailId']) == 0) {
    header("location:login.php");
} else {
    if (isset($_REQUEST['eid'])) {
        $eid = intval($_GET['eid']);
        $status = "2";
        $query = "UPDATE tblbooking SET Status='$status' WHERE  id='$eid'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        echo "<script>alert('Booking Successfully Cancelled');</script>";
        echo "<script type='text/javascript'> document.location ='canceled-bookings.php'; </script>";
    }


    if (isset($_REQUEST['id'])) {
        $id = intval($_GET['id']);
        $status = 1;

        $query = "UPDATE tblbooking SET Status='$status' WHERE  id='$id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        echo "<script>alert('Booking Successfully Confirmed');</script>";
        echo "<script type='text/javascript'> document.location = 'confirmed-bookings.php'; </script>";
    }


?>

<!doctype html>
<html lang="en" class="no-js">

<?php include("includes/headerlink.php"); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include('includes/sidebar.php'); ?>
        <div class="content-wrapper" style="margin-left: 10px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="padding: 0px;">

                                <div id="print">
                                    <table border="1" class="display table table-striped table-bordered table-hover"
                                        cellspacing="0" width="100%">

                                        <tbody>

                                            <?php
                                                extract($_POST);

                                                $bid = intval($_GET['bid']);
                                                $query = "SELECT * from tblbooking where tblbooking.id='$bid'";
                                                $query_run = mysqli_query($conn, $query);
                                                $cnt = 1;
                                                if (mysqli_num_rows($query_run) > 0) {
                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                ?>
                                            <h3 style="text-align:center; color:red">
                                                #<?php echo $row['BookingNumber']; ?> Booking Details </h3>
                                            <tr>
                                                <th colspan="4" style="text-align:center;color:blue">User Details</th>
                                            </tr>
                                            <tr>
                                                <th>Booking No.</th>
                                                <td><?php echo $row['BookingNumber']; ?></td>
                                                <th>Name</th>
                                                <td><?php echo $row['UserName']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email Id</th>
                                                <td><?php echo $row['EmailId']; ?></td>
                                                <th>Contact No</th>
                                                <td><?php echo $row['ContactNo']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td><?php echo $row['address']; ?></td>
                                                <th>City</th>
                                                <td><?php echo $row['City']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Country</th>
                                                <td colspan="3"><?php echo $row['Country']; ?></td>
                                            </tr>

                                            <tr>
                                                <th colspan="4" style="text-align:center;color:blue">Booking Details
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Vehicle Name</th>
                                                <td><?php echo $row['owner_vehicle_brand']; ?>
                                                    / <?php echo $row['owner_vehicle_name']; ?></td>
                                                <th>Booking Date</th>
                                                <td><?php echo $row['RegDate']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>DriverName</th>
                                                <td><?php echo $row['DriverName']; ?>
                                                </td>
                                                <th>DriverNumber</th>
                                                <td><?php echo $row['DriverMobile']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>OwnerName</th>
                                                <td><?php echo $row['OwnerName']; ?>
                                                </td>
                                                <th>OwnerNumber</th>
                                                <td><?php echo $row['owner_mobile']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>From Date</th>
                                                <td><?php echo $row['FromDate']; ?></td>
                                                <th>To Date</th>
                                                <td><?php echo $row['ToDate']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>PickUpTime</th>
                                                <td><?php echo $row['Time']; ?></td>
                                                <th>VehicleQuantity</th>
                                                <td><?php echo $row['Time']; ?></td>

                                            </tr>
                                            <tr>
                                                <th>Total Days</th>

                                                <td><?php echo htmlentities($tdays = $row['TotalNoDays']); ?></td>
                                                <th>Rent Per Days</th>
                                                <td><?php echo htmlentities($ppdays = $row['PricePerDay']); ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="3" style="text-align:center">Grand Total</th>
                                                <td><?php echo htmlentities(($tdays) * $ppdays); ?></td>
                                            </tr>

                                            <tr>
                                                <th>Booking Status</th>
                                                <td><?php
                                                                if ($row['Status'] == 0) {
                                                                    echo htmlentities('Not Confirmed yet');
                                                                } else if ($row['Status'] == 1) {
                                                                    echo htmlentities('Confirmed');
                                                                } else {
                                                                    echo htmlentities('Cancelled');
                                                                }
                                                                ?></td>
                                                <th>Last updation Date</th>
                                                <td><?php echo htmlentities($row['UpdatedDate']); ?></td>
                                            </tr>

                                            <?php if ($row['Status'] == 0) { ?>
                                            <tr>
                                                <td style="text-align:center" colspan="4">
                                                    <a href="booking-details.php?id=<?php echo htmlentities($row['id']); ?>"
                                                        onclick="return confirm('Do you really want to Confirm this booking')"
                                                        class="btn btn-primary"> Confirm Booking</a>

                                                    <a href="booking-details.php?eid=<?php echo htmlentities($row['id']); ?>"
                                                        onclick="return confirm('Do you really want to Cancel this Booking')"
                                                        class="btn btn-danger"> Cancel Booking</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            <?php $cnt = $cnt + 1;
                                                    }
                                                } ?>

                                        </tbody>
                                    </table>
                                    <form method="post">
                                        <input name="Submit2" type="submit" class="txtbox4" value="Print"
                                            onClick="return f3();" style="cursor: pointer;" />
                                    </form>

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
        <!-- <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/fileinput.js"></script>
        <script src="js/chartData.js"></script>
        <script src="js/main.js"></script> -->
        <script language="javascript" type="text/javascript">
        function f3() {
            window.print();
        }
        </script>
</body>

</html>
<?php } ?>