<?php
session_start();
//error_reporting(0);
include("includes/connection.php");
$id = $_GET['id'];

if (isset($_POST['submit'])) {

    $FromDate = htmlspecialchars($_POST['FromDate']);
    $ToDate = htmlspecialchars($_POST['ToDate']);
    $pickuptime = htmlspecialchars($_POST['pickuptime']);
    $pickup = htmlspecialchars($_POST['pickup']);
    $dropoff = htmlspecialchars($_POST['dropoff']);

    $query = "insert into tblbooking (pickup,dropoff,FromDate,ToDate,Time) values('$pickup','$dropoff','$fromdate','$todate','$Time')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        header("location:new-bookings.php");
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

                                <form action="" method="post">
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
                                        <div>
                                            <label>pick-up location</label>
                                            <input class="custom-select-box tec-domain-cat"
                                                style="width: 305px; height:30px;" name="pickup" id="pickup" required>
                                            </input>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <div class="row">
                                            <div>
                                                <label>Drop off location</label>
                                                <input class="custom-select-box tec-domain-cat"
                                                    style="width: 305px; height:30px;" name="dropoff" id="dropoff"
                                                    required>
                                                </input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <div class="row">
                                            <div>
                                                <label>From Date</label>
                                                <input class="custom-select-box tec-domain-cat"
                                                    style="width: 305px; height:30px;" name="fromdate" id="fromdate"
                                                    type="date" required>
                                                </input>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <div class="row">
                                            <div>
                                                <label>To Date</label>
                                                <input class="custom-select-box tec-domain-cat"
                                                    style="width: 305px; height:30px;" name="todate" id="todate"
                                                    type="date">
                                                </input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <div class="row">
                                            <div>
                                                <label>Pick up Time </label>
                                                <input class="custom-select-box tec-domain-cat form-control"
                                                    style="width: 305px; height:30px; " name="Time" id="datetimepicker4"
                                                    type="time">
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