<?php
session_start();
error_reporting(0);

include("includes/connection.php");
$id = $_GET['id'];
// $query = "SELECT * from tblbooking where tblbooking.id='$id'";
// $query_run = mysqli_query($conn, $query);
// $rows = mysqli_fetch_array($query_run);

function dateDiff($FromDate, $ToDate)
{
    $date1_ts = strtotime($FromDate);
    $date2_ts = strtotime($ToDate);
    $si = 1;
    $diff = $date2_ts - $date1_ts;
    return round($diff / 86400) + 1;
}

if (isset($_POST['submit'])) {

    $bookingno = mt_rand(100000000, 999999999);
    $status = 0;
    $brand = htmlspecialchars($_POST['brand']);
    $VehicleName = htmlspecialchars($_POST['VehicleName']);

    $SeatingCapacity = htmlspecialchars($_POST['SeatingCapacity']);
    $FromDate = htmlspecialchars($_POST['FromDate']);
    $ToDate = htmlspecialchars($_POST['ToDate']);
    $Time = htmlspecialchars($_POST['Time']);
    $pickup = htmlspecialchars($_POST['pickup']);
    $dropoff = htmlspecialchars($_POST['dropoff']);

    // $query = "insert into tblbooking (SeatingCapacity,owner_vehicle_name,   
    // pickup,dropoff,FromDate,ToDate,Time)
    //  values('$SeatingCapacity','$VehicleName','$pickup','$dropoff','$FromDate','$ToDate','$Time')";
    $update_qry = "UPDATE tblbooking SET SeatingCapacity='$SeatingCapacity',
    owner_vehicle_brand ='$brand',SubCategories='$brand',owner_vehicle_name='$VehicleName',
    FromDate='$FromDate',ToDate='$ToDate',Time='$Time', pickup='$pickup',BookingNumber='$bookingno',
      dropoff='$dropoff' WHERE id='$id'";

    $query_run = mysqli_query($conn, $update_qry);
    if ($query_run) {
        header("location:Booking-details.php");
    }
}

?>
<style>
.bg {
    background-color: #1799df;
}
</style>
<!doctype html>
<html lang="en">

<body class="hold-transition sidebar-mini">
    <?php
    //include("includes/search-header.php");
    ?>

    <div class="wrapper">

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-10">
                        <!-- general form elements -->
                        <div class="card card-primary">

                            <?php
                            $query = "SELECT * from tblbooking where id ='149'";
                            $query_run = mysqli_query($conn, $query);
                            $cnt = 1;
                            if (mysqli_num_rows($query_run) > 0) {
                                $rows = mysqli_fetch_array($query_run);

                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <h3 class="form-block-title"
                                    style="font-size: 30px;color: #f7eded;background-color: #1886bb;">
                                    Vehicle
                                    Information</h3>
                                <div class="col-lg-18" style="border: 2px solid black;width: 450px;">
                                    <input type="hidden" name="id" value=" <?php echo $row['id']; ?>">
                                    <img src="images/<?php echo $rows['frontimage']; ?>" width="100px" height="100px"
                                        alt="">
                                    <ul class="feature-list">
                                        <h6> Vehicle name : <?php echo $rows['owner_vehicle_name']; ?>
                                        </h6>

                                        <h6>PriceperDay: <?php echo $rows['PricePerDay']; ?></h6>

                                        <h6>SeatingCapacity :
                                            <?php echo $rows['SeatingCapacity']; ?></h6>
                                    </ul>
                                </div>
                            </div>

                            <?php
                            }

                            ?>

                            <button class="btn btn-primary" name="submit" type="submit">submit</button>

                        </div>
                    </div>

                </div>
        </section>
    </div>
</body>

</html>

<?php
include("includes/footerlink.php");
?>