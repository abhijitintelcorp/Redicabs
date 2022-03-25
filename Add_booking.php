<?php
session_start();
//error_reporting(0);

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
<html lang="en" class="no-js">

<body class="hold-transition sidebar-mini">
    <?php
    include("includes/search-header.php");
    ?>

    <div class="wrapper">

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-10">
                        <!-- general form elements -->
                        <div class="card card-primary">

                            <div class="card card-warning">

                                <!-- /.card-header -->
                                <div class="card-body d-flex justify-content-center ">


                                    <?php
                                    $id = intval($_GET['id']);
                                    $query = "SELECT * from tblbooking where tblbooking.id='$id'";
                                    $query_run = mysqli_query($conn, $query);
                                    $cnt = 1;
                                    if (mysqli_num_rows($query_run) > 0) {
                                        $row = mysqli_fetch_array($query_run);

                                    ?>
                                    <form action="" method="post" name="add_booking" id="add_booking">
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>SeatingCapacity</label>
                                                <select id="SeatingCapacity" class="selectpicker"
                                                    data-live-search="false" name="SeatingCapacity"
                                                    style="width: 70px; border: black;" required>
                                                    <option value="<?php echo $row['SeatingCapacity']; ?>">
                                                        <?php echo $row['SeatingCapacity']; ?></option>
                                                    <?php
                                                        $qry = "SELECT DISTINCT SeatingCapacity from tblbooking WHERE Status = '3'   ASC";
                                                        $exe = mysqli_query($conn, $qry);
                                                        while ($rows = mysqli_fetch_assoc($exe)) {

                                                        ?>
                                                    <option value="<?php echo $rows['SeatingCapacity'] ?>">
                                                        <?php echo $rows['SeatingCapacity'] ?>
                                                    </option>
                                                    <?php }  ?>
                                                </select>

                                            </div>
                                            <div class="col-sm-4">

                                                <label>Vehicle Brand</label>
                                                <select class="selectpicker" data-live-search="false" name="brand"
                                                    id="brand" style=" height: 26px;width: 134px;" required>
                                                    <option value="<?php echo $row['owner_vehicle_brand']; ?>">
                                                        <?php echo $row['owner_vehicle_brand']; ?></option>

                                                </select>

                                            </div>

                                            <div class="col-sm-4 ">

                                                <label>Vehicle Name</label>
                                                <select class="selectpicker" data-live-search="false" name="VehicleName"
                                                    id="VehicleName" style=" height: 26px;width: 134px;" required>
                                                    <option value="<?php echo $row['owner_vehicle_name'] ?>">
                                                        <?php echo $row['owner_vehicle_name']; ?> </option>

                                                </select>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>pick-up location</label>
                                                    <input class="custom-select-box tec-domain-cat"
                                                        style="width: 305px; height:30px;" name="pickup" id="pickup"
                                                        required>
                                                    </input>
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Drop off location</label>
                                                    <input class="custom-select-box tec-domain-cat"
                                                        style="width: 305px; height:30px;" name="dropoff" id="dropoff"
                                                        required>
                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>From Date</label>
                                                    <input class="custom-select-box tec-domain-cat"
                                                        style="width: 305px; height:30px;" name="FromDate" id="FromDate"
                                                        type="date" required>
                                                    </input>
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>To Date</label>
                                                    <input class="custom-select-box tec-domain-cat"
                                                        style="width: 305px; height:30px;" name="ToDate" id="ToDate"
                                                        type="date">
                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Pick up Time </label>
                                            <input class="custom-select-box tec-domain-cat form-control"
                                                style="width: 305px; height:30px; " name="Time" id="datetimepicker4"
                                                type="time">
                                            </input>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary" name="submit" type="submit">submit</button>

                                </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
        </section>
    </div>
    </div>
    </div>
    <?php
    include("includes/footerlink.php");
    ?>
    <script type="text/javascript">
    $(document).ready(function() {
                $('#SeatingCapacity').on('change', function() {
                    var SeatingCapacity = $(this).val();
                    if (SeatingCapacity) {
                        $.ajax({
                            type: 'POST',
                            url: 'get-brand-name.php',
                            data: 'SeatingCapacity=' + SeatingCapacity,
                            success: function(html) {
                                $('#brand').html(html);
                                $('#VehicleName').html(
                                    '<option value="">Select Brand first</option>');
                            }
                        });
                    } else {
                        $('#brand').html('<option value="">Select Seating Capacity first</option>');
                        $('#VehicleName').html('<option value="">Select Brand first</option>');

                    }
                });

                $('#brand').on('change', function() {
                    var owner_vehicle_brand = $(this).val();
                    if (owner_vehicle_brand) {
                        $.ajax({
                            type: 'POST',
                            url: 'get-brand-name.php',
                            data: 'owner_vehicle_brand=' + owner_vehicle_brand,
                            success: function(html) {
                                $('#VehicleName').html(html);
                            }
                        });
                    } else {
                        $('#VehicleName').html('<option value="">Select Brand first</option>');
                    }
                });
    </script>
</body>

</html>