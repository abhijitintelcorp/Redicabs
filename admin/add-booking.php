<?php
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

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->

        <?php include('includes/sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="margin-left: 0px;">
            <!-- Content Header (Page header) -->
            <section class="content-header" style="padding:0px">
                <div class="container-fluid">
                    <div class="row mb-2">

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
                                        <form action="" method="post" name="add_owner" id="add_owner" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <label>SeatingCapacity</label>

                                                    <select class="selectpicker" onchange=getbrand() name="SeatingCapacity" id="SeatingCapacity">
                                                        <option>SeatingCapacity</option>
                                                        <?php
                                                        $qry = "SELECT  id, SeatingCapacity from tblbooking";
                                                        $exe = mysqli_query($conn, $qry);
                                                        while ($row = mysqli_fetch_array($exe)) {

                                                        ?>
                                                            <option value="<?php echo $row['id'] ?>">
                                                                <?php echo $row['SeatingCapacity'] ?>
                                                            </option>

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
                                                <input type="text" class="form-control" placeholder="Enter vehicle number" name="VehicleNumber" id="VehicleNumber">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>VehRCNo</label>
                                                <input type="text" class="form-control" placeholder="Enter vehicle RC no" name="VehRCNo" id="VehRCNo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>VehChesisNo</label>
                                                <input type="text" class="form-control" placeholder="Enter vehiclename" name="chasis" id="chasis">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label>DriverName</label>
                                                <input type="text" class="form-control" placeholder="Enter Driver name" name="Dname" id="Dname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>DLnumber</label>
                                                <input type="text" class="form-control" placeholder="Enter Driver DL number" name="DLno" id="DLno">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>DriverNumber</label>
                                                <input type="text" class="form-control" placeholder="Enter driver number" name="Dno" id="Dno">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Price/day</label>
                                            <input type="text" class="form-control" placeholder="Enter Priceperday" name="price" id="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ModelYear</label>
                                            <input type="text" class="form-control" placeholder="Enter vehiclename" name="year" id="year">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>OwnerName</label>
                                            <input type="text" class="form-control" placeholder="Enter ownername" name="ownname" id="ownname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>OwnerAdharNumber</label>
                                            <input type="text" class="form-control" placeholder="Enter ownerAdharNo" name="ownadhar" id="ownadhar">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>OwnerNumber</label>
                                            <input type="text" class="form-control" placeholder="Enter owner number" name="ownno" id="ownno">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Owneremail</label>
                                            <input type="text" class="form-control" placeholder="Enter owneremail" name="email" id="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label for="customFile">UploadOwnerAdharCard</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="Adharimage1" name="Adharimage1">
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

                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="frontimage" name="frontimage">
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="customFile">CarBackImage</label>

                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="backimage" name="backimage">
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="owner_submit">Submit</button>
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
            var val = document.getElementById('VehicleName');
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