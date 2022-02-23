<?php
include("includes/config.php");
error_reporting(0);
if (isset($_POST['booking'])) {
    $SeatingCapacity = htmlspecialchars($_POST['SeatingCapacity']);
    $brand = htmlspecialchars($_POST['brand']);
    $VehicleName = htmlspecialchars($_POST['VehicleName']);
    $insert_qry = "INSERT INTO tblbooking(SeatingCapacity,brand,VehicleName) VALUES('$seat','$brand','$VehicleName')";
    $res_query = mysqli_query($conn, $insert_qry);
    if ($res_query) {
        header("location:quick_bookings.php");
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
                                <li class="breadcrumb-item active">Quick Bookings</li>
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
                                    <h3 class="card-title">Quick Bookings</h3>
                                </div>

                                <div class="card card-warning">

                                    <!-- /.card-header -->
<<<<<<< HEAD
                                    <div class="card-body">
                                        <form action="" method="post" name="quick_booking" id="quick_booking"
                                            class="form-horizontal" enctype="multipart/form-data">
=======
                                    <div class="card-body d-flex justify-content-center ">
                                        <form action="" method="post" name="quick_booking" id="quick_booking" class="form-horizontal" enctype="multipart/form-data">
>>>>>>> 20ae80d572bd856f58d7be116747a25cb6f50545

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">

                                                        <label>Seating Capacity</label>
<<<<<<< HEAD
                                                        <select id="SeatingCapacity" class="selectpicker"
                                                            data-live-search="false" name="SeatingCapacity"
                                                            id="SeatingCapacity" style="height: 50px; width:350px">
                                                            <option>SeatingCapacity</option>
=======
                                                        <select id="SeatingCapacity" class="selectpicker" data-live-search="false" name="SeatingCapacity" id="SeatingCapacity" style="height: 50px; width:450px" required>
                                                            <option value="">SeatingCapacity</option>
>>>>>>> 20ae80d572bd856f58d7be116747a25cb6f50545
                                                            <?php
                                                            $qry = "SELECT DISTINCT SeatingCapacity from tblbooking GROUP BY SeatingCapacity ASC";
                                                            $exe = mysqli_query($conn, $qry);
                                                            while ($row = mysqli_fetch_assoc($exe)) {

                                                            ?>
<<<<<<< HEAD
                                                            <option value="<?php echo $row['SeatingCapacity'] ?>">
                                                                <?php echo $row['SeatingCapacity'] ?>
                                                            </option>
=======
                                                                <option value="<?php echo $row['SeatingCapacity'] ?>">
                                                                    <?php echo $row['SeatingCapacity'] ?>
                                                                </option>
>>>>>>> 20ae80d572bd856f58d7be116747a25cb6f50545
                                                            <?php }  ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
<<<<<<< HEAD
                                                <div class="col-sm-6 mx-auto">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Vehicle Brand</label>
                                                        <select class="selectpicker" data-live-search="false"
                                                            name="brand" id="brand" style="height: 50px; width:350px"
                                                            required>
                                                            <option>Vehicle Brand</option>
=======
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Vehicle Brand</label>
                                                        <select class="selectpicker" data-live-search="false" name="brand" id="brand" style="height: 50px; width:450px;" required>
                                                            <option value="">Vehicle Brand</option>
>>>>>>> 20ae80d572bd856f58d7be116747a25cb6f50545

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 ">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Vehicle Name</label>
                                                        <select class="selectpicker" data-live-search="false" name="VehicleName" id="VehicleName" style="height: 50px; width:450px;" required>
                                                            <option value="">Vehicle Name</option>
                                                            <?php
                                                            $qry = "SELECT * from tblbooking";
                                                            $exe = mysqli_query($conn, $qry);
                                                            while ($row = mysqli_fetch_array($exe)) {
                                                                $puck_up_location = $row['puck_up_location'];
                                                                $drop_off_location = $row['drop_off_location'];
                                                            ?>
                                                                <option puck_up_location="<?php echo $row['puck_up_location']; ?>" drop_off_location="<?php echo $row['drop_off_location']; ?>" value="<?php echo $row['id'] ?>" value="<?php echo $row['owner_vehicle_name'] ?>">
                                                                </option>
                                                            <?php }  ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 ">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Vehicle Name</label>
                                                        <select class="selectpicker" data-live-search="false"
                                                            name="VehicleName" id="VehicleName"
                                                            style="height: 50px; width:350px">
                                                            <option>Vehicle Name</option>
                                                            <?php
                                                            $qry = "SELECT * from tblbooking";
                                                            $exe = mysqli_query($conn, $qry);
                                                            while ($row = mysqli_fetch_array($exe)) {
                                                                $puck_up_location = $row['puck_up_location'];
                                                                $drop_off_location = $row['drop_off_location'];



                                                            ?>
                                                            <option
                                                                puck_up_location="<?php echo $row['puck_up_location']; ?>"
                                                                drop_off_location="<?php echo $row['drop_off_location']; ?>"
                                                                value="<?php echo $row['id'] ?>"
                                                                value="<?php echo $row['owner_vehicle_name'] ?>">
                                                            </option>
                                                            <?php }  ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 mx-auto">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Puck-up location</label>
<<<<<<< HEAD
                                                        <input style="height: 50px; width:350px;"
                                                            name="puck_up_location" id="puck_up_location"
                                                            value="<?php echo $row['puck_up_location']; ?>">
=======
                                                        <input style="height: 50px; width:450px;" name="puck_up_location" id="puck_up_location" value="<?php echo $row['puck_up_location']; ?>" required>
>>>>>>> 20ae80d572bd856f58d7be116747a25cb6f50545

                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 ">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Drop-off location</label>
<<<<<<< HEAD
                                                        <input style="height: 50px; width:350px"
                                                            name="drop_off_location" id="drop_off_location"
                                                            value="<?php echo $row['drop_off_location']; ?>">
=======
                                                        <input style="height: 50px; width:450px" name="drop_off_location" id="drop_off_location" value="<?php echo $row['drop_off_location']; ?>" required>
>>>>>>> 20ae80d572bd856f58d7be116747a25cb6f50545

                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 ">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Date</label>
<<<<<<< HEAD
                                                        <input type="date" name="date" id="date"
                                                            style="height: 50px; width:350px">
=======
                                                        <input type="date" name="date" id="date" style="height: 50px; width:450px" required>
>>>>>>> 20ae80d572bd856f58d7be116747a25cb6f50545

                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
<<<<<<< HEAD
                                                <div class="col-sm-6 mx-auto">

                                                    <div class="form-group">
                                                        <label>Time</label>
                                                        <input type="time" class="selectpicker" data-live-search="false"
                                                            name="Time" id="Time" style="height: 50px; width:350px">
=======
                                                <div class="col-sm-6 ">

                                                    <div class="form-group">
                                                        <label>Time</label>
                                                        <input type="time" class="selectpicker" data-live-search="false" name="Time" id="Time" style="height: 50px; width:450px" required>
>>>>>>> 20ae80d572bd856f58d7be116747a25cb6f50545

                                                        </input>
                                                    </div>
                                                </div>
                                            </div>

<<<<<<< HEAD
                                            <div class="form-group padding-right:10px text-center">
                                                <button type="submit" class="btn btn-primary text-center" id="booking"
                                                    name="booking">submit</button>
=======
                                            <div class="form-group padding-right:10px  mx-auto ">
                                                <button type="submit" class="btn btn-primary text-center" id="booking" name="booking">submit</button>
>>>>>>> 20ae80d572bd856f58d7be116747a25cb6f50545
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


    </script>
    <!-- Page specific script -->
    <script>
    $(function() {
        bsCustomFileInput.init();
    });
    </script>

    <script>
    $(document).ready(function() {
        $('select[name="VehicleName"]').change(function() {
            var VehicleName = $('option:selected', this).attr('VehicleName');
            $("#VehicleName").val(VehicleName);

            var puck_up_location = $('option:selected', this).attr('puck_up_location');
            $("#puck_up_location").val(puck_up_location);

            var drop_off_location = $('option:selected', this).attr('drop_off_location');
            $("#drop_off_location").val(drop_off_location);


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
    <script type="text/javascript">
    $(document).ready(function() {
        $('#SeatingCapacity').on('change', function() {
            var SeatingCapacity = $(this).val();
            if (SeatingCapacity) {
                $.ajax({
                    type: 'POST',
                    url: 'get-brand.php',
                    data: 'SeatingCapacity=' + SeatingCapacity,
                    success: function(html) {
                        $('#brand').html(html);
                        $('#VehicleName').html(
                            '<option value="">Select Brand first</option>');
                    }
                });
            } else {
                $('#brand').html('<option value="">Select Seating Capacity first</option>');
                $('#VehicleName').html('<option value="">Select Brand first</option>');
            }
        });

        $('#brand').on('change', function() {
            var owner_vehicle_brand = $(this).val();
            if (owner_vehicle_brand) {
                $.ajax({
                    type: 'POST',
                    url: 'get-brand.php',
                    data: 'owner_vehicle_brand=' + owner_vehicle_brand,
                    success: function(html) {
                        $('#VehicleName').html(html);
                    }
                });
            } else {
                $('#VehicleName').html('<option value="">Select Brand first</option>');
            }
        });
    });
    </script>

    <script>
        $(document).ready(function() {
            $('select[name="VehicleName"]').change(function() {
                // var VehicleName = $('option:selected', this).attr('VehicleName');
                // $("#VehicleName").val(VehicleName);

                var puck_up_location = $('option:selected', this).attr('puck_up_location');
                $("#puck_up_location").val(puck_up_location);

                var drop_off_location = $('option:selected', this).attr('drop_off_location');
                $("#drop_off_location").val(drop_off_location);


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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#SeatingCapacity').on('change', function() {
                var SeatingCapacity = $(this).val();
                if (SeatingCapacity) {
                    $.ajax({
                        type: 'POST',
                        url: 'get-brand.php',
                        data: 'SeatingCapacity=' + SeatingCapacity,
                        success: function(html) {
                            $('#brand').html(html);
                            $('#VehicleName').html(
                                '<option value="">Select Brand first</option>');
                        }
                    });
                } else {
                    $('#brand').html('<option value="">Select Seating Capacity first</option>');
                    $('#VehicleName').html('<option value="">Select Brand first</option>');
                }
            });

            $('#brand').on('change', function() {
                var owner_vehicle_brand = $(this).val();
                if (owner_vehicle_brand) {
                    $.ajax({
                        type: 'POST',
                        url: 'get-brand.php',
                        data: 'owner_vehicle_brand=' + owner_vehicle_brand,
                        success: function(html) {
                            $('#VehicleName').html(html);
                        }
                    });
                } else {
                    $('#VehicleName').html('<option value="">Select Brand first</option>');
                }
            });
        });
    </script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="../admin/js/valid.js"></script>
    <script src="js/additional-methods.min.js">
    </script>
    <script src="js/jquary.min.js">
    </script>
</body>

</html>