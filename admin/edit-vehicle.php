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

        <?php include('includes/sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
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
                                    <h3 class="card-title">Add Owner</h3>
                                </div>

                                <div class="card card-warning">

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