<?php
<<<<<<< HEAD
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}

if(isset($_POST['submit']))
  {
	$fname=htmlspecialchars($_POST['fullname']);
	$email=htmlspecialchars($_POST['emailid']); 
	$mobile=htmlspecialchars($_POST['mobileno']);
	$password=md5($_POST['password']); 
	$confirmpassword=md5($_POST['confirmpassword']);
	$dob=htmlspecialchars($_POST['dob']);
$adress=htmlspecialchars($_POST['address']);
$city=htmlspecialchars($_POST['city']);
$country=htmlspecialchars($_POST['country']);
$bookingno=mt_rand(100000000, 999999999);
$name=htmlspecialchars($_POST['name']);
$status=0;
$BrandName=htmlspecialchars($_POST['brand']); 
$VehiclesTitle=htmlspecialchars($_POST['VehiclesTitle']);
$vehno=htmlspecialchars($_POST['vehno']);
$PricePerDay=htmlspecialchars($_POST['PricePerDay']);
$FuelType=htmlspecialchars($_POST['FuelType']); 
$ModelYear=htmlspecialchars($_POST['ModelYear']);
$SeatingCapacity=htmlspecialchars($_POST['SeatingCapacity']);
$phonenumber=htmlspecialchars($_POST['phonenumber']); 
$drivername=htmlspecialchars($_POST['drivername']); 
$Driverid=htmlspecialchars($_POST['Driverid']);
$number=htmlspecialchars($_POST['number']);
$fromdate=htmlspecialchars($_POST['fromdate']);
$todate=htmlspecialchars($_POST['todate']); 
$$totalnodays = $fromdate - $todate;
$message=htmlspecialchars($_POST['message']);
 
	$query="INSERT INTO  tblusers(`FullName`, `EmailId`, `ContactNo`, `Password`, `confirmpassword`, `dob`, `Address`, `City`, `Country`) 
	VALUES('$fname','$email','$mobile','$password','$confirmpassword','$dob','$adress','$city','$country')";
    $query_run = mysqli_query($conn,$query);
    $insert_id = mysqli_insert_id($conn);
    $query1="INSERT INTO tblbooking(`user_id`, `BookingNumber`, `VehicleId`, `Driverid`, `BrandId`,  `VehicleNumber`, 
    `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `phonenumber`, `FromDate`, `ToDate`, 
    `totalnodays`, `message`, `Status`) 
    VALUES ('$insert_id','$bookingno','$VehiclesTitle','$name','$BrandName','$vehno','$PricePerDay',
    '$FuelType','$ModelYear','$SeatingCapacity','$number','$fromdate','$todate',
    '$totalnodays','$message','$status')";  
	
$query_run1= mysqli_query($conn,$query1);
  if($query_run1){
  echo "<script>alert('Booking successfull.');</script>";
echo "<script type='text/javascript'> document.location = 'new-bookings.php'; </script>";
  } else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
 echo "<script type='text/javascript'> document.location = 'add-booking.php'; </script>";
}  
  }
=======
include("includes/config.php");

if (isset($_POST['owner_submit'])) {
    $brand = htmlspecialchars($_POST['brand']);
    $VehicleName = htmlspecialchars($_POST['VehicleName']);
    $VehicleNumber = htmlspecialchars($_POST['VehicleNumber']);
    $VehRCNo = htmlspecialchars($_POST['VehRCNo']);
    $chasis = htmlspecialchars($_POST['chasis']);
    $Dname = htmlspecialchars($_POST['Dname']);
    $Dno = htmlspecialchars($_POST['Dno']);
    $DLno = htmlspecialchars($_POST['DLno']);
    $price = htmlspecialchars($_POST['price']);
    $seat = htmlspecialchars($_POST['seat']);
    $year = htmlspecialchars($_POST['year']);
    $ownname = htmlspecialchars($_POST['ownname']);
    $ownadhar = htmlspecialchars($_POST['ownadhar']);
    $ownno = htmlspecialchars($_POST['ownno']);
    $email = htmlspecialchars($_POST['email']);
    $res_query = "";

    $frontimage = $_FILES['frontimage']['name'];
    $type = $_FILES['frontimage']['type'];
    $size = $_FILES['frontimage']['size'];
    $img_file1 = $_FILES['frontimage']['tmp_name'];
    $backimage = $_FILES['backimage']['name'];
    $type = $_FILES['backimage']['type'];
    $size = $_FILES['backimage']['size'];
    $img_file2 = $_FILES['backimage']['tmp_name'];
    $DLimage = $_FILES['DLimage']['name'];
    $type = $_FILES['DLimage']['type'];
    $size = $_FILES['DLimage']['size'];
    $img_file3 = $_FILES['DLimage']['tmp_name'];
    $Adharimage = $_FILES['Adharimage']['name'];
    $type = $_FILES['Adharimage']['type'];
    $size = $_FILES['Adharimage']['size'];
    $img_file4 = $_FILES['Adharimage']['tmp_name'];
    $Adharimage1 = $_FILES['Adharimage1']['name'];
    $type = $_FILES['Adharimage1']['type'];
    $size = $_FILES['Adharimage1']['size'];
    $img_file5 = $_FILES['Adharimage1']['tmp_name'];
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b

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
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include("includes/headerlink.php"); ?>

<<<<<<< HEAD
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
=======
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->

        <?php include('includes/sidebar.php'); ?>
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="margin-left: 0px;">
            <!-- Content Header (Page header) -->
            <section class="content-header" style="padding:0px">
                <div class="container-fluid">
                    <div class="row mb-2">

<<<<<<< HEAD
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
    <?php include('includes/header.php');?>
    <div class="ts-main-content">
        <?php include('includes/leftbar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Book A Car</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Basic Info</div>
                                    <?php if($error){?><div class="errorWrap">
                                        <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
                                    </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

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
                                                        name="city" value="<?php echo htmlentities($result->City);?>"
                                                        type="text">
                                                </div>
                                            </div>
=======
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add booking page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-10">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Basic Info</h3>
                                </div>

                                <div class="card card-warning">

                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form action="" method="post" name="add_owner" id="add_owner"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-6">
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b

                                                    <label>SeatingCapacity</label>

                                                    <select class="selectpicker" onchange=getbrand()
                                                        name="SeatingCapacity" id="SeatingCapacity">
                                                        <option>SeatingCapacity</option>
                                                        <?php
                                                        $qry = "SELECT  id, SeatingCapacity from tblbooking";
                                                        $exe = mysqli_query($conn, $qry);
                                                        while ($row = mysqli_fetch_array($exe)) {

                                                        ?>
                                                        <option value="<?php echo $row['id'] ?>">
                                                            <?php echo $row['SeatingCapacity'] ?>
                                                        </option>

<<<<<<< HEAD

                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Select Brand<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <select id="brandId" name="brand" type="text" class="selectpicker">
                                                        <option>Select Brand</option>
                                                        <?php
                                                        $query = "SELECT id,BrandName From tblbrands";
                                                        $query_run=mysqli_query($conn,$query);
                                                        while($row=mysqli_fetch_array($query_run)){
                                                            ?>
                                                        <option value="<?php echo $row['id'];?>">
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
  while ($row = mysqli_fetch_array($exe)) 
  {
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
=======
                                                        <?php }  ?>
                                                    </select>

                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Brand</label>
                                                    <select class="selectpicker" name="brand" id="brand"
                                                        onchange=getname()>
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
                                                <input type="text" class="form-control"
                                                    placeholder="Enter vehicle number" name="VehicleNumber"
                                                    id="VehicleNumber">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>VehRCNo</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter vehicle RC no" name="VehRCNo" id="VehRCNo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b

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
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Driver DL number" name="DLno" id="DLno">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>DriverNumber</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter driver number" name="Dno" id="Dno">
                                            </div>
                                        </div>
                                    </div>

<<<<<<< HEAD
=======
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Price/day</label>
                                            <input type="text" class="form-control" placeholder="Enter Priceperday"
                                                name="price" id="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ModelYear</label>
                                            <input type="text" class="form-control" placeholder="Enter vehiclename"
                                                name="year" id="year">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>OwnerName</label>
                                            <input type="text" class="form-control" placeholder="Enter ownername"
                                                name="ownname" id="ownname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>OwnerAdharNumber</label>
                                            <input type="text" class="form-control" placeholder="Enter ownerAdharNo"
                                                name="ownadhar" id="ownadhar">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>OwnerNumber</label>
                                            <input type="text" class="form-control" placeholder="Enter owner number"
                                                name="ownno" id="ownno">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Owneremail</label>
                                            <input type="text" class="form-control" placeholder="Enter owneremail"
                                                name="email" id="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label for="customFile">UploadOwnerAdharCard</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="Adharimage1"
                                                    name="Adharimage1">
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- input states -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="customFile">UploadDriverDL</label>
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b

                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="DLimage"
                                                    name="DLimage">
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="customFile">UploadDriverAdharCard</label>

                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="Adharimage"
                                                    name="Adharimage">
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

<<<<<<< HEAD



                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Vehicle No<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3" id="vehicle_no">
                                                    <input class="form-control white_bg" placeholder="Vehicle Number"
                                                        name="vehno" id="vehno" value="<?php echo $row['vehno'];?>"
                                                        type="text">
                                                </div>
                                                <label class="col-sm-1 control-label">Price Per Day<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" placeholder="Price per Day"
                                                        name="PricePerDay" id="PricePerDay" type="text"
                                                        value="<?php echo $row['PricePerDay']?>" required>
                                                </div>
                                            </div>



                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">FuelType<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" placeholder=" Fuel Type"
                                                        name="FuelType" id="FuelType"
                                                        value="<?php echo $row['FuelType'];?>" type="text">
                                                </div>
                                                <label class="col-sm-1 control-label">Model Year<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" placeholder="Model Year"
                                                        name="ModelYear" id="ModelYear"
                                                        value="<?php echo $row['ModelYear'];?>" type="text">
                                                </div>
                                                <label class="col-sm-1 control-label">Seating Capacity<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" placeholder="Seating Capacity"
                                                        name="SeatingCapacity" id="SeatingCapacity"
                                                        value="<?php echo $row['SeatingCapacity'];?>" type="text">
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
  while ($row = mysqli_fetch_array($exe)) 
  {
	  $number = $row['number'];
      $drivername = $row['name'];
  ?>
                                                        <option number="<?php echo $row['number']; ?>"
                                                            value="<?php echo $row['id'] ?>">
                                                            <?php echo $row['name'] ?>
                                                        </option>

                                                        <?php }  ?>

                                                    </select>
                                                </div>
                                                <label class="col-sm-1 control-label">Phone Number<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input class="form-control white_bg" placeholder="Driver Number"
                                                        name="number" id="number" value="<?php echo $row['number'];?>"
                                                        type="text">
                                                </div>
                                            </div>


                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">From Date:<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="date" class="form-control" id="datepicker"
                                                        name="fromdate" placeholder="From Date" required>
                                                </div>
                                                <label class="col-sm-1 control-label">To Date:<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <input type="date" class="form-control" id="datepicker"
                                                        name="todate" placeholder="To Date" required>
                                                </div>
                                                <label class="col-sm-1 control-label">Message:<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-3">
                                                    <textarea rows="4" class="form-control" name="message"
                                                        placeholder="Message" required></textarea>
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
=======
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="frontimage"
                                                    name="frontimage">
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="customFile">CarBackImage</label>

                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="backimage"
                                                    name="backimage">
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"
                                            name="owner_submit">Submit</button>
                                    </div>
                                </div>

                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>

        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <?php include("includes/footerlink.php"); ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        bsCustomFileInput.init();
    });
    </script>
    <script>
    $(document).ready(function() {
        $('select[name="SeatingCapacity"]').change(function() {
            var VehicleName = $('option:selected', this).attr('VehicleName');
            $("#VehicleName").val(VehicleName);

            var VehicleNumber = $('option:selected', this).attr('VehicleNumber');
            $("#VehicleNumber").val(VehicleNumber);

            var PricePerDay = $('option:selected', this).attr('PricePerDay');
            $("#PricePerDay").val(PricePerDay);

            var OwnerName = $('option:selected', this).attr('OwnerName');
            $("#OwnerName").val(OwnerName);

            var owner_mobile = $('option:selected', this).attr('owner_mobile');
            $("#owner_mobile").val(owner_mobile);
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b
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
<<<<<<< HEAD
=======

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
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b
</body>

</html>