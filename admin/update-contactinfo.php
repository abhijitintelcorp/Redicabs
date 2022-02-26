 <?php
    session_start();
    error_reporting(0);
    include('includes/config.php');
    if (strlen($_SESSION['alogin']) == 0) {
        header('location:index.php');
    } else {
        // Code for change password	
        if (isset($_POST['submit'])) {
            $address = $_POST['address'];
            $email = $_POST['email'];
            $contactno = $_POST['contactno'];
            $query = "update tblcontactusinfo set Address='$address',EmailId='$email',ContactNo='$contactno'";
            $query_run = mysqli_query($conn, $query);
            $msg = "Info Updateed successfully";
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
     <?php
        session_start();
        error_reporting(0);
        include('includes/config.php');
        if (strlen($_SESSION['alogin']) == 0) {
            header('location:index.php');
        } else {
            // Code for change password	
            if (isset($_POST['submit'])) {
                $address = $_POST['address'];
                $email = $_POST['email'];
                $contactno = $_POST['contactno'];
                $query = "update tblcontactusinfo set Address='$address',EmailId='$email',ContactNo='$contactno'";
                $query_run = mysqli_query($conn, $query);
                $msg = "Info Updateed successfully";
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

             <title>Car Rental Portal | Admin Create Brand</title>

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

                                 <h2 class="page-title">Update Contact Info</h2>

                                 <div class="row">
                                     <div class="col-md-10">
                                         <div class="panel panel-default">
                                             <div class="panel-heading">Form fields</div>
                                             <div class="panel-body">
                                                 <form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();">


                                                     <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
                                                     <?php $query1 = "SELECT * from  tblcontactusinfo ";
                                                        $query_run1 = mysqli_query($conn, $query1);
                                                        if (mysqli_num_rows($query_run1) > 0) {
                                                            while ($row = mysqli_fetch_array($query_run1)) {
                                                        ?>

                                                             <div class="form-group">
                                                                 <label class="col-sm-4 control-label"> Address</label>
                                                                 <div class="col-sm-8">
                                                                     <textarea class="form-control" name="address" id="address" required><?php echo $row['Address']; ?></textarea>
                                                                 </div>
                                                             </div>
                                                             <div class="form-group">
                                                                 <label class="col-sm-4 control-label"> Email id</label>
                                                                 <div class="col-sm-8">
                                                                     <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['EmailId']; ?>" required>
                                                                 </div>
                                                             </div>
                                                             <div class="form-group">
                                                                 <label class="col-sm-4 control-label"> Contact Number </label>
                                                                 <div class="col-sm-8">
                                                                     <input type="text" class="form-control" value="<?php echo $row['ContactNo']; ?>" name="contactno" id="contactno" required>
                                                                 </div>
                                                             </div>
                                                     <?php }
                                                        } ?>
                                                     <div class="hr-dashed"></div>




                                                     <div class="form-group">
                                                         <div class="col-sm-8 col-sm-offset-4">

                                                             <button class="btn btn-primary" name="submit" type="submit">Update</button>
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


 <?php } ?>