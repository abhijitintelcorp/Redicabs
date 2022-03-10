<?php
session_start();
error_reporting(0);
if (strlen($_SESSION['EmailId']) == 0) {
    header("location:login.php");
}
include("includes/config.php");
?>
<?php include("includes/headerlink.php"); ?>
<!DOCTYPE html>
<html lang="en">
<script type="text/javascript" src="js/getData.js"></script>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->


        <?php include("includes/sidebar.php"); ?>

        <div class="content-wrapper">


            <!-- Main content -->
            <section class="content" style="margin-left: -251px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Booking info</h2>
                            <!-- <a href="add-booking.php"><span class="pull-right">Add Booking</span></a> -->
                            <div class="col-sm-4">

                                <form action="" method="POST"> <label>SeatingCapacity</label>

                                    <select class="selectpicker" data-live-search="false" name="SeatingCapacity"
                                        id="SeatingCapacity">
                                        <option value="" selected="selected">SeatingCapacity</option>
                                        <?php
                                        $qry = "SELECT   SeatingCapacity from tblbooking GROUP BY SeatingCapacity ASC";
                                        $exe = mysqli_query($conn, $qry);
                                        while ($row = mysqli_fetch_assoc($exe)) {

                                        ?>
                                        <option value="<?php echo $row['SeatingCapacity'] ?>">
                                            <?php echo $row['SeatingCapacity'] ?>
                                        </option>
                                        <?php }  ?>
                                    </select>
                                    <button class="btn btn-primary" name="filter">Filter</button>
                                </form>
                            </div>
                            <div class="card">

                                <div class="card-body" style="padding: 0px">

                                    <table id="zctb" class="display table table-striped table-bordered table-hover"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>SlNo.</th>
                                                <th>Brand</th>
                                                <th>VehicleName</th>
                                                <th>FrontImage</th>
                                                <th>BackImage</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <!-- <?php include 'filter.php' ?> -->
                                        <?php
                                        include("includes/config.php");
                                        $SeatingCapacity = $_POST['SeatingCapacity'];
                                        $cnt = 0;
                                        $query = mysqli_query($conn, "SELECT * FROM `tblbooking`WHERE SeatingCapacity=$SeatingCapacity") or die();
                                        while ($fetch = mysqli_fetch_array($query)) {
                                            $cnt++;
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo htmlentities($cnt); ?></td>
                                                <td><?php echo $fetch['owner_vehicle_brand'];  ?></td>
                                                <td><?php echo htmlentities($fetch['owner_vehicle_name']); ?>
                                                </td>

                                                <td><img src="images/<?php echo $fetch['frontimage']; ?>" width="30"
                                                        height="30" alt=""></td>

                                                <td><img src="images/<?php echo $fetch['backimage']; ?>" width="30"
                                                        height="30" alt=""></td>
                                                <td><a href="add-booking.php?id=<?php echo $fetch['id']; ?>">
                                                        Edit</a>

                                                </td>

                                            </tr>
                                            <?php $cnt = $cnt + 1;
                                        }
                                            ?>
                                        </tbody>

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
    <?php
    include("includes/footerlink.php");
    ?>
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
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js">
    </script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
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
                        $('#VehicleName').text(SeatingCapacity);

                    }
                });
            } else {
                $('#brand').html('<option value="">Select Seating Capacity first</option>');
                $('#VehicleName').html('<option value="">Select Brand first</option>');

            }
        });
    })
    </script>
    <script>
    $(document).ready(function() {
        $('#zctb').DataTable();
    });
    </script>

</body>


</html>