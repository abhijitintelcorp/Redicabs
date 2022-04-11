<?php
session_start();
include("includes/connection.php");
?>
<?php
//include("includes/header.php");
$id = $_GET['id'];
?>
<!doctype html>
<html lang="en">
<?php
include("includes/login_header.php");
?>

<body class="hold-transition sidebar-mini">


    <div class="container" id="booknow">
        <div class="row d-flex justify-content-center">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <?php
            $sql = "SELECT * from tblbooking where id='$id'";
            $query = mysqli_query($conn, $sql);
            $results = mysqli_fetch_assoc($query);
            ?>
            <div class="col-md-12 mybooking2">
                <div>
                    <h2 class="uppercase underline">My Bookings</h2>
                    <hr width="150px" height="5px">
                </div>
            </div>
            <div class="col-sm-8 mybooking">



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
                            <span class="property_size"><?php echo $results['BookingNumber']; ?>
                        </h5>
                        <p>Vehicle Name: <span class="property_size"><?php echo $results['owner_vehicle_name']; ?></span>
                        </p>

                        <p> Vehicle Number: <span class="property_size"><?php echo $results['owner_vehicle_no']; ?></span>
                        </p>

                        <p>Pickup Place: <span class="property_size"><?php echo "<b>" . $results['pickup'] . "</b>"; ?></span>
                        </p>
                        <p>DropOff Place: <span class="property_size"><?php echo "<b>" . $results['dropoff'] . "</b>"; ?></b></span>
                        </p>
                        <p class="price">Total Payment: <i class="fa fa-inr" style="font-size:18px"></i> <span class="property_size"><?php echo $results['Total']; ?></span>
                        </p>
                        <button class="payment">Make Payment</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
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