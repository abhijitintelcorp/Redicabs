<?php
include("includes/config.php");
$user_id = $_GET['id'];
$u_query = "SELECT * FROM tblbooking WHERE id='$user_id'";
$user_update_query = mysqli_query($conn, $u_query);
$urows = mysqli_fetch_array($user_update_query);

if (isset($_POST['owner_submit'])) {
    $brand = htmlspecialchars($_POST['brand']);
    $VehicleName = htmlspecialchars($_POST['VehicleName']);
    $VehicleNumber = htmlspecialchars($_POST['VehicleNumber']);
    $VehRCNo = htmlspecialchars($_POST['VehRCNo']);
    $chasis = htmlspecialchars($_POST['chasis']);
    $Dname = htmlspecialchars($_POST['Dname']);
    $Dno = htmlspecialchars($_POST['Dno']);
    //$DLno = htmlspecialchars($_POST['DLno']);
    $price = htmlspecialchars($_POST['price']);
    $seat = htmlspecialchars($_POST['seat']);
    $year = htmlspecialchars($_POST['year']);
    $ownname = htmlspecialchars($_POST['ownname']);
    //$ownadhar = htmlspecialchars($_POST['ownadhar']);
    $ownno = htmlspecialchars($_POST['ownno']);
    $email = htmlspecialchars($_POST['email']);
    $inst_u_fn1_qry = "";

    $frontimage = $_FILES['frontimage']['name'];
    $type = $_FILES['frontimage']['type'];
    $size = $_FILES['frontimage']['size'];
    $img_file1 = $_FILES['frontimage']['tmp_name'];
    $backimage = $_FILES['backimage']['name'];
    $type = $_FILES['backimage']['type'];
    $size = $_FILES['backimage']['size'];
    $img_file2 = $_FILES['backimage']['tmp_name'];
    // $DLimage = $_FILES['DLimage']['name'];
    // $type = $_FILES['DLimage']['type'];
    // $size = $_FILES['DLimage']['size'];
    // $img_file3 = $_FILES['DLimage']['tmp_name'];
    // $Adharimage = $_FILES['Adharimage']['name'];
    // $type = $_FILES['Adharimage']['type'];
    // $size = $_FILES['Adharimage']['size'];
    // $img_file4 = $_FILES['Adharimage']['tmp_name'];
    // $Adharimage1 = $_FILES['Adharimage1']['name'];
    // $type = $_FILES['Adharimage1']['type'];
    // $size = $_FILES['Adharimage1']['size'];
    // $img_file5 = $_FILES['Adharimage1']['tmp_name'];

    $path1 = "images/" . $frontimage;
    $path2 = "images/" . $backimage;
    // $path3 = "images/" . $DLimage;
    // $path4 = "images/" . $Adharimage;
    // $path5 = "images/" . $Adharimage1;

    $update_qry = "UPDATE   tblbooking SET  owner_vehicle_brand='$brand',owner_vehicle_name='$VehicleName',owner_vehicle_no='$VehicleNumber',owner_vehicle_RCno='$VehRCNo',DriverName=' $Dname',DriverMobile='$Dno',PricePerDay='$price',owner_mobile='$ownno',owner_email='$email', WHERE id='$user_id'";
    $inst_u_fn1_qry = mysqli_query($conn, $update_qry);
    if ($inst_u_fn1_qry) {

        header("location:manageowner.php");
    }
    if ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif') {
        // if ($size <= 7000000) {
            if (empty($frontimage) or empty($backimage)  {
                $update_qry = "UPDATE  tblbooking SET frontimage='$frontimage',backimage='$backimage' WHERE id='$user_id'";
                $inst_u_fn_qry = mysqli_query($conn, $update_qry);           

        $path = "images/" . $frontimage;
        if (move_uploaded_file($img_file1, $path)) {
            copy($path, "$path");
        }
        $path = "images/" . $backimage;
        if (move_uploaded_file($img_file2, $path)) {
            copy($path, "$path");
        }       
    }
}
<<<<<<< HEAD
else{ 
$id= $_GET['id'];
if(isset($_POST['submit']))
  {
$ownname=$_POST['ownname'];
$ContactNo=$_POST['ContactNo'];
$email=$_POST['email'];
$vehno=$_POST['vehno'];
$vehreg=$_POST['vehreg'];
$vehchas=$_POST['vehchas']; 	
$vehicletitle=$_POST['vehicletitle'];
$brand=$_POST['brandname'];
$vehicleoverview=$_POST['vehicalorcview'];
$priceperday=$_POST['priceperday'];
$fueltype=$_POST['fueltype'];
$modelyear=$_POST['modelyear'];
$seatingcapacity=$_POST['seatingcapacity'];
$airconditioner=$_POST['airconditioner'];
$powerdoorlocks=$_POST['powerdoorlocks'];
$antilockbrakingsys=$_POST['antilockbrakingsys'];
$brakeassist=$_POST['brakeassist'];
$powersteering=$_POST['powersteering'];
$driverairbag=$_POST['driverairbag'];
$passengerairbag=$_POST['passengerairbag'];
$powerwindow=$_POST['powerwindow'];
$cdplayer=$_POST['cdplayer'];
$centrallocking=$_POST['centrallocking'];
$crashcensor=$_POST['crashcensor'];
$leatherseats=$_POST['leatherseats'];
$id=intval($_GET['id']);

$query="UPDATE tblvehicles SET ownname='$ownname',ContactNo='$ContactNo',email='$email',vehno='$vehno',vehreg='$vehreg',
vehchas='$vehchas', VehiclesTitle='$vehicletitle',VehiclesBrand='$brand',VehiclesOverview='$vehicleoverview',
PricePerDay='$priceperday',FuelType='$fueltype',ModelYear='$modelyear',SeatingCapacity='$seatingcapacity',
AirConditioner='$airconditioner',PowerDoorLocks='$powerdoorlocks',AntiLockBrakingSystem='$antilockbrakingsys',
BrakeAssist='$brakeassist',PowerSteering='$powersteering',DriverAirbag='$driverairbag',PassengerAirbag='$passengerairbag',
PowerWindows='$powerwindow',CDPlayer='$cdplayer',CentralLocking='$centrallocking',CrashSensor='$crashcensor',
LeatherSeats='$leatherseats' where id='$id'";
$query_run = mysqli_query($conn,$query);
if($query_run){
    header("location:manage-vehicles.php");
}else{
    $msg="updated failed";
}
}
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>Redicabs| Admin Edit Vehicle Info</title>

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
</head>

<body>
    <?php include('includes/header.php');?>
    <div class="ts-main-content">
        <?php include('includes/leftbar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Edit Vehicle</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Basic Info</div>
                                    <div class="panel-body">
                                        <?php if($msg){?><div class="succWrap">
                                            <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
                                        </div><?php } ?>
                                        <?php 
                                        
$id=intval($_GET['id']);
$query ="SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid from tblvehicles join tblbrands on 
tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.id='$id'";
$query_run = mysqli_query($conn, $query);
                   if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_array($query_run))
                            {
                        ?>
                                        <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">OwnerName<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="ownname" class="form-control"
                                                        value="<?php echo $row['ownname'];?>" required>
                                                </div>
                                                <label class="col-sm-2 control-label">ContactNo<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="ContactNo" class="form-control"
                                                        value="<?php echo $row['ContactNo'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">email<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="email" class="form-control"
                                                        value="<?php echo $row['email'];?>" required>
                                                </div>
                                                <label class="col-sm-2 control-label">VehicleNumber<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="vehno" class="form-control"
                                                        value="<?php echo $row['vehno'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">VehicleRegNo<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="vehreg" class="form-control"
                                                        value="<?php echo $row['vehreg']?>" required>
                                                </div>
                                                <label class="col-sm-2 control-label">VehicleTitle<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="vehicletitle" class="form-control"
                                                        value="<?php echo $row['VehiclesTitle'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Select
                                                    Brand<span style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <select class="selectpicker" name="brandname" required>
                                                        <option value="<?php echo $row['bid'];?>">
                                                            <?php echo $bdname=$row['BrandName']; ?>
                                                        </option>
                                                        <?php $query1="select id,BrandName from tblbrands";
$query_run1 = mysqli_query($conn, $query1);
                   if(mysqli_num_rows($query_run1) > 0)        
                        {
                            while($result = mysqli_fetch_array($query_run1))
                            {

if($result['BrandName']==$bdname)
{
continue;
} else{
?>
<option value="<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['BrandName']);?></option>
<?php }}} ?>


                                                    </select>
                                                </div>
                                            </div>

                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Vehical
                                                    Overview<span style="color:red">*</span></label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="vehicalorcview" rows="3"
                                                        required><?php echo $row['VehiclesOverview'];?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Price Per
                                                    Day(in USD)<span style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="priceperday" class="form-control"
                                                        value="<?php echo $row['PricePerDay'];?>" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Select Fuel
                                                    Type<span style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <select class="selectpicker" name="fueltype" required>
                                                        <option value="<?php echo $row['FuelType'];?>">
                                                            <?php echo $row['FuelType'];?>
                                                        </option>
                                                        <option value="Petrol">Petrol</option>
                                                        <option value="Diesel">Diesel</option>
                                                        <option value="CNG">CNG</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Model
                                                    Year<span style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="modelyear" class="form-control"
                                                        value="<?php echo $row['ModelYear'];?>" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Seating
                                                    Capacity<span style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="seatingcapacity" class="form-control"
                                                        value="<?php echo $row['SeatingCapacity'];?>" required>
                                                </div>
                                            </div>
                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <h4><b>Vehicle Images</b></h4>
                                                </div>
                                            </div>
=======
//$inst_u_fn1_qry = "";
if ($inst_u_fn1_qry) {
    header("location:manageowner.php");
    echo "success";
}


?>
<!DOCTYPE html>
<html lang="en">

<?php include("includes/headerlink.php"); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

<<<<<<< HEAD
                                            <div class="form-group">
                                                <div class="col-sm-4">Image 1&nbsp;&nbsp;
                                                     <img src="img/vehicleimages/<?php echo $row['Vimage1'];?>"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <a href="changeimage1.php?imgid=<?php echo $row['id'];?>"></br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    Change Image 1</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    Image 2&nbsp;&nbsp;<img src="img/vehicleimages/<?php echo $row['Vimage2'];?>"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <a href="changeimage2.php?imgid=<?php echo $row['id'];?>"></br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    Change Image 2</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    Image 3&nbsp;&nbsp;<img src="img/vehicleimages/<?php echo $row['Vimage3'];?>"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <a href="changeimage3.php?imgid=<?php echo $row['id'];?>"></br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    Change Image 3</a>
                                                </div>
                                            </div>
=======
        <?php include('includes/sidebar.php'); ?>
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

<<<<<<< HEAD
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    Image 4&nbsp;&nbsp;<img src="img/vehicleimages/<?php echo $row['Vimage4'];?>"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <a href="changeimage4.php?imgid=<?php echo $row['id'];?>"></br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    Change Image 4</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    Image 5
                                                    <?php if($row['Vimage5']=="")
{
echo htmlentities("File not available");
} else {?>
                                                    <img src="img/vehicleimages/<?php echo $row['Vimage5'];?>"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <a href="changeimage5.php?imgid=<?php echo $row['id'];?>"></br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    Change Image 5</a>
                                                    <?php } ?>
                                                </div>

                                            </div>
                                            <div class="hr-dashed"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
=======
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Owner page</li>
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
                                    <h3 class="card-title">Add Owner</h3>
                                </div>

                                <div class="card card-warning">
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b

                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form action="" method="post" name="add_owner" id="add_owner"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>BrandName</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter BrandName" name="brand" id="brand"
                                                            value="<?php echo $urows['owner_vehicle_brand']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>VehicleName</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter vehiclename" name="VehicleName"
                                                            id="VehicleName"
                                                            value="<?php echo $urows['owner_vehicle_name']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>VehicleNumber</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter vehicle number" name="VehicleNumber"
                                                            id="VehicleNumber"
                                                            value="<?php echo $urows['owner_vehicle_no']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>VehRCNo</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter vehicle RC no" name="VehRCNo"
                                                            id="VehRCNo"
                                                            value="<?php echo $urows['owner_vehicle_RCno']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

<<<<<<< HEAD

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Accessories</div>
                                    <div class="panel-body">


                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <?php if($row['AirConditioner']==1)
{?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="airconditioner"
                                                        checked value="1">
                                                    <label for="inlineCheckbox1"> Air Conditioner </label>
                                                </div>
                                                <?php } else { ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="airconditioner"
                                                        value="1">
                                                    <label for="inlineCheckbox1"> Air Conditioner </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-3">
                                                <?php if($row['PowerDoorLocks']==1)
{?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="powerdoorlocks"
                                                        checked value="1">
                                                    <label for="inlineCheckbox2"> Power Door Locks </label>
                                                </div>
                                                <?php } else {?>
                                                <div class="checkbox checkbox-success checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="powerdoorlocks"
                                                        value="1">
                                                    <label for="inlineCheckbox2"> Power Door Locks </label>
                                                </div>
                                                <?php }?>
                                            </div>
                                            <div class="col-sm-3">
                                                <?php if($row['AntiLockBrakingSystem']==1)
{?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1"
                                                        name="antilockbrakingsys" checked value="1">
                                                    <label for="inlineCheckbox3"> AntiLock Braking System </label>
                                                </div>
                                                <?php } else {?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1"
                                                        name="antilockbrakingsys" value="1">
                                                    <label for="inlineCheckbox3"> AntiLock Braking System </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-3">
                                                <?php if($row['BrakeAssist']==1)
{
	?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="brakeassist"
                                                        checked value="1">
                                                    <label for="inlineCheckbox3"> Brake Assist </label>
                                                </div>
                                                <?php } else {?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="brakeassist"
                                                        value="1">
                                                    <label for="inlineCheckbox3"> Brake Assist </label>
                                                </div>
                                                <?php } ?>
                                            </div></div>

                                            <div class="form-group">
                                                <?php if($row['PowerSteering']==1)
{
	?>
                                                <div class="col-sm-3">
                                                    <div class="checkbox checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox1" name="powersteering"
                                                            checked value="1">
                                                        <label for="inlineCheckbox1"> Power Steering </label>
                                                    </div>
                                                    <?php } else {?>
                                                    <div class="col-sm-3">
                                                        <div class="checkbox checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox1"
                                                                name="powersteering" value="1">
                                                            <label for="inlineCheckbox1"> Power Steering </label>
                                                        </div>
                                                        <?php } ?>
                                                    </div></div>
                                                    <div class="col-sm-3">
                                                        <?php if($row['DriverAirbag']==1)
{
?>
                                                        <div class="checkbox checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox1"
                                                                name="driverairbag" checked value="1">
                                                            <label for="inlineCheckbox2">Driver Airbag</label>
                                                        </div>
                                                        <?php } else { ?>
                                                        <div class="checkbox checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox1"
                                                                name="driverairbag" value="1">
                                                            <label for="inlineCheckbox2">Driver Airbag</label>
                                                            <?php } ?>
                                                        </div></div>
                                                        <div class="col-sm-3">
                                                            <?php if($row['DriverAirbag']==1)
{
?>
                                                            <div class="checkbox checkbox-inline">
                                                                <input type="checkbox" id="inlineCheckbox1"
                                                                    name="passengerairbag" checked value="1">
                                                                <label for="inlineCheckbox3"> Passenger Airbag </label>
                                                            </div>
                                                            <?php } else { ?>
                                                            <div class="checkbox checkbox-inline">
                                                                <input type="checkbox" id="inlineCheckbox1"
                                                                    name="passengerairbag" value="1">
                                                                <label for="inlineCheckbox3"> Passenger Airbag </label>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <?php if($row['PowerWindows']==1)
{
?>
                                                            <div class="checkbox checkbox-inline">
                                                                <input type="checkbox" id="inlineCheckbox1"
                                                                    name="powerwindow" checked value="1">
                                                                <label for="inlineCheckbox3"> Power Windows </label>
                                                            </div>
                                                            <?php } else { ?>
                                                            <div class="checkbox checkbox-inline">
                                                                <input type="checkbox" id="inlineCheckbox1"
                                                                    name="powerwindow" value="1">
                                                                <label for="inlineCheckbox3"> Power Windows </label>
                                                            </div>
                                                            <?php } ?>
                                                        </div></div>
=======
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>VehChesisNo</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter vehiclename" name="chasis" id="chasis"
                                                            value="<?php echo $urows['owner_vehicle_chesis_no']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>DriverName</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Driver name" name="Dname" id="Dname"
                                                            value="<?php echo $urows['DriverName']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>DLnumber</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Driver DL number" name="DLno" id="DLno"
                                                            value="<?php echo $urows['Driver_DL_No']; ?> " disabled>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>DriverNumber</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter driver number" name="Dno" id="Dno"
                                                            value="<?php echo $urows['DriverMobile']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>SeatingCapacity</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter seating capacity" name="seat" id="seat"
                                                            value="<?php echo $urows['SeatingCapacity']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Price/day</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Priceperday" name="price" id="price"
                                                            value="<?php echo $urows['PricePerDay']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>ModelYear</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter vehiclename" name="year" id="year"
                                                            value="<?php echo $urows['ModelYear']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>OwnerName</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter ownername" name="ownname" id="ownname"
                                                            value="<?php echo $urows['OwnerName']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>OwnerNumber</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter owner number" name="ownno" id="ownno"
                                                            value="<?php echo $urows['owner_mobile']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Owneremail</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter owneremail" name="email" id="email"
                                                            value="<?php echo $urows['owner_email']; ?>">
                                                    </div>
                                                </div>
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="customFile">CarFrontImage</label>

<<<<<<< HEAD
                                                        <div class="form-group">
                                                            <div class="col-sm-3">
                                                                <?php if($row['CDPlayer']==1)
{
?>
                                                                <div class="checkbox checkbox-inline">
                                                                    <input type="checkbox" id="inlineCheckbox1"
                                                                        name="cdplayer" checked value="1">
                                                                    <label for="inlineCheckbox1"> CD Player </label>
                                                                </div>
                                                                <?php } else {?>
                                                                <div class="checkbox checkbox-inline">
                                                                    <input type="checkbox" id="inlineCheckbox1"
                                                                        name="cdplayer" value="1">
                                                                    <label for="inlineCheckbox1"> CD Player </label>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <?php if($row['CentralLocking']==1)
{
?>
                                                                <div class="checkbox  checkbox-inline">
                                                                    <input type="checkbox" id="inlineCheckbox1"
                                                                        name="centrallocking" checked value="1">
                                                                    <label for="inlineCheckbox2">Central Locking</label>
                                                                </div>
                                                                <?php } else { ?>
                                                                <div class="checkbox checkbox-success checkbox-inline">
                                                                    <input type="checkbox" id="inlineCheckbox1"
                                                                        name="centrallocking" value="1">
                                                                    <label for="inlineCheckbox2">Central Locking</label>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <?php if($row['CrashSensor']==1)
{
?>
                                                                <div class="checkbox checkbox-inline">
                                                                    <input type="checkbox" id="inlineCheckbox1"
                                                                        name="crashcensor" checked value="1">
                                                                    <label for="inlineCheckbox3"> Crash Sensor </label>
                                                                </div>
                                                                <?php } else {?>
                                                                <div class="checkbox checkbox-inline">
                                                                    <input type="checkbox" id="inlineCheckbox1"
                                                                        name="crashcensor" value="1">
                                                                    <label for="inlineCheckbox3"> Crash Sensor </label>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <?php if($row['CrashSensor']==1)
                                                                {?>
                                                                <div class="checkbox checkbox-inline">
                                                                    <input type="checkbox" id="inlineCheckbox1"
                                                                        name="leatherseats" checked value="1">
                                                                    <label for="inlineCheckbox3"> Leather Seats </label>
                                                                </div>
                                                                <?php } else { ?>
                                                                <div class="checkbox checkbox-inline">
                                                                    <input type="checkbox" id="inlineCheckbox1"
                                                                        name="leatherseats" value="1">
                                                                    <label for="inlineCheckbox3"> Leather Seats </label>
                                                                </div>
                                                                <?php } ?>
                                                                </div> </div>                                                      

                                                       
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
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b

                                        </form>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!--/.col (right) -->
                        </div>

<<<<<<< HEAD
                                                        <div class="form-group">
                                                            <div class="col-sm-8 col-sm-offset-2">

                                                                <button class="btn btn-primary" name="submit"
                                                                    type="submit" style="margin-top:4%">Save
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

                                <?php }} ?>

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
</body>

</html>
<?php } ?>
=======
                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- <?php include("includes/footerlink.php"); ?> -->

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
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        bsCustomFileInput.init();
    });
    </script>
</body>

</html>
>>>>>>> 4e2c0c0dfe18c9255c427c1d6e337c15864efc1b
