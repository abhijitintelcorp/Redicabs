<?php
session_start();
error_reporting(0);
include("includes/config.php");
$user_id = $_GET['bid'];
$u_query = "SELECT * from tblbooking  where tblbooking.id='$user_id'";
$user_update_query = mysqli_query($conn, $u_query);
$urows = mysqli_fetch_array($user_update_query);
if (isset($_POST['owner_update_submit'])) {
    $priceperday = htmlspecialchars($_POST['priceperday']);
    $driver_name = htmlspecialchars($_POST['driver_name']);
    $number = htmlspecialchars($_POST['number']);



    $update_qry = "UPDATE tblbooking SET `PricePerDay`='$priceperday',`Driverid`='$driver_name',`DriverNo`='$number'
          WHERE tblbooking.id='$user_id'";


    $inst_u_fn1_qry = mysqli_query($conn, $update_qry);

    if ($inst_u_fn1_qry) {
        header("location:new-bookings.php");
    }
}
if (isset($_POST['owner_update_time'])) {
    $time = htmlspecialchars($_POST['time']);
    $status = 3;
    $upd_time = "UPDATE tblbooking SET `Time`='$time',`Status`='$status' WHERE tblbooking.id='$user_id'";
    $res_query = mysqli_query($conn, $upd_time);
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
                                            <form method="post">
                                                <?php
                                                $bid = intval($_GET['bid']);
                                                $query = "SELECT * from tblbooking where tblbooking.id='$bid'";
                                                $query_run = mysqli_query($conn, $query);
                                                $cnt = 1;
                                                if (mysqli_num_rows($query_run) > 0) {
                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                ?> <form action="" method="post">
                                                    <h3 style="text-align:center; color:red">
                                                        #<?php echo $row['BookingNumber']; ?> Booking Details </h3>

                                                    <tr>
                                                        <th colspan="4" style="text-align:center;color:blue">User
                                                            Details
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Booking No.</th>
                                                        <td><input type="text" class="form-control" name="bookingno"
                                                                id="bookingno" readonly="readonly"
                                                                value="<?php echo $row['BookingNumber']; ?>" required>
                                                        </td>
                                                        <th>Name</th>
                                                        <td><input type="text" class="form-control" name="customerName"
                                                                id="UserName" readonly="readonly"
                                                                value="<?php echo $row['UserName']; ?>" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email Id</th>
                                                        <td><input type="text" class="form-control" name="EmailId"
                                                                id="EmailId" readonly="readonly"
                                                                value="<?php echo $row['EmailId']; ?>" required></td>
                                                        <th>Contact No</th>
                                                        <td><input type="text" class="form-control" name="ContactNo"
                                                                id="ContactNo" readonly="readonly"
                                                                value="<?php echo $row['ContactNo']; ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Address</th>
                                                        <td><input type="text" class="form-control" name="address"
                                                                id="address" readonly="readonly"
                                                                value="<?php echo $row['address']; ?>" required>
                                                        </td>
                                                        <th>City</th>
                                                        <td><input type="text" class="form-control" name="City"
                                                                id="City" readonly="readonly"
                                                                value="<?php echo $row['City']; ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Country</th>
                                                        <td colspan="3"><input type="text" class="form-control"
                                                                name="Country" id="Country" readonly="readonly"
                                                                value="<?php echo $row['Country']; ?>" required>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th colspan="4" style="text-align:center;color:blue">Booking
                                                            Details
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Vehicle Name</th>
                                                        <td><input type="text" class="form-control"
                                                                name="owner_vehicle_name" id="owner_vehicle_name"
                                                                readonly="readonly"
                                                                value="<?php echo $row['owner_vehicle_name']; ?>"
                                                                required>
                                                        </td>
                                                        <th>Booking Date</th>
                                                        <td><input type="text" class="form-control" name="CreatedDate"
                                                                id="CreatedDate" readonly="readonly"
                                                                value="<?php echo $row['CreatedDate']; ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>From Date</th>
                                                        <td><input type="text" class="form-control" name="FromDate"
                                                                id="FromDate" readonly="readonly"
                                                                value="<?php echo $row['FromDate']; ?>" required>
                                                        </td>
                                                        <th>To Date</th>
                                                        <td><input type="text" class="form-control" name="ToDate"
                                                                id="ToDate" readonly="readonly"
                                                                value="<?php echo $row['ToDate']; ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>PickUp Time</th>
                                                        <td><input type="time" class="form-control" name="pickuptime"
                                                                id="pickuptime"
                                                                value="<?php echo $row['pickuptime']; ?>" required></td>
                                                        <td style="text-align:center" colspan="4">
                                                            <button class="btn btn-primary pull-left"
                                                                name="owner_update_time" type="submit">Change Pickup
                                                                Time</button>
                                                        </td>

                                                    </tr>


                                                    <tr>
                                                        <th>Total Days</th>
                                                        <td><input type="text" class="form-control" name="TotalNoDays"
                                                                id="TotalNoDays" readonly="readonly"
                                                                value="<?php echo htmlentities($tdays = $row['TotalNoDays']) + 1; ?>"
                                                                required>
                                                        </td>
                                                        <th>Rent Per Days</th>
                                                        <td><input type="text" class="form-control" name="PricePerDay"
                                                                id="PricePerDay" onkeyup="add()"
                                                                value="<?php echo htmlentities($ppdays = $row['PricePerDay']); ?>"
                                                                required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="3" style="text-align:center">Grand Total</th>
                                                        <td><input type="text" class="form-control" name="total"
                                                                id="total" readonly="readonly"
                                                                value="<?php echo htmlentities(($tdays) * $ppdays); ?>"
                                                                required>
                                                        </td>
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
                                                        <td><?php echo htmlentities($row['UpdationDate']); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="4" style="text-align:center;color:blue">Assign
                                                            Driver
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Driver Name</th>
                                                        <td><select name="name" id="name" type="text"
                                                                class="selectpicker">
                                                                <option value="<?php echo $row['id']; ?>">
                                                                    <?php echo $row['DriverName']; ?></option>
                                                                <?php
                                                                        $qry1 = "SELECT DriverName from tblbooking";
                                                                        $exe = mysqli_query($conn, $qry1);
                                                                        while ($rows = mysqli_fetch_assoc($exe)) {
                                                                            $number = $rows['number'];
                                                                            $drivername = $rows['name'];
                                                                        ?>
                                                                <!-- <option value="<?php echo $rows['id'] ?>"
                                                                    driver_name="<?php echo $rows['id'] ?>"
                                                                    number="<?php echo $rows['number']; ?>">
                                                                    <?php echo $rows['name'] ?>
                                                                </option> -->

                                                                <?php }  ?>

                                                            </select>
                                                        </td>
                                                        <th>Phone Number</th>
                                                        <td><input class="form-control white_bg"
                                                                placeholder="Driver Number" name="DriverNo"
                                                                id="DriverNo" value="<?php echo $row['DriverNo']; ?>"
                                                                type="text" readonly="readonly"></td>
                                                        <td><input class="form-control white_bg"
                                                                placeholder="Driver Name" name="driver_name"
                                                                id="driver_name" value="<?php echo $row['Driverid']; ?>"
                                                                type="hidden" readonly="readonly"></td>
                                                    </tr>


                                                    <?php if ($row['Status'] == 0) { ?>

                                                    <tr>
                                                        <td style="text-align:center" colspan="4">
                                                            <button class="btn btn-primary" name="owner_update_submit"
                                                                type="submit">Update</button>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                    <?php $cnt = $cnt + 1;
                                                    }
                                                } ?>
                                                </form>
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
    <script>
    function add() {
        var x = parseInt(document.getElementById("totalnodays").value);
        var y = parseInt(document.getElementById("priceperday").value)
        document.getElementById("total").value = x * y;
    }
    </script>
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
    <script language="javascript" type="text/javascript">
    function f3() {
        window.print();
    }
    </script>
    <script>
    $(document).ready(function() {
        $('select[name="name"]').change(function() {
            var number = $('option:selected', this).attr('number');
            var driver_name = $('option:selected', this).attr('driver_name');
            $("#number").val(number);
            $("#driver_name").val(driver_name);
        });
    });
    </script>
</body>

</html>