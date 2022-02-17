<?php
include("includes/config.php");
if (isset($_POST['owner_submit'])) {
    $category = htmlspecialchars($_POST['category']);
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
    $path1 = "images/" . $frontimage;
    $path2 = "images/" . $backimage;
    $path3 = "images/" . $DLimage;
    $path4 = "images/" . $Adharimage;
    $path5 = "images/" . $Adharimage1;
    // $created_at = date('Y-m-d');
    if ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif') {
        if ($size <= 7000000) {
            $insert_qry = "INSERT INTO tblbooking(Categories,SubCategories,owner_vehicle_name,
            owner_vehicle_no,owner_vehicle_RCno,owner_vehicle_chesis_no,DriverName,DriverMobile,Driver_DL_No,PricePerDay,
            SeatingCapacity,ModelYear,OwnerName,Owner_Aadhar_No,owner_mobile,owner_email,frontimage,backimage,DLimage,
            Driver_Adhar_image,own_adhar_image) VALUES('$category','$brand','$VehicleName','$VehicleNumber',
            '$VehRCNo','$chasis', '$Dname','$Dno','$DLno','$price','$seat','$year','$ownname','$ownadhar','$ownno',
            '$email','$frontimage','$backimage','$DLimage','$Adharimage','$Adharimage1')";
            $res_query = mysqli_query($conn, $insert_qry);
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
        if (move_uploaded_file($img_file5, $path)) {
            copy($path, "$path");
        }
    }
    if ($res_query) {
        header("location:manageowner.php");
        echo "success";
    } else {
        echo "error";
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
        <div class="content-wrapper" style="margin: 0px">
            <!-- Content Header (Page header) -->
            <section class="content-header" style="padding:0px">
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
                            <!-- <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Add Owner</h3>
                                </div> -->
                            <div class="card card-warning">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="" method="post" name="add_owner" id="add_owner"
                                        class="form-horizontal" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Cartegory name</label>
                                                    <input type="text" class="form-control" placeholder="Enter category"
                                                        name="category" id="category">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>BrandName</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter BrandName" name="brand" id="brand">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>VehicleName</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter vehiclename" name="VehicleName"
                                                        id="VehicleName">
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
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>VehChesisNo</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter vehiclechasis" name="chasis" id="chasis">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>DriverName</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Driver name" name="Dname" id="Dname">
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
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>SeatingCapacity</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter seating capacity" name="seat" id="seat">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Price/day</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Priceperday" name="price" id="price">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ModelYear</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter vehiclename" name="year" id="year">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>OwnerName</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter ownername" name="ownname" id="ownname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>OwnerAdharNumber</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter ownerAdharNo" name="ownadhar" id="ownadhar">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>OwnerNumber</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter owner number" name="ownno" id="ownno">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Owneremail</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter owneremail" name="email" id="email">
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

                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary"
                                                name="owner_submit">Submit</button>
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
    <script src="../../dist/js/demo.js"></script>

    <!-- Page specific script -->
    <script>
    $(function() {
        bsCustomFileInput.init();
    });
    </script>
</body>

</html>