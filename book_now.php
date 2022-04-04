<?php
session_start();
//error_reporting(0);

include("includes/connection.php");
$id = $_GET['id'];
// $query = "SELECT * from tblbooking where tblbooking.id='$id'";
// $query_run = mysqli_query($conn, $query);
// $rows = mysqli_fetch_array($query_run);

// function dateDiff($FromDate, $ToDate)
// {
//     $date1_ts = strtotime($FromDate);
//     $date2_ts = strtotime($ToDate);
//     $si = 1;
//     $diff = $date2_ts - $date1_ts;
//     return round($diff / 86400) + 1;
// }

if (isset($_POST['submit'])) {

    $bookingno = mt_rand(100000000, 999999999);
    $status = 1;
    $UserName = htmlspecialchars($_POST['UserName']);
    $ContactNo = htmlspecialchars($_POST['ContactNo']);
    $EmailId = htmlspecialchars($_POST['EmailId']);
    $Password = htmlspecialchars($_POST['Password']);

    $update_qry = "UPDATE tblbooking SET UserName='$UserName',
    ContactNo ='$ContactNo',EmailId='$EmailId',Password='$Password' WHERE id='$id'";
    // -- ,owner_vehicle_name='$VehicleName',
    // -- FromDate='$FromDate',ToDate='$ToDate',Time='$Time', pickup='$pickup',BookingNumber='$bookingno',
    // --   dropoff='$dropoff'     

    $query_run = mysqli_query($conn, $update_qry);
    if ($query_run) {
        header("location:My_booking.php");
    }
}

?>

<!doctype html>
<html lang="en">

<body class="hold-transition sidebar-mini">
    <?php
    include("includes/header.php");
    ?>

    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 ">

                <div class="row">
                    <?php
                    include("includes/connection.php");
                    $query = "SELECT * FROM tblbooking WHERE id = '$_GET[id]'";
                    $query_run = mysqli_query($conn, $query);
                    $rws = mysqli_fetch_array($query_run);
                    ?>

                    <li>
                        <a href="book_car.php?id=<?php echo $rws['id'] ?>">
                            <img class="thumb" src="images/cars/<?php echo $rws['frontimage']; ?>" width="500"
                                height="300" style="margin:52px">
                        </a>
                        <div class="form-box" style="background-color: white;">
                            <!-- <h1>
                            <a
                                href="book_car.php?id=<?php echo $rws['id'] ?>"><?php echo 'Car Make>' . $rws['car_type']; ?></a>
                        </h1> -->
                            <input type="hidden" name="id" value="<?php echo $rws['id'] ?>">
                            <h2>VehicleName: <span
                                    class="property_size"><?php echo $rws['owner_vehicle_name']; ?></span>
                            </h2>
                            <h2>VehicleRCNo: <span
                                    class="property_size"><?php echo $rws['owner_vehicle_RCno']; ?></span>
                            </h2>
                            <h2>VehicleChesisNo: <span
                                    class="property_size"><?php echo $rws['owner_vehicle_chesis_no']; ?></span>
                            </h2>
                            <h2> VehicleNo: <span class="property_size"><?php echo $rws['owner_vehicle_no']; ?></span>
                            </h2>
                            <h2>PricePerDay: <span
                                    class="property_size"><?php echo htmlentities($ppdays = $rws['PricePerDay']); ?></span>
                            </h2>
                            <h2>PickupPlace: <span class="property_size"><?php echo $rws['pickup']; ?></span></h2>
                            <h2>DropOffPlace: <span class="property_size"><?php echo $rws['dropoff']; ?></span></h2>
                            <h2>TotalNo of Days: <span
                                    class="property_size"><?php echo htmlentities($tdays = $rws['TotalNoDays']); ?></span>
                            </h2>
                            <h2>TotalFare: <span
                                    class="property_size"><?php echo htmlentities(($tdays) * $ppdays); ?></span>
                            </h2>
                        </div>
                    </li>

                </div>
                <form action="" class="form-box" method="post" style="width:700px" name="booking" id="booking">
                    <div style="background-color: white">
                        <h3 class="form-block-title" style="font-size: 30px;color: #f7eded;background-color: #1886bb;">
                            Select
                            User Information</h3>
                    </div>
                    <div class="row">

                        <input type="hidden" name="id" value="<?php echo $rws['id']; ?>">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Enter your name *</label>
                                <input type="text" name="UserName" placeholder="Your name" pattern="[a-z]{1,15}"
                                    title="Username should only contain lowercase letters. e.g. john" required>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Enter your contact number *</label>
                                <input type=" number" name="ContactNo" placeholder="contactnumber" style="height: 40px;
                                 width: 200px;">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Enter your Email address *</label>
                                <input type="text" style="height: 40px;
                                    width: 200px;" name="EmailId" title="Contact's email (format: xxx@xxx.xxx)"
                                    pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*"
                                    placeholder="Email address">

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Enter your password *</label>
                                <input type="text" name="Password" placeholder="Type your password" style="height: 40px;
                                     width: 200px;">

                            </div>
                        </div>
                    </div>
                    <!-- <a href="index.php" class="submit-btn btn" style="background-color: #1886bb;color: black" type="submit"
                          name="submit" id="submit">Go To
                             Payment</a> -->
                    <center><button class="submit-btn btn" name="submit" type="submit">Book</button></center>
                </form>
                </br>

            </div>

        </div>
    </div>
    <?php
    include("includes/footer.php");
    include("includes/footerlink.php");
    ?>
</body>
<script type="text/javascript">
$(document).ready(function() {

            $("#booking").validate({
                rules: {
                    UserName: {
                        required: true,
                        minlength: 3,
                    },
                    ContactNo: {
                        required: true,
                        minlength: 10,
                    },
                    EmailId: {
                        required: true,
                        email: true,
                    },
                    Password: {
                        required: true,
                        minlength: 8,
                    },
                },
                messages: {
                    UserName: {
                        required: "<b style='color:red'>Please enter your Full Name</b>",
                        minlength: "<b style='color:red'>Full Name should be at least 3 characters</b>",
                    },
                    EmailId: {
                        required: "<b style='color:red'>Please enter Email Id</b>",
                        email: "<b style='color:red'>The email should be in the format: abc@domain.tld</b>",
                    },
                    ContactNo: {
                        required: "<b style='color:red'>Please enter your Mobile Number</b>",
                        number: "<b style='color:red'>Please Enter numerical values Only</b>",
                    },
                    Password: {
                        required: "<b style='color:red'>Please enter your Password</b>",
                        minlength: "<b style='color:red'>Password should be at least 8 characters</b>",
                    },
                },
                submitHandler: function(form) {
                    form.submit();
                },
            });
</script>

</html>