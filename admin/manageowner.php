<?php
include("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php include("includes/headerlink.php"); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">



        <?php include('includes/sidebar.php'); ?>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <!-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">ManageOwner</li>
                            </ol>
                        </div> -->
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content" style="margin-left: -251px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Manage Owner</h2>

                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body" style="padding:0px">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>count</th>
                                                <th>Category Name</th>
                                                <th>BrandName</th>
                                                <th>VehicleName</th>
                                                <th>VehicleNumber</th>
                                                <th>VehicleRCnumber</th>
                                                <th>VehicleChesisNumber</th>
                                                <!-- <th>DriverName</th>
                                                <th>DriverNumber</th>
                                                <th>DriverDLNo</th>
                                                <th>Price</th>
                                                <th>seat</th> -->
                                                <th>OwnerName</th>
                                                <th>OwnerNumber</th>
                                                <!-- <th>frontimage</th>
                                                <th>backimage</th>
                                                <th>DLimage</th>
                                                <th>Adharimage</th>
                                                <th>OwnerAdharimage</th> -->
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>

                                        <?php
                                        $retrive_qyr = "SELECT * FROM tblbooking";
                                        $retrive_fn_query = mysqli_query($conn, $retrive_qyr);
                                        $count = 0;
                                        while ($row = mysqli_fetch_array($retrive_fn_query)) {
                                            $count++;
                                        ?>

                                            <tbody>
                                                <tr>
                                                    <td><?php echo $count; ?></td>
                                                    <th><?php echo $row['Categories']; ?></th>
                                                    <th><?php echo $row['SubCategories']; ?></th>
                                                    <th><?php echo $row['owner_vehicle_name']; ?></th>
                                                    <th><?php echo $row['owner_vehicle_no']; ?></th>
                                                    <th><?php echo $row['owner_vehicle_RCno']; ?></th>
                                                    <th><?php echo $row['owner_vehicle_chesis_no']; ?></th>
                                                    <!-- <th><?php echo $row['DriverName']; ?></th>
                                                <th><?php echo $row['DriverMobile']; ?></th>
                                                <th><?php echo $row['Driver_DL_No']; ?></th>
                                                <th><?php echo $row['PricePerDay']; ?></th>
                                                <th><?php echo $row['SeatingCapacity']; ?></th> -->
                                                    <th><?php echo $row['OwnerName']; ?></th>
                                                    <th><?php echo $row['owner_mobile'] ?></th>
                                                    <!-- <th><img src="images/<?php echo $row['frontimage']; ?>" width="30"
                                                        height="30" alt=""></th>
                                                <th><img src="images/<?php echo $row['backimage']; ?>" width="30"
                                                        height="30" alt=""></th>
                                                <th><img src="images/<?php echo $row['DLimage']; ?>" width="30"
                                                        height="30" alt=""></th>
                                                <th><img src="images/<?php echo $row['Adharimage']; ?>" width="30"
                                                        height="30" alt=""></th>
                                                <th><img src="images/<?php echo $row['own_adhar_image']; ?>" width="30"
                                                        height="30" alt=""></th> -->
                                                    <td><a href="owner_update.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></a></td>
                                                </tr>
                                            </tbody>
                                        <?php
                                        }
                                        ?>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>