<?php
session_start();
//error_reporting(0);

include("includes/connection.php");
if (isset($_POST['submit'])) {


    $bookingno = mt_rand(100000000, 999999999);
    $Status = 1;
    $UserName = htmlspecialchars($_POST['UserName']);
    $ContactNo = htmlspecialchars($_POST['ContactNo']);
    $EmailId = htmlspecialchars($_POST['EmailId']);
    $Password = htmlspecialchars($_POST['Password']);
    $_SESSION['last_id'] = $last_id;
    $update_qry = "UPDATE tblbooking SET UserName='$UserName',
    ContactNo ='$ContactNo',EmailId='$EmailId',Password='$Password',Status='$Status'  WHERE id='$last_id'";

    $query_run = mysqli_query($conn, $update_qry);
    // $last_id = mysqli_insert_id($conn);
    // $_SESSION['last_id'] = $last_id;

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

    <div class="container" id="booknow">
        <div class="row d-flex justify-content-center">

            <?php
            include("includes/connection.php");
            $id = $_GET['id'];
            $query = "SELECT * FROM tblbooking WHERE id = '$id'";
            $query_run = mysqli_query($conn, $query);
            $rws = mysqli_fetch_array($query_run);
            ?>
            <div class="col-md-9">
                <div class="row" id="booking11">
                    <div class="col-md-6 book1">
                        <input type="hidden" name="id" value=" <?php echo $id; ?>">
                        <img class="thumb" src="images/<?php echo $rws['frontimage']; ?>" width="100%">
                        <p class="spam">TotalFare: <span
                                class="property_size"><?php echo htmlentities(($tdays) * $ppdays); ?></span>
                        </p>

                    </div>
                    <div class="col-md-6 book2">

                        <input type="hidden" name="id" value=" <?php echo $last_id; ?>">
                        <p>Vehicle Name: <span class="property_size"><?php echo $rws['owner_vehicle_name']; ?></span>
                        </p>
                        <p>Vehicle RCNo: <span class="property_size"><?php echo $rws['owner_vehicle_RCno']; ?></span>
                        </p>
                        <p>Vehicle ChesisNo: <span
                                class="property_size"><?php echo $rws['owner_vehicle_chesis_no']; ?></span>
                        </p>
                        <p> Vehicle Number: <span class="property_size"><?php echo $rws['owner_vehicle_no']; ?></span>
                        </p>
                        <p>PricePerDay: <span
                                class="property_size"><?php echo htmlentities($ppdays = $rws['PricePerDay']); ?></span>
                        </p>
                        <p>Pickup Place: <span class="property_size"><?php echo $rws['pickup']; ?></span></p>
                        <p>DropOff Place: <span class="property_size"><?php echo $rws['dropoff']; ?></span></p>
                        <p>TotalNo of Days: <span
                                class="property_size"><?php echo htmlentities($tdays = $rws['TotalNoDays']); ?></span>
                        </p>


                    </div>
                </div>
                <form action="" class="form-box2" method="post" name="booking" id="booking">
                    <div style="background-color: white">
                        <h3 class="form-block-title"
                            style="font-size: 30px; padding:5px; color: #f7eded;background-color: #1886bb;">
                            Select
                            User Information</h3>
                    </div>


                    <input type="hidden" name="id" value="<?php echo $rws['last_id']; ?>">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Enter your name *</label>
                            <input type="text" class="form-control24" name="UserName" id="UserName"
                                placeholder="Your name" pattern="[a-z]{1,15}"
                                title="Username should only contain lowercase letters. e.g. john" required>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Enter your contact number *</label>
                            <input type=" number" class="form-control24" name="ContactNo" id="ContactNo"
                                placeholder="contactnumber">

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Enter your Email address *</label>
                            <input type="text" class="form-control24" name="EmailId" id="EmailId"
                                title="Contact's email (format: xxx@xxx.xxx)"
                                pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*"
                                placeholder="Email address">

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Enter your password *</label>
                            <input type="text" class="form-control24" name="Password" id="Password"
                                placeholder="Type your password">

                        </div>
                    </div>

                    <!-- <a href="index.php" class="submit-btn btn" style="background-color: #1886bb;color: black" type="submit"
                          name="submit" id="submit">Go To
                             Payment</a> -->
                    <center><button class="submit-btn btn" name="submit" type="submit">Book</button></center>
                </form>
            </div>



            <div class="col-md-3">
                <div class="card">
                    <h3>HELPING CENTER</h3>
                    <hr>
                    <p>If in case of any emergency please feel free to contact us</p>
                    <hr>
                    <h2>+91-8956231458</h2>
                    <hr>
                    <h2>support@redicab.in</h2>
                    <hr>
                    <button class=" btn">CALL NOW</button>
                </div>
            </div>

        </div>
    </div>
    <?php
    include("includes/footer.php");
    include("includes/footerlink.php");
    ?>
</body>

</html>
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