<?php
session_start();
include("includes/connection.php");
//error_reporting(0);
$last_id = $_SESSION['last_id'];
$sql = "SELECT * from tblbooking where id='$last_id'";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_assoc($query);
//$id = $_SESSION['last_id'];
if (isset($_POST['submit'])) {

    $UserName = htmlspecialchars($_POST['UserName']);
    $ContactNo = htmlspecialchars($_POST['ContactNo']);
    $address = htmlspecialchars($_POST['address']);
    $City = htmlspecialchars($_POST['City']);
    $EmailId = htmlspecialchars($_POST['EmailId']);
    $Password = htmlspecialchars($_POST['Password']);
    $update_qry = "UPDATE 'tblbooking' SET UserName='$UserName',ContactNo ='$ContactNo',address='$address',City='$City',
    EmailId='$EmailId',Password='$Password' WHERE id='$last_id'";
    $query_run = mysqli_query($conn, $update_qry);
    $last_id = mysqli_insert_id($conn);
    $_SESSION['last_id'] = $last_id;

    if ($query_run) {
        //echo "profile updated succesfully";
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


            <div class="col-md-9">
                <form action="" class="form-box2" method="post" name="booking" id="booking">
                    <input type="hidden" name="id" value="<?php echo $last_id; ?>">
                    <?php
                    $sql = "SELECT * from tblbooking where id='$last_id'";
                    $query = mysqli_query($conn, $sql);
                    $results = mysqli_fetch_assoc($query);
                    ?>

                    <div style="background-color: white">
                        <h3 class="form-block-title"
                            style="font-size: 30px; padding:5px; color: #f7eded;background-color: #1886bb;">
                            Update Profile</h3>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name*</label>
                            <input type="text" class="form-control24" name="UserName" id="UserName"
                                value="<?php echo $results['UserName']; ?>">

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label contact number *</label>
                                <input type=" number" class="form-control24" name="ContactNo" id="ContactNo"
                                    value="<?php echo $results['ContactNo']; ?>">

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label Address *</label>
                                <input type="text" class="form-control24" name="address" id="address"
                                    value="<?php echo $results['address']; ?>">

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> City *</label>
                            <input type="text" class="form-control24" name="City" id="City"
                                value="<?php echo $results['City']; ?>">

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> Email address *</label>
                            <input type="text" class="form-control24" name="EmailId" id="EmailId"
                                value="<?php echo $results['EmailId']; ?>">

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> password *</label>
                            <input type="text" class="form-control24" name="Password" id="Password"
                                value="<?php echo $results['Password']; ?>">

                        </div>
                    </div>
                    <center><button class="submit-btn btn" name="submit" type="submit">Save Changes</button></center>
                </form>
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