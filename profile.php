<?php
session_start();
include("includes/connection.php");
//error_reporting(0);
$id = $_GET['id'];
$_SESSION['id'] = $id;
if (isset($_POST['submit'])) {
    $UserName = htmlspecialchars($_POST['UserName']);
    $ContactNo = htmlspecialchars($_POST['ContactNo']);
    $address = htmlspecialchars($_POST['address']);
    $City = htmlspecialchars($_POST['City']);
    $EmailId = htmlspecialchars($_POST['EmailId']);
    $Password = htmlspecialchars($_POST['Password']);
    $update_qry = "UPDATE tblbooking SET UserName='$UserName',ContactNo ='$ContactNo',address='$address',City='$City',
    EmailId='$EmailId',Password='$Password' WHERE id=$id";
    $query_run = mysqli_query($conn, $update_qry);

    if ($query_run) {
        $msg2 = "<b style='color:green;'>Profile Updated Succesfully</b>";
    }
}
?>

<!doctype html>
<html lang="en">
<style>
    .profile_nav {
        border-right: 1px solid #c5c5c5;
        padding: 20px;
        text-align: center !important;
        background-color: #0e8fd5;
        color: #ffffff !important;
    }

    .profile_nav ul {
        padding: 0px;
        margin: 0px;
    }

    .profile_nav ul li {
        list-style: none;
    }

    .profile_nav ul li a {
        color: #ffffff !important;
        font-size: 15px;
        font-weight: 900;
    }

    .profile_nav ul li.active a,
    .profile_nav ul li a:hover {
        color: #fa2837;
    }
</style>

<body class="hold-transition sidebar-mini">
    <?php
    include("includes/header.php");
    ?>


    <div class="container" id="booknow">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 mybooking2">
                <div class="col-sm-12">
                    <h2 class=" uppercase underline">My Profile</h2>
                    <hr width="100%" height="5px">
                </div>

            </div>

            <div class="col-sm-8">
                <?php echo $msg2; ?>
                <form action="" method="post" name="booking" id="booking">
                    <?php
                    $sql = "SELECT * from tblbooking where id='$id'";
                    $query = mysqli_query($conn, $sql);
                    $results = mysqli_fetch_assoc($query);
                    ?>

                    <div style="background-color: white">
                        <h3 class="form-block-title" style="font-size: 30px; padding:5px; color: #f7eded;background-color: #1886bb;">
                            Update Profile</h3>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name*</label>
                            <input type="text" class="form-control24" name="UserName" id="UserName" value="<?php echo $results['UserName']; ?>">

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>contact number *</label>
                            <input type="number" class="form-control24" name="ContactNo" id="ContactNo" value="<?php echo $results['ContactNo']; ?>">

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> Address *</label>
                            <input type="text" class="form-control24" name="address" id="address" value="<?php echo $results['address']; ?>">

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> City *</label>
                            <input type="text" class="form-control24" name="City" id="City" value="<?php echo $results['City']; ?>">

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> Email address *</label>
                            <input type="text" class="form-control24" name="EmailId" id="EmailId" value="<?php echo $results['EmailId']; ?>">

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> password *</label>
                            <input type="text" class="form-control24" name="Password" id="Password" value="<?php echo $results['Password']; ?>">

                        </div>
                    </div>
                    <center><button class="submit-btn btn" name="submit" type="submit">Update</button></center>
                </form>
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