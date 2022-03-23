<?php
session_start();
//error_reporting(0);
include("includes/connection.php");
$id = $_GET['id'];
$query = "SELECT * from tblbooking where tblbooking.id='$id'";
$query_run = mysqli_query($conn, $query);
$rows = mysqli_fetch_array($query_run);

function dateDiff($FromDate, $ToDate)
{
    $date1_ts = strtotime($FromDate);
    $date2_ts = strtotime($ToDate);
    $si = 1;
    $diff = $date2_ts - $date1_ts;
    return round($diff / 86400) + 1;
}

if (isset($_POST['submit'])) {
    $Driver_DL_No = $_REQUEST['Driver_DL_No'];
    $Driver_DL_No = htmlspecialchars($_POST['Driver_DL_No']);
    $UserName = htmlspecialchars($_POST['UserName']);
    $ContactNo = htmlspecialchars($_POST['ContactNo']);
    $EmailId = htmlspecialchars($_POST['EmailId']);
    $Password = htmlspecialchars($_POST['Password']);
    $address = htmlspecialchars($_POST['address']);
    $City = htmlspecialchars($_POST['City']);
    $bookingno = mt_rand(100000000, 999999999);
    $status = 0;
    $brand = htmlspecialchars($_POST['brand']);
    $owner_vehicle_name = htmlspecialchars($_POST['owner_vehicle_name']);
    $owner_vehicle_no = htmlspecialchars($_POST['owner_vehicle_no']);
    $owner_vehicle_RCno = htmlspecialchars($_POST['owner_vehicle_RCno']);
    $owner_vehicle_chesis_no = htmlspecialchars($_POST['owner_vehicle_chesis_no']);
    $DriverName = htmlspecialchars($_POST['DriverName']);
    $DriverMobile = htmlspecialchars($_POST['DriverMobile']);
    $PricePerDay = htmlspecialchars($_POST['PricePerDay']);
    $SeatingCapacity = htmlspecialchars($_POST['SeatingCapacity']);
    $ModelYear = htmlspecialchars($_POST['ModelYear']);
    $OwnerName = htmlspecialchars($_POST['OwnerName']);
    $owner_mobile = htmlspecialchars($_POST['owner_mobile']);
    $owner_email = htmlspecialchars($_POST['owner_email']);
    $Categories = htmlspecialchars($_POST['Categories']);
    $FromDate = htmlspecialchars($_POST['FromDate']);
    $ToDate = htmlspecialchars($_POST['ToDate']);
    $Time = htmlspecialchars($_POST['Time']);
    $pickup = htmlspecialchars($_POST['pickup']);
    $dropoff = htmlspecialchars($_POST['dropoff']);

    $query = "insert into tblbooking (pickup,dropoff,FromDate,ToDate,Time) values('$pickup','$dropoff','$FromDate','$ToDate','$Time')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        //header("location:new-bookings.php");
    }
}

?>
<!doctype html>
<html lang="en" class="no-js">

<?php include("includes/header_link.php"); ?>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <!-- // <?php include('includes/sidebar.php'); ?> -->

        <div class="content-wrapper" style="margin-left: 10px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="padding: 0px;">

                                <form action="" method="post" name="add_booking" id="add_booking">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <?php
                                    $id = intval($_GET['id']);
                                    $query = "SELECT * from tblbooking where tblbooking.id='$id'";
                                    $query_run = mysqli_query($conn, $query);
                                    $cnt = 1;
                                    if (mysqli_num_rows($query_run) > 0) {
                                        $row = mysqli_fetch_array($query_run);

                                    ?>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>CustomerName</label>
                                                <input type="text" class="form-control" placeholder="Enter customername"
                                                    name="UserName" id="UserName" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>ContactNo</label>
                                                <input type="number" class="form-control"
                                                    placeholder="Enter contact number" name="ContactNo" id="ContactNo">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>EmailId</label>
                                                    <input type="email" class="form-control" placeholder="Enter EmailId"
                                                        name="EmailId" id="EmailId">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="text" class="form-control" placeholder="Enter password"
                                                        name="Password" id="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Enter address"
                                                        name="address" id="address">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="Enter city"
                                                        name="City" id="City">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>DateOfBirth</label>
                                                    <input type="date" class="form-control" id="dob" name="dob"
                                                        placeholder="date of birth" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Categories</label>
                                                    <input type="text" class="form-control" placeholder="Enter category"
                                                        name="Categories" id="Categories"
                                                        value="<?php echo $rows['Categories']; ?>" readonly="readonly">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>SeatingCapacity</label>
                                                    <input class="custom-select-box tec-domain-cat"
                                                        style="width: 305px; height:30px;" name="seat" id="seat"
                                                        value="<?php echo $row['SeatingCapacity'] ?>" required>
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>pick-up location</label>
                                                    <input class="custom-select-box tec-domain-cat"
                                                        style="width: 305px; height:30px;" name="pickup" id="pickup"
                                                        required>
                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Drop off location</label>
                                                    <input class="custom-select-box tec-domain-cat"
                                                        style="width: 305px; height:30px;" name="dropoff" id="dropoff"
                                                        required>
                                                    </input>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>From Date</label>
                                                        <input class="custom-select-box tec-domain-cat"
                                                            style="width: 305px; height:30px;" name="FromDate"
                                                            id="FromDate" type="date" required>
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>To Date</label>
                                                        <input class="custom-select-box tec-domain-cat"
                                                            style="width: 305px; height:30px;" name="ToDate" id="ToDate"
                                                            type="date">
                                                        </input>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Pick up Time </label>
                                                        <input class="custom-select-box tec-domain-cat form-control"
                                                            style="width: 305px; height:30px; " name="Time"
                                                            id="datetimepicker4" type="time">
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="btn btn-primary" name="submit" type="submit">submit</button>
                                            <?php } ?>
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

</body>

</html>