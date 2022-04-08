<?php
session_start();
if (strlen($_SESSION['EmailId']) == 0) {
    header("location:login.php");
}
?>
<?php
include("includes/config.php");
$user_id = $_GET['id'];
$u_query = "SELECT * FROM tblbooking WHERE id='$user_id'";
$user_update_query = mysqli_query($conn, $u_query);
$urows = mysqli_fetch_array($user_update_query);

if (isset($_POST['owner_submit'])) {
    $category = htmlspecialchars($_POST['category']);
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

    $update_qry = "UPDATE   tblbooking SET Categories='$category', SubCategories='$brand',owner_vehicle_name='$VehicleName',
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
                                                        <label>Cartegory name</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter category" name="category" id="category"
                                                            value="<?php echo $urows['Categories']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Brand Name</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter BrandName" name="brand" id="brand"
                                                            value="<?php echo $urows['SubCategories']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Vehicle Name</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter vehiclename" name="VehicleName"
                                                            id="VehicleName"
                                                            value="<?php echo $urows['owner_vehicle_name']; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Vehicle Number</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter vehicle number" name="VehicleNumber"
                                                            id="VehicleNumber"
                                                            value="<?php echo $urows['owner_vehicle_no']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Vehicle RC Number</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter vehicle RC no" name="VehRCNo"
                                                            id="VehRCNo"
                                                            value="<?php echo $urows['owner_vehicle_RCno']; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Vehicle Chesis Number</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter vehiclename" name="chasis" id="chasis"
                                                            value="<?php echo $urows['owner_vehicle_chesis_no']; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Driver Name</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Driver name" name="Dname" id="Dname"
                                                            value="<?php echo $urows['DriverName']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label> <label>Driving licence Number</label>
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Driver DL number" name="DLno" id="DLno"
                                                            value="<?php echo $urows['Driver_DL_No']; ?> " disabled>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Driver Number</label>
                                                        <input type="number" class="form-control"
                                                            placeholder="Enter driver number" name="Dno" id="Dno"
                                                            value="<?php echo $urows['DriverMobile']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Seating Capacity</label>
                                                        <input type="number" class="form-control"
                                                            placeholder="Enter seating capacity" name="seat" id="seat"
                                                            value="<?php echo $urows['SeatingCapacity']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Price/day</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Priceperday" name="price" id="price"
                                                            value="<?php echo $urows['PricePerDay']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>ModelYear</label>
                                                        <input type="number" class="form-control"
                                                            placeholder="Enter vehiclename" name="year" id="year"
                                                            value="<?php echo $urows['ModelYear']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Owner Name</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter ownername" name="ownname" id="ownname"
                                                            value="<?php echo $urows['OwnerName']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Owner Number</label>
                                                        <input type="number" class="form-control"
                                                            placeholder="Enter owner number" name="ownno" id="ownno"
                                                            value="<?php echo $urows['owner_mobile']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label>Owner Email</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="Enter owneremail" name="email" id="email"
                                                            value="<?php echo $urows['owner_email']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customFile">Vehicle Front Image</label>
                                                <img src="images/<?php echo $urows['frontimage']; ?>"
                                                    style="width:20%;">
                                                <div>
                                                    <input type="file" class="form-control" id="frontimage"
                                                        name="frontimage" required>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customFile">Vehicle Back Image</label>
                                                <img src="images/<?php echo $urows['backimage']; ?>" style="width:20%;">
                                                <div>
                                                    <input type="file" class="form-control" id="backimage"
                                                        name="backimage" required>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customFile">Driver Driving licence image</label>
                                                <img src="images/<?php echo $urows['DLimage']; ?>" style="width:20%;">
                                                <div>
                                                    <input type="file" class="form-control" id="DLimage" name="DLimage"
                                                        required>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customFile">Owner Adhar Image</label>
                                                <img src="images/<?php echo $urows['own_adhar_image']; ?>"
                                                    style="width:20%;">
                                                <div>
                                                    <input type="file" id="Adharimage" class="form-control"
                                                        name="Adharimage" required>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customFile">Driver Adhar image</label>
                                                <img src="images/<?php echo $urows['Driver_Adhar_image']; ?>"
                                                    style="width:20%;">
                                                <div>
                                                    <input type="file" class="form-control" id="Adharimage1"
                                                        name="Adharimage1" required>

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
    <script src="../../dist/js/demo.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="../../Redicabs//admin//js//valid.js"></script>

    <script src="js/additional-methods.min.js">
    </script>
    <!-- Page specific script -->
    <script>
    $(function() {
        bsCustomFileInput.init();
    });
    </script>
</body>

</html>