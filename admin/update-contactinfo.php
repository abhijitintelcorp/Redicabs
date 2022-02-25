<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
// Code for change password	
if(isset($_POST['submit']))
{
$address=$_POST['address'];
$email=$_POST['email'];	
$contactno=$_POST['contactno'];
$query="update tblcontactusinfo set Address='$address',EmailId='$email',ContactNo='$contactno'";
$query_run = mysqli_query($conn,$query);
$msg="Info Updateed successfully";
}
$query1 = "SELECT * FROM  tblbooking WHERE id='1'";
$res = mysqli_query($conn, $query1);
$rows = mysqli_fetch_assoc($res);
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
                                <li class="breadcrumb-item active">Update contact Information</li>
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
                                    <h3 class="card-title">Update-Contact Information</h3>
                                </div>

                                <div class="card card-warning">

                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form action="" method="post" name="update_cont" id="update_cont" class="form-horizontal" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col-sm-6 mx-auto">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Company Address </label>
                                                        <input type="text" class="form-control" placeholder="Enter Address" name="CAddress" id="CAddress" value="<?php echo $rows['CompanyAddress']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mx-auto">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Email id</label>
                                                        <input type="text" class="form-control" placeholder="Enter Emailid" name="CEmail" id="CEmail" value="<?php echo $rows['CompanyEmail']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mx-auto">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Contact Number</label>
                                                        <input type="number" class="form-control" placeholder="Enter Contact Number" name="CContact" id="CContact" value="<?php echo $rows['CompanyContact']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group padding-right:10px text-center">
                                                <button type="submit" class="btn btn-primary text-center" id="contact_update" name="contact_update">Update</button>
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
<?php } ?>
