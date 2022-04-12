<?php
session_start();
include("includes/connection.php");
?>
<?php
//include("includes/header.php");
$id = $_GET['id'];
$_SESSION['id'] = $id;
?>
<!doctype html>
<html lang="en">
<?php
include("includes/login_header.php");
?>
<style>
    .profile_nav {
        border-right: 1px solid #c5c5c5;
        padding: 20px;
        text-align: center;
        background-color: #0e8fd5;
        color: #ffffff;
    }

    .profile_nav ul {
        padding: 0px;
        margin: 0px;
    }

    .profile_nav ul li {
        list-style: none;
    }

    .profile_nav ul li a {
        color: #ffffff;
        font-size: 15px;
        font-weight: 900;
    }

    .profile_nav ul li.active a,
    .profile_nav ul li a:hover {
        color: #fa2837;
    }
</style>

<body class="hold-transition sidebar-mini">


    <div class="container" id="booknow">
        <div class="row d-flex justify-content-center">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <?php
            $sql = "SELECT * from tblbooking where id='$id'";
            $query = mysqli_query($conn, $sql);
            $results = mysqli_fetch_assoc($query);
            ?>
            <div class="col-sm-12 mybooking2">
                <div class="col-sm-12">
                    <h2 class=" uppercase underline">My Bookings</h2>
                    <hr width="100%" height="5px">
                </div>

            </div>
            <div class="col-sm-8 mybooking">

                <?php
                $sql = "SELECT * from tblbooking where id='$id'";
                $query = mysqli_query($conn, $sql);
                while ($results = mysqli_fetch_assoc($query)) {
                ?>

                    <div>

                        <div class="col-md-6 book1">

                            <img class="thumb" src="images/<?php echo $results['frontimage']; ?>" width="100%">

                        </div>
                        <div class="col-md-6 book2">

                            <input type="hidden" name="id" value="<?php echo $last_id; ?>">
                            <p>
                            <h3 style="color:red;">Welcome, <?php echo $results['UserName']; ?></h3>
                            </p>
                            <h5 class="uppercase underline">Booking Number :
                                <span style="color:red;"># <?php echo $results['BookingNumber']; ?></span>
                            </h5>
                            <p>Vehicle Name: <span class="property_size"><?php echo $results['owner_vehicle_name']; ?></span>
                            </p>

                            <p> Vehicle Number: <span class="property_size"><?php echo $results['owner_vehicle_no']; ?></span>
                            </p>

                            <p>Pickup Place: <span class="property_size"><?php echo "<b>" . $results['pickup'] . "</b>"; ?></span>
                            </p>
                            <p>DropOff Place: <span class="property_size"><?php echo "<b>" . $results['dropoff'] . "</b>"; ?></b></span>
                            </p>
                            <?php
                            if ($results['Status'] == 0) {
                                $msg = "<b style='color:red;'>Not Confirmed</b>";
                            } else if ($results['Status'] == 1) {
                                $msg = "<b style='color:green;'>Confirmed</b>";
                            } else if ($results['Status'] == 2) {
                                $msg = "<b style='color:red;'>Cancelled</b>";
                            } else if ($results['Status'] == 4) {
                                $msg = "<b style='color:red;'>Delayed</b>";
                            } else {
                                $msg = "<b style='color:red;'>Journey Completed</b>";
                            }
                            ?>
                            <p>Status: <span class="property_size"><?php echo $msg; ?></b></span>
                            </p>
                            <p class="price">Total Payment: <i class="fa fa-inr" style="font-size:18px"></i> <span class="property_size"><?php echo $results['Total']; ?></span>
                            </p>
                            <button class="payment">Make Payment</button>
                        </div>
                    </div>
                <?php }  ?>
            </div>

            <div class="col-sm-4">
                <div class="profile_nav">
                    <ul>
                        <li><a href="profile.php?id=<?php echo $id; ?>">Profile Settings</a></li>
                        <hr>
                        <li><a href="update-password.php?id=<?php echo $id; ?>">Update Password</a></li>
                        <hr>
                        <li><a href="my_booking.php?id=<?php echo $id; ?>">My Booking</a></li>
                        <hr>
                        <li><a href="logout.php">Sign Out</a></li>
                    </ul>
                </div>
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

                },
                City: {
                    required: true,

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