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
    $inst_u_fn_qry = "";

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

    $path1 = "images/" . $frontimage;
    $path2 = "images/" . $backimage;
    $path3 = "images/" . $DLimage;
    $path4 = "images/" . $Adharimage;
    $path5 = "images/" . $Adharimage1;

    $update_qry = "UPDATE   tblbooking SET  owner_vehicle_brand='$brand',owner_vehicle_name='$VehicleName',
    owner_vehicle_no='$VehicleNumber',owner_vehicle_RCno='$VehRCNo',owner_vehicle_chesis_no	='$chasis',OwnerName='$ownname',owner_mobile='$ownno',DriverName='$Dname',DriverMobile='$Dno',
    PricePerDay='$price',owner_email='$email' WHERE id='$user_id'";
    $inst_u_fn1_qry = mysqli_query($conn, $update_qry);
    if ($inst_u_fn1_qry) {

        header("location:manageowner.php");
    }

    if ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif') {

        if (empty($frontimage) or empty($backimage)) {
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
        } else {
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

    if ($inst_u_fn_qry) {
        header("location:manageowner.php");
        echo "success";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<?php include("includes/headerlink.php"); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include('includes/sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="margin:0px">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

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
                                    <h3 class="card-title">Update Owner</h3>
                                </div>

                                <div class="card card-warning">

                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form action="" method="post" name="add_owner_update" id="add_owner_update"
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
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label>Owneremail</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter owneremail" name="email" id="email"
                                                            value="<?php echo $urows['owner_email']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customFile">CarFrontImage</label>
                                                <img src="images/<?php echo $urows['frontimage']; ?>"
                                                    style="width:20%;">
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
                                                <img src="images/<?php echo $urows['backimage']; ?>" style="width:20%;">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="backimage"
                                                        name="backimage">
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customFile">DriverDLimage</label>
                                                <img src="images/<?php echo $urows['DLimage']; ?>" style="width:20%;">
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
                                                <label for="customFile">OwnerAdharimage</label>
                                                <img src="images/<?php echo $urows['own_adhar_image']; ?>"
                                                    style="width:20%;">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="Adharimage"
                                                        name="Adharimage">
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customFile">DriverAdharimage</label>
                                                <img src="images/<?php echo $urows['Driver_Adhar_image']; ?>"
                                                    style="width:20%;">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="Adharimage1"
                                                        name="Adharimage1">
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary"
                                                name="owner_submit">Update</button>
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

    <!-- Page specific script -->
    <script>
    $(function() {
        bsCustomFileInput.init();
    });
    </script>
</body>

</html>