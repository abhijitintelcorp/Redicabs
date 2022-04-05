<?php
session_start();
include("includes/connection.php");
//error_reporting(0);
$id = $_GET['id'];
$last_id = $_SESSION['last_id'];
$query_run = "SELECT * FROM tblbooking WHERE id = '$last_id'";
$query_run1 = mysqli_query($conn, $query_run);
$rows = mysqli_fetch_array($query_run1);
$tdays = $rows['TotalNoDays'];

if (isset($_POST['submit'])) {
    $bookingno = mt_rand(100000000, 999999999);
    $Status = 1;
    $UserName = htmlspecialchars($_POST['UserName']);
    $ContactNo = htmlspecialchars($_POST['ContactNo']);
    $address = htmlspecialchars($_POST['address']);
    $City = htmlspecialchars($_POST['City']);
    $owner_vehicle_name = htmlspecialchars($_POST['owner_vehicle_name']);
    $owner_vehicle_brand = htmlspecialchars($_POST['owner_vehicle_brand']);
    $owner_vehicle_chesis_no = htmlspecialchars($_POST['owner_vehicle_chesis_no']);
    $owner_vehicle_RCno = htmlspecialchars($_POST['owner_vehicle_RCno']);
    $owner_vehicle_no = htmlspecialchars($_POST['owner_vehicle_no']);
    $owner_email = htmlspecialchars($_POST['owner_email']);
    $owner_mobile = htmlspecialchars($_POST['owner_mobile']);
    $OwnerName = htmlspecialchars($_POST['OwnerName']);
    $frontimage = htmlspecialchars($_POST['frontimage']);
    $backimage = htmlspecialchars($_POST['backimage']);
    $Owner_Aadhar_No = htmlspecialchars($_POST['Owner_Aadhar_No']);
    $own_adhar_image = htmlspecialchars($_POST['own_adhar_image']);
    $DriverName = htmlspecialchars($_POST['DriverName']);
    $DriverMobile = htmlspecialchars($_POST['DriverMobile']);
    $Driver_DL_No = htmlspecialchars($_POST['Driver_DL_No']);
    $DLimage = htmlspecialchars($_POST['DLimage']);
    $Driver_Adhar_image = htmlspecialchars($_POST['Driver_Adhar_image']);
    $PricePerDay = htmlspecialchars($_POST['PricePerDay']);
    $Total = htmlspecialchars($_POST['Total']);
    $ModelYear = htmlspecialchars($_POST['ModelYear']);
    $EmailId = htmlspecialchars($_POST['EmailId']);
    $Password = htmlspecialchars($_POST['Password']);
    $update_qry = "UPDATE tblbooking SET UserName='$UserName',ContactNo ='$ContactNo',address='$address',City='$City',
    owner_vehicle_name='$owner_vehicle_name',owner_vehicle_brand='$owner_vehicle_brand',owner_vehicle_chesis_no='$owner_vehicle_chesis_no',
    owner_vehicle_RCno='$owner_vehicle_RCno',owner_vehicle_no='$owner_vehicle_no',owner_email='$owner_email',owner_mobile='$owner_mobile',
    OwnerName='$OwnerName',frontimage='$frontimage',backimage='$backimage',Owner_Aadhar_No='$Owner_Aadhar_No',own_adhar_image='$own_adhar_image',
    DriverName='$DriverName',DriverMobile='$DriverMobile',Driver_DL_No='$Driver_DL_No',DLimage='$DLimage',Driver_Adhar_image='$Driver_Adhar_image',
    PricePerDay='$PricePerDay',Total='$Total',ModelYear='$ModelYear',EmailId='$EmailId',Password='$Password',Status='$Status' WHERE id='$last_id'";

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
            $id = $_GET['id'];
            $user_id = $_GET['user_id'];
            $query = "SELECT * FROM tblbooking WHERE id = '$id'";
            $query_run = mysqli_query($conn, $query);
            $rws = mysqli_fetch_array($query_run);
            $ppdays = $rws['PricePerDay'];
            ?>
            <div class="col-md-9">
                <div class="row" id="booking11">
                    <div class="col-md-6 book1">
                        <input type="hidden" name="id" value="<?php echo $last_id; ?>">
                        <img class="thumb" src="images/<?php echo $rws['frontimage']; ?>" width="100%">
                        <p class="spam">TotalFare: <span
                                class="property_size"><?php echo htmlentities($tdays * $ppdays); ?></span>
                        </p>

                    </div>
                    <div class="col-md-6 book2">

                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <p>Vehicle Name: <span class="property_size"><?php echo $rws['owner_vehicle_name']; ?></span>
                        </p>
                        <p>Vehicle RCNo: <span class="property_size"><?php echo $rws['owner_vehicle_RCno']; ?></span>
                        </p>
                        <p>Vehicle ChesisNo: <span
                                class="property_size"><?php echo $rws['owner_vehicle_chesis_no']; ?></span>
                        </p>
                        <p> Vehicle Number: <span class="property_size"><?php echo $rws['owner_vehicle_no']; ?></span>
                        </p>
                        <p>Price Per Day: <span
                                class="property_size"><?php echo htmlentities($ppdays = $rws['PricePerDay']); ?></span>
                        </p>
                        <hr>
                        <p>Pickup Place: <span class="property_size"><?php echo $rows['pickup']; ?></span></p>
                        <p>DropOff Place: <span class="property_size"><?php echo $rows['dropoff']; ?></span></p>
                        <p>TotalNo of Days: <span
                                class="property_size"><?php echo htmlentities($tdays = $rows['TotalNoDays']); ?></span>
                        </p>


                    </div>
                </div>
                <form action="" class="form-box2" method="post" name="booking" name="booking" id="booking">

                    <div style="background-color: white">
                        <h3 class="form-block-title"
                            style="font-size: 30px; padding:5px; color: #f7eded;background-color: #1886bb;">
                            Select
                            User Information</h3>
                    </div>



                    <input type="hidden" name="frontimage" value="<?php echo $rws['frontimage']; ?>" />
                    <input type="hidden" name="backimage" value="<?php echo $rws['backimage']; ?>" />
                    <input type="hidden" name="OwnerName" value="<?php echo $rws['OwnerName']; ?>" />
                    <input type="hidden" name="owner_mobile" value="<?php echo $rws['owner_mobile']; ?>" />
                    <input type="hidden" name="owner_email" value="<?php echo $rws['owner_email']; ?>" />
                    <input type="hidden" name="owner_vehicle_no" value="<?php echo $rws['owner_vehicle_no']; ?>" />
                    <input type="hidden" name="owner_vehicle_RCno" value="<?php echo $rws['owner_vehicle_RCno']; ?>" />
                    <input type="hidden" name="owner_vehicle_chesis_no"
                        value="<?php echo $rws['owner_vehicle_chesis_no']; ?>" />
                    <input type="hidden" name="owner_vehicle_brand"
                        value="<?php echo $rws['owner_vehicle_brand']; ?>" />
                    <input type="hidden" name="owner_vehicle_name" value="<?php echo $rws['owner_vehicle_name']; ?>" />
                    <input type="hidden" name="Owner_Aadhar_No" value="<?php echo $rws['Owner_Aadhar_No']; ?>" />
                    <input type="hidden" name="own_adhar_image" value="<?php echo $rws['own_adhar_image']; ?>" />
                    <input type="hidden" name="DriverName" value="<?php echo $rws['DriverName']; ?>">
                    <input type="hidden" name="DriverMobile" value="<?php echo $rws['DriverMobile']; ?>">
                    <input type="hidden" name="Driver_DL_No" value="<?php echo $rws['Driver_DL_No']; ?>">
                    <input type="hidden" name="DLimage" value="<?php echo $rws['DLimage']; ?>">
                    <input type="hidden" name="Driver_Adhar_image" value="<?php echo $rws['Driver_Adhar_image']; ?>">
                    <input type="hidden" name="PricePerDay" value="<?php echo $rws['PricePerDay']; ?>">
                    <input type="hidden" name="Total" value="<?php echo htmlentities($tdays * $ppdays); ?>">
                    <input type="hidden" name="ModelYear" value="<?php echo $rws['ModelYear']; ?>">


                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Enter your name *</label>
                            <input type="text" class="form-control24" name="UserName" id="UserName"
                                placeholder="Your name" required>

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
                            <label>Enter your Address *</label>
                            <input type="text" class="form-control24" name="address" id="address"
                                placeholder="Your Address" required>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Enter your City *</label>
                            <input type="text" class="form-control24" name="City" id="City" placeholder="Your City"
                                required>

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
            address: {
                required: true,
                minlength: 20,
            },
            City: {
                required: true,
                minlength: 20,
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
            address: {
                required: "<b style='color:red'>Please enter your address</b>",
                //minlength: "<b style='color:red'>Full Name should be at least 3 characters</b>",
            },
            City: {
                required: "<b style='color:red'>Please enter your city</b>",
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
    });
});
</script>