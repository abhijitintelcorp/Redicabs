<?php
include("includes/config.php");
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
                                    <div class="card-body">
                                        <form action="" method="post" name="quick_booking" id="quick_booking" class="form-horizontal" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col-sm-6 mx-auto">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Seating Capacity</label>
                                                        <input type="text" class="form-control" placeholder="Enter Seating Capacity" name="SeatingCapacity" id="SeatingCapacity" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mx-auto">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Vehicle Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter Vehicle Name" name="owner_vehicle_name" id="owner_vehicle_name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mx-auto">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Vehicle Brand</label>
                                                        <input type="text" class="form-control" placeholder="Enter Vehicle Brand" name="owner_vehicle_brand" id="owner_vehicle_brand" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mx-auto">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Puck-up location</label>
                                                        <input type="text" class="form-control" placeholder="Enter puck-up location" name="puck-up_location" id="puck-up_location" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mx-auto">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Drop-off location</label>
                                                        <input type="text" class="form-control" placeholder="Enter drop-off location" name="drop-off_location" id="drop-off_location" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mx-auto">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Date</label>
                                                        <input type="text" class="form-control" placeholder="Enter Date" name="date" id="date" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mx-auto">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Time</label>
                                                        <input type="text" class="form-control" placeholder="Enter Time" name="time" id="time" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group padding-right:10px text-center">
                                                <button type="submit" class="btn btn-primary text-center" id="booking" name="booking">submit</button>
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

    </script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>