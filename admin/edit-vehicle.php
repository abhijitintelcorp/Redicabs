<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {
        $ownname = $_POST['ownname'];
        $ContactNo = $_POST['ContactNo'];
        $email = $_POST['email'];
        $vehno = $_POST['vehno'];
        $vehreg = $_POST['vehreg'];
        $vehchas = $_POST['vehchas'];
        $vehicletitle = $_POST['vehicletitle'];
        $brand = $_POST['brandname'];
        $vehicleoverview = $_POST['vehicalorcview'];
        $priceperday = $_POST['priceperday'];
        $fueltype = $_POST['fueltype'];
        $modelyear = $_POST['modelyear'];
        $seatingcapacity = $_POST['seatingcapacity'];
        $airconditioner = $_POST['airconditioner'];
        $powerdoorlocks = $_POST['powerdoorlocks'];
        $antilockbrakingsys = $_POST['antilockbrakingsys'];
        $brakeassist = $_POST['brakeassist'];
        $powersteering = $_POST['powersteering'];
        $driverairbag = $_POST['driverairbag'];
        $passengerairbag = $_POST['passengerairbag'];
        $powerwindow = $_POST['powerwindow'];
        $cdplayer = $_POST['cdplayer'];
        $centrallocking = $_POST['centrallocking'];
        $crashcensor = $_POST['crashcensor'];
        $leatherseats = $_POST['leatherseats'];
        $id = intval($_GET['id']);

        $query = "UPDATE tblvehicles SET ownname='$ownname',ContactNo='$ContactNo',email='$email',vehno='$vehno',vehreg='$vehreg',
vehchas='$vehchas', VehiclesTitle='$vehicletitle',VehiclesBrand='$brand',VehiclesOverview='$vehicleoverview',
PricePerDay='$priceperday',FuelType='$fueltype',ModelYear='$modelyear',SeatingCapacity='$seatingcapacity',
AirConditioner='$airconditioner',PowerDoorLocks='$powerdoorlocks',AntiLockBrakingSystem='$antilockbrakingsys',
BrakeAssist='$brakeassist',PowerSteering='$powersteering',DriverAirbag='$driverairbag',PassengerAirbag='$passengerairbag',
PowerWindows='$powerwindow',CDPlayer='$cdplayer',CentralLocking='$centrallocking',CrashSensor='$crashcensor',
LeatherSeats='$leatherseats' where id='$id'";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            header("location:manage-vehicles.php");
        } else {
            $msg = "updated failed";
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
    <?php include('includes/header.php'); ?>
    <div class="ts-main-content">
        <?php include('includes/leftbar.php'); ?>
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
                                        <?php if ($msg) { ?><div class="succWrap">
                                            <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
                                        </div><?php } ?>
                                        <?php

                                            $id = intval($_GET['id']);
                                            $query = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid from tblvehicles join tblbrands on 
tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.id='$id'";
                                            $query_run = mysqli_query($conn, $query);
                                            if (mysqli_num_rows($query_run) > 0) {
                                                while ($row = mysqli_fetch_array($query_run)) {
                                            ?>
                                        <form method="post" class="form-horizontal"  name="edit_vehicle" id="edit_vehicle" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">OwnerName<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="ownname" id="ownname" class="form-control"
                                                        value="<?php echo $row['ownname']; ?>" required>
                                                </div>
                                                <label class="col-sm-2 control-label">ContactNo<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="number" name="ContactNo" id="ContactNo" class="form-control"
                                                        value="<?php echo $row['ContactNo']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">email<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="email" name="email" id="email"class="form-control"
                                                        value="<?php echo $row['email'];?>" required>
                                                </div>
                                                <label class="col-sm-2 control-label">VehicleNumber<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="vehno" id="vehno" class="form-control"
                                                        value="<?php echo $row['vehno']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- <label class="col-sm-2 control-label">VehicleRegNo<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="vehreg" class="form-control"
                                                        value="<?php echo $row['vehreg'] ?>" required>
                                                </div> -->
                                                <label class="col-sm-2 control-label">VehicleTitle<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="vehicletitle" id="vehicletitle" class="form-control"
                                                        value="<?php echo $row['VehiclesTitle']; ?>" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Select
                                                    Brand<span style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <select class="selectpicker" name="brandname" required>
                                                        <option value="<?php echo $row['bid']; ?>">
                                                            <?php echo $bdname = $row['BrandName']; ?>
                                                        </option>
                                                        <?php $query1 = "select id,BrandName from tblbrands";
                                                                    $query_run1 = mysqli_query($conn, $query1);
                                                                    if (mysqli_num_rows($query_run1) > 0) {
                                                                        while ($result = mysqli_fetch_array($query_run1)) {

                                                                            if ($result['BrandName'] == $bdname) {
                                                                                continue;
                                                                            } else {
                                                                    ?>
                                                        <option value="<?php echo htmlentities($result['id']); ?>">
                                                            <?php echo htmlentities($result['BrandName']); ?></option>
                                                        <?php }
                                                                        }
                                                                    } ?>


                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">VehicleRCno<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="VehRCno" id="VehRCno" class="form-control"
                                                        value="<?php echo $row['VehRCno']; ?>" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Vehicle Chassis No<span
                                                        style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="vehchas" id="vehchas" class="form-control"
                                                        value="<?php echo $row['vehchas']; ?>" required>
                                                </div>
                                            </div>

                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Vehical
                                                    Overview<span style="color:red">*</span></label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="vehicalorcview" id="vehicalorcview"  rows="3"
                                                        required><?php echo $row['VehiclesOverview']; ?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Price Per
                                                    Day(in USD)<span style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="priceperday" id="priceperday" class="form-control"
                                                        value="<?php echo $row['PricePerDay']; ?>" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Select Fuel
                                                    Type<span style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <select class="selectpicker" name="fueltype" id="fueltype" required>
                                                        <option value="<?php echo $row['FuelType']; ?>">
                                                            <?php echo $row['FuelType']; ?>
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
                                                    <input type="text" name="modelyear" id="modelyear"class="form-control"
                                                        value="<?php echo $row['ModelYear']; ?>" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Seating
                                                    Capacity<span style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="seatingcapacity" id="seatingcapacity" class="form-control"
                                                        value="<?php echo $row['SeatingCapacity']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <h4><b>Vehicle Images</b></h4>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-4">Image 1&nbsp;&nbsp;
                                                    <img src="img/vehicleimages/<?php echo $row['Vimage1']; ?>"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <a href="changeimage1.php?imgid=<?php echo $row['id']; ?>"></br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        Change Image 1</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    Image 2&nbsp;&nbsp;<img
                                                        src="img/vehicleimages/<?php echo $row['Vimage2']; ?>"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <a href="changeimage2.php?imgid=<?php echo $row['id']; ?>"></br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        Change Image 2</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    Image 3&nbsp;&nbsp;<img
                                                        src="img/vehicleimages/<?php echo $row['Vimage3']; ?>"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <a href="changeimage3.php?imgid=<?php echo $row['id']; ?>"></br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        Change Image 3</a>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    Image 4&nbsp;&nbsp;<img
                                                        src="img/vehicleimages/<?php echo $row['Vimage4']; ?>"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <a href="changeimage4.php?imgid=<?php echo $row['id']; ?>"></br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        Change Image 4</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    Image 5
                                                    <?php if ($row['Vimage5'] == "") {
                                                                    echo htmlentities("File not available");
                                                                } else { ?>
                                                    <img src="img/vehicleimages/<?php echo $row['Vimage5']; ?>"
                                                        width="300" height="200" style="border:solid 1px #000"></br>
                                                    <a href="changeimage5.php?imgid=<?php echo $row['id']; ?>"></br>
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



                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Accessories</div>
                                    <div class="panel-body">


                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <?php if ($row['AirConditioner'] == 1) { ?>
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
                                                <?php if ($row['PowerDoorLocks'] == 1) { ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="powerdoorlocks"
                                                        checked value="1">
                                                    <label for="inlineCheckbox2"> Power Door Locks </label>
                                                </div>
                                                <?php } else { ?>
                                                <div class="checkbox checkbox-success checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="powerdoorlocks"
                                                        value="1">
                                                    <label for="inlineCheckbox2"> Power Door Locks </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-3">
                                                <?php if ($row['AntiLockBrakingSystem'] == 1) { ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1"
                                                        name="antilockbrakingsys" checked value="1">
                                                    <label for="inlineCheckbox3"> AntiLock Braking System </label>
                                                </div>
                                                <?php } else { ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1"
                                                        name="antilockbrakingsys" value="1">
                                                    <label for="inlineCheckbox3"> AntiLock Braking System </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-3">
                                                <?php if ($row['BrakeAssist'] == 1) {
                                                    ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="brakeassist"
                                                        checked value="1">
                                                    <label for="inlineCheckbox3"> Brake Assist </label>
                                                </div>
                                                <?php } else { ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="brakeassist"
                                                        value="1">
                                                    <label for="inlineCheckbox3"> Brake Assist </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <?php if ($row['PowerSteering'] == 1) {
                                                ?>
                                            <div class="col-sm-3">
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="powersteering"
                                                        checked value="1">
                                                    <label for="inlineCheckbox1"> Power Steering </label>
                                                </div>
                                                <?php } else { ?>
                                                <div class="col-sm-3">
                                                    <div class="checkbox checkbox-inline">
                                                        <input type="checkbox" id="inlineCheckbox1" name="powersteering"
                                                            value="1">
                                                        <label for="inlineCheckbox1"> Power Steering </label>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <?php if ($row['DriverAirbag'] == 1) {
                                                        ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="driverairbag"
                                                        checked value="1">
                                                    <label for="inlineCheckbox2">Driver Airbag</label>
                                                </div>
                                                <?php } else { ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="driverairbag"
                                                        value="1">
                                                    <label for="inlineCheckbox2">Driver Airbag</label>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <?php if ($row['DriverAirbag'] == 1) {
                                                        ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="passengerairbag"
                                                        checked value="1">
                                                    <label for="inlineCheckbox3"> Passenger Airbag </label>
                                                </div>
                                                <?php } else { ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="passengerairbag"
                                                        value="1">
                                                    <label for="inlineCheckbox3"> Passenger Airbag </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-3">
                                                <?php if ($row['PowerWindows'] == 1) {
                                                        ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="powerwindow"
                                                        checked value="1">
                                                    <label for="inlineCheckbox3"> Power Windows </label>
                                                </div>
                                                <?php } else { ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="powerwindow"
                                                        value="1">
                                                    <label for="inlineCheckbox3"> Power Windows </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <?php if ($row['CDPlayer'] == 1) {
                                                    ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="cdplayer" checked
                                                        value="1">
                                                    <label for="inlineCheckbox1"> CD Player </label>
                                                </div>
                                                <?php } else { ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="cdplayer"
                                                        value="1">
                                                    <label for="inlineCheckbox1"> CD Player </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-3">
                                                <?php if ($row['CentralLocking'] == 1) {
                                                    ?>
                                                <div class="checkbox  checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="centrallocking"
                                                        checked value="1">
                                                    <label for="inlineCheckbox2">Central Locking</label>
                                                </div>
                                                <?php } else { ?>
                                                <div class="checkbox checkbox-success checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="centrallocking"
                                                        value="1">
                                                    <label for="inlineCheckbox2">Central Locking</label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-3">
                                                <?php if ($row['CrashSensor'] == 1) {
                                                    ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="crashcensor"
                                                        checked value="1">
                                                    <label for="inlineCheckbox3"> Crash Sensor </label>
                                                </div>
                                                <?php } else { ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="crashcensor"
                                                        value="1">
                                                    <label for="inlineCheckbox3"> Crash Sensor </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-3">
                                                <?php if ($row['CrashSensor'] == 1) { ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="leatherseats"
                                                        checked value="1">
                                                    <label for="inlineCheckbox3"> Leather Seats </label>
                                                </div>
                                                <?php } else { ?>
                                                <div class="checkbox checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="leatherseats"
                                                        value="1">
                                                    <label for="inlineCheckbox3"> Leather Seats </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <button class="btn btn-primary" name="submit" type="submit"
                                                    style="margin-top:4%">Save
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

            <?php }
                                            } ?>

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
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script src="js/validation.js"></script>
</body>

</html>
<?php } ?>