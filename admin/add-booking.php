<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
}

if (isset($_POST['submit'])) {
    $fname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['emailid']);
    $mobile = htmlspecialchars($_POST['mobileno']);
    $password = md5($_POST['password']);
    $confirmpassword = md5($_POST['confirmpassword']);
    $dob = htmlspecialchars($_POST['dob']);
    $adress = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $country = htmlspecialchars($_POST['country']);
    $bookingno = mt_rand(100000000, 999999999);
    $name = htmlspecialchars($_POST['name']);
    $status = 0;
    $BrandName = htmlspecialchars($_POST['brand']);
    $VehiclesTitle = htmlspecialchars($_POST['VehiclesTitle']);
    $vehno = htmlspecialchars($_POST['vehno']);
    $PricePerDay = htmlspecialchars($_POST['PricePerDay']);
    $FuelType = htmlspecialchars($_POST['FuelType']);
    $ModelYear = htmlspecialchars($_POST['ModelYear']);
    $SeatingCapacity = htmlspecialchars($_POST['SeatingCapacity']);
    $phonenumber = htmlspecialchars($_POST['phonenumber']);
    $drivername = htmlspecialchars($_POST['drivername']);
    $Driverid = htmlspecialchars($_POST['Driverid']);
    $number = htmlspecialchars($_POST['number']);
    $fromdate = htmlspecialchars($_POST['fromdate']);
    $todate = htmlspecialchars($_POST['todate']);
    $$totalnodays = $fromdate - $todate;
    $message = htmlspecialchars($_POST['message']);

    $query = "INSERT INTO  tblusers(`FullName`, `EmailId`, `ContactNo`, `Password`, `confirmpassword`, `dob`, `Address`, `City`, `Country`) 
	VALUES('$fname','$email','$mobile','$password','$confirmpassword','$dob','$adress','$city','$country')";
    $query_run = mysqli_query($conn, $query);
    $insert_id = mysqli_insert_id($conn);
    $query1 = "INSERT INTO tblbooking(`user_id`, `BookingNumber`, `VehicleId`, `Driverid`, `BrandId`,  `VehicleNumber`, 
    `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `phonenumber`, `FromDate`, `ToDate`, 
    `totalnodays`, `message`, `Status`) 
    VALUES ('$insert_id','$bookingno','$VehiclesTitle','$name','$BrandName','$vehno','$PricePerDay',
    '$FuelType','$ModelYear','$SeatingCapacity','$number','$fromdate','$todate',
    '$totalnodays','$message','$status')";

    $query_run1 = mysqli_query($conn, $query1);
    if ($query_run1) {
        echo "<script>alert('Booking successfull.');</script>";
        echo "<script type='text/javascript'> document.location = 'new-bookings.php'; </script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script type='text/javascript'> document.location = 'add-booking.php'; </script>";
    }
}

$path1 = "images/" . $frontimage;
$path2 = "images/" . $backimage;
$path3 = "images/" . $DLimage;
$path4 = "images/" . $Adharimage;
$path5 = "images/" . $Adharimage1;
// $created_at = date('Y-m-d');


if ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif') {
    if ($size <= 7000000) {
        $update_qry = "UPDATE  tblbooking SET  owner_name='$owner_name',owner_mobile='$owner_mobile',owner_email='$owner_email',owner_vehicle_no='$owner_vehicle_no',owner_vehicle_rc_no='$owner_vehicle_rc_no',owner_vehicle_jcc_no=' $owner_vehicle_jcc_no',owner_vehicle_brand='$owner_vehicle_brand',owner_vehicle_name='$owner_vehicle_name',owner_vehicle_color='$owner_vehicle_color',driver_id='$driver_id' WHERE id='$user_id'";
        $inst_u_fn1_qry = mysqli_query($conn, $update_qry);

        if ($inst_u_fn1_qry) {
            header("location:booking-details.php");
        }
        $path = "images/" . $frontimage;
        if (move_uploaded_file($img_file1, $path)) {
            copy($path, "$path");
        }
        $path = "images/" . $backimage;
        if (move_uploaded_file($img_file2, $path)) {
            copy($path, "$path");
        }
        $path = "images/" . $DLimage;
        if (move_uploaded_file($img_file3, $path)) {
            copy($path, "$path");
        }
        $path = "images/" . $Adharimage;
        if (move_uploaded_file($img_file4, $path)) {
            copy($path, "$path");
        }
        $path = "images/" . $Adharimage1;
        if (move_uploaded_file($img_file4, $path)) {
            copy($path, "$path");
        }
    }
    if ($res_query) {
        header("location:manageowner.php");
        echo "success";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<?php include("includes/headerlink.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>Car Rental Portal | Admin Post Vehicle</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="css/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    .errorWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #dd3d36;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }

    .succWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }
    </style>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left: 0px;">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding:0px">
            <div class="container-fluid">
                <div class="row mb-2">

<body>
    <script>
    function checkAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availability.php",
            data: 'emailid=' + $("#emailid").val(),
            type: "POST",
            success: function(data) {
                $("#user-availability-status").html(data);
                $("#loaderIcon").hide();
            },
            error: function() {}
        });
    }
    </script>
    <?php include('includes/header.php'); ?>
    <div class="ts-main-content">
        <?php include('includes/leftbar.php'); ?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Book A Car</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Basic Info</div>
                                    <?php if ($error) { ?><div class="errorWrap">
                                        <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
                                    </div><?php } else if ($msg) { ?><div class="succWrap">
                                        <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>

                                    <div class="panel-body">
                                        <form action="" method="post" class="form-horizontal"
                                            enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Name<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" name="fullname"
                                                        placeholder="Full Name" required="required">
                                                </div>
                                                <label class="col-sm-1 control-label">Mobile No<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" name="mobileno"
                                                        placeholder="Mobile Number" maxlength="10" required="required">
                                                </div>
                                                <label class="col-sm-1 control-label">Email Id<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="email" class="form-control" name="emailid" id="emailid"
                                                        onBlur="checkAvailability()" placeholder="Email Address"
                                                        required="required">
                                                </div>
                                            </div>
                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Password<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="Password" required="required">
                                                </div>
                                                <label class="col-sm-1 control-label">ConfirmPwd<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="password" class="form-control" name="confirmpassword"
                                                        placeholder="Confirm Password" required="required">
                                                </div>
                                                <label class="col-sm-1 control-label">Date of Birth<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" name="dob"
                                                        placeholder="dd/mm/yyyy" id="birth-date" type="text">
                                                </div>
                                            </div>
                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Your Address<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <textarea class="form-control white_bg" name="address"
                                                        placeholder="address" rows="4"></textarea>
                                                </div>
                                                <label class="col-sm-1 control-label">Country<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" id="country"
                                                        placeholder="country" name="country" type="text">
                                                </div>
                                                <label class="col-sm-1 control-label">City<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" id="city" placeholder="city"
                                                        name="city" value="<?php echo htmlentities($result->City); ?>"
                                                        type="text">
                                                </div>
                                            </div>

                                            <label>SeatingCapacity</label>

                                            <select class="selectpicker" onchange=getbrand() name="SeatingCapacity"
                                                id="SeatingCapacity">
                                                <option>SeatingCapacity</option>
                                                <?php
                                                $qry = "SELECT  id, SeatingCapacity from tblbooking";
                                                $exe = mysqli_query($conn, $qry);
                                                while ($row = mysqli_fetch_array($exe)) {

                                                ?>
                                                <option value="<?php echo $row['id'] ?>">
                                                    <?php echo $row['SeatingCapacity'] ?>
                                                </option>


                                                <div class="hr-dashed"></div>
                                                <div class="form-group">
                                                    <label class="col-sm-1 control-label">Select Brand<span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-3">
                                                        <select id="brandId" name="brand" type="text"
                                                            class="selectpicker">
                                                            <option>Select Brand</option>
                                                            <?php
                                                                $query = "SELECT id,BrandName From tblbrands";
                                                                $query_run = mysqli_query($conn, $query);
                                                                while ($row = mysqli_fetch_array($query_run)) {
                                                                ?>
                                                            <option value="<?php echo $row['id']; ?>">
                                                                <?php echo $row['BrandName']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <label class=" col-sm-1 control-label">Select Vehicle<span
                                                            style="color:red">*</span></label>
                                                    <div id="vehicle" class="col-sm-3">
                                                        <select name="VehiclesTitle" id="VehiclesTitle" type="text"
                                                            class="selectpicker">
                                                            <option value="">Select Vehicle</option>
                                                            <?php
                                                                $qry = "SELECT * from tblvehicles";
                                                                $exe = mysqli_query($conn, $qry);
                                                                while ($row = mysqli_fetch_array($exe)) {
                                                                    $vehno = $row['vehno'];
                                                                    $PricePerDay = $row['PricePerDay'];
                                                                    $FuelType = $row['FuelType'];
                                                                    $ModelYear = $row['ModelYear'];
                                                                    $SeatingCapacity = $row['SeatingCapacity'];
                                                                ?>
                                                            <option vehno="<?php echo $row['vehno']; ?>"
                                                                PricePerDay="<?php echo $row['PricePerDay']; ?>"
                                                                FuelType="<?php echo $row['FuelType']; ?>"
                                                                ModelYear="<?php echo $row['ModelYear']; ?>"
                                                                SeatingCapacity="<?php echo $row['SeatingCapacity']; ?>"
                                                                value="<?php echo $row['id'] ?>">
                                                                <?php echo $row['VehiclesTitle'] ?>
                                                            </option>

                                                            <?php }  ?>

                                                        </select>
                                                    </div>
                                                </div>

                                                <?php }  ?>
                                            </select>

                                    </div>
                                    <div class="col-sm-6">
                                        <label>Brand</label>
                                        <select class="selectpicker" name="brand" id="brand" onchange=getname()>
                                            <option value=''>Select Brand</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>VehicleName</label>
                                        <select class="selectpicker" name="VehicleName" id="VehicleName">
                                            <option value=''>Select Vehicle</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>VehicleNumber</label>
                                        <input type="text" class="form-control" placeholder="Enter vehicle number"
                                            name="VehicleNumber" id="VehicleNumber">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>VehRCNo</label>
                                        <input type="text" class="form-control" placeholder="Enter vehicle RC no"
                                            name="VehRCNo" id="VehRCNo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>VehChesisNo</label>
                                        <input type="text" class="form-control" placeholder="Enter vehiclename"
                                            name="chasis" id="chasis">
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label>DriverName</label>
                                        <input type="text" class="form-control" placeholder="Enter Driver name"
                                            name="Dname" id="Dname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>DLnumber</label>
                                        <input type="text" class="form-control" placeholder="Enter Driver DL number"
                                            name="DLno" id="DLno">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>DriverNumber</label>
                                        <input type="text" class="form-control" placeholder="Enter driver number"
                                            name="Dno" id="Dno">
                                    </div>
                                </div>
                            </div>


                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="DLimage" name="DLimage">
                                <label class="custom-file-label" for="customFile">Choose
                                    file</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="customFile">UploadDriverAdharCard</label>

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="Adharimage" name="Adharimage">
                                <label class="custom-file-label" for="customFile">Choose
                                    file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="customFile">CarFrontImage</label>




                            <div class="hr-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Vehicle No<span style="color:red">*</span></label>
                                <div class="col-sm-3" id="vehicle_no">
                                    <input class="form-control white_bg" placeholder="Vehicle Number" name="vehno"
                                        id="vehno" value="<?php echo $row['vehno']; ?>" type="text">
                                </div>
                                <label class="col-sm-1 control-label">Price Per Day<span
                                        style="color:red">*</span></label>
                                <div class="col-sm-3">
                                    <input class="form-control white_bg" placeholder="Price per Day" name="PricePerDay"
                                        id="PricePerDay" type="text" value="<?php echo $row['PricePerDay'] ?>" required>
                                </div>
                            </div>



                            <div class="hr-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">FuelType<span style="color:red">*</span></label>
                                <div class="col-sm-3">
                                    <input class="form-control white_bg" placeholder=" Fuel Type" name="FuelType"
                                        id="FuelType" value="<?php echo $row['FuelType']; ?>" type="text">
                                </div>
                                <label class="col-sm-1 control-label">Model Year<span style="color:red">*</span></label>
                                <div class="col-sm-3">
                                    <input class="form-control white_bg" placeholder="Model Year" name="ModelYear"
                                        id="ModelYear" value="<?php echo $row['ModelYear']; ?>" type="text">
                                </div>
                                <label class="col-sm-1 control-label">Seating Capacity<span
                                        style="color:red">*</span></label>
                                <div class="col-sm-3">
                                    <input class="form-control white_bg" placeholder="Seating Capacity"
                                        name="SeatingCapacity" id="SeatingCapacity"
                                        value="<?php echo $row['SeatingCapacity']; ?>" type="text">
                                </div>
                            </div>

                            <div class="hr-dashed"></div>
                            <div class="form-group">
                                <label class=" col-sm-1 control-label">Assign Driver<span
                                        style="color:red">*</span></label>
                                <div class="col-sm-3">
                                    <select name="name" id="name" type="text" class="selectpicker">
                                        <option value="">Select Driver</option>
                                        <?php
                                        $qry = "SELECT * from tbldriver";
                                        $exe = mysqli_query($conn, $qry);
                                        while ($row = mysqli_fetch_array($exe)) {
                                            $number = $row['number'];
                                            $drivername = $row['name'];
                                        ?>
                                        <option number="<?php echo $row['number']; ?>" value="<?php echo $row['id'] ?>">
                                            <?php echo $row['name'] ?>
                                        </option>

                                        <?php }  ?>

                                    </select>
                                </div>
                                <label class="col-sm-1 control-label">Phone Number<span
                                        style="color:red">*</span></label>
                                <div class="col-sm-3">
                                    <input class="form-control white_bg" placeholder="Driver Number" name="number"
                                        id="number" value="<?php echo $row['number']; ?>" type="text">
                                </div>
                            </div>


                            <div class="hr-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">From Date:<span style="color:red">*</span></label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control" id="datepicker" name="fromdate"
                                        placeholder="From Date" required>
                                </div>
                                <label class="col-sm-1 control-label">To Date:<span style="color:red">*</span></label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control" id="datepicker" name="todate"
                                        placeholder="To Date" required>
                                </div>
                                <label class="col-sm-1 control-label">Message:<span style="color:red">*</span></label>
                                <div class="col-sm-3">
                                    <textarea rows="4" class="form-control" name="message" placeholder="Message"
                                        required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button class="btn btn-default" type="reset">Cancel</button>
                                    <button class="btn btn-primary" name="submit" type="submit">Save
                                        changes</button>
                                </div>
                            </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>



    </div>
    </div>
    </div>

    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('select[name="VehiclesTitle"]').change(function() {
            var vehno = $('option:selected', this).attr('vehno');
            $("#vehno").val(vehno);

            var PricePerDay = $('option:selected', this).attr('PricePerDay');
            $("#PricePerDay").val(PricePerDay);

            var FuelType = $('option:selected', this).attr('FuelType');
            $("#FuelType").val(FuelType);

            var ModelYear = $('option:selected', this).attr('ModelYear');
            $("#ModelYear").val(ModelYear);

            var SeatingCapacity = $('option:selected', this).attr('SeatingCapacity');
            $("#SeatingCapacity").val(SeatingCapacity);
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('select[name="name"]').change(function() {
            var number = $('option:selected', this).attr('number');
            $("#number").val(number);
        });
    });
    </script>


    <script>
    function getbrand() {
        var str = '';
        var val = document.getElementById('SeatingCapacity');
        for (i = 0; i < val.length; i++) {
            if (val[i].selected) {
                str += val[i].value + ',';
            }
        }
        var str = str.slice(0, str.length - 1);
        // $('#SeatingCapacity').on('change', function() {
        //     var seat_id = this.value;
        $.ajax({
            type: "GET",
            url: "get-brand.php",
            data: 'id=' + str,
            success: function(data) {
                $("#brand").html(data);
                // $("#VehicleName").html(data);
            }
        });
    }

    function getname() {
        var str = '';
        var val = document.getElementById('brand');
        for (i = 0; i < val.length; i++) {
            if (val[i].selected) {
                str += val[i].value + ',';
            }
        }
        var str = str.slice(0, str.length - 1);
        // $('#SeatingCapacity').on('change', function() {
        //     var seat_id = this.value;
        $.ajax({
            type: "GET",
            url: "get-name.php",
            data: 'id=' + str,
            success: function(data) {
                $("#VehicleName").html(data);
            }
        });
    }
    </script>

</body>

</html>