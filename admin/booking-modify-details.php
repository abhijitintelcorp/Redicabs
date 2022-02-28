<?php
session_start();
error_reporting(0);
include("includes/config.php");
$bid = $_GET['bid'];

if (isset($_POST['update'])) {
    $priceperday = htmlspecialchars($_POST['priceperday']);
    $UserName = htmlspecialchars($_POST['UserName']);
    $EmailId = htmlspecialchars($_POST['EmailId']);
    $ContactNo = htmlspecialchars($_POST['ContactNo']);
    $address = htmlspecialchars($_POST['address']);
    $City = htmlspecialchars($_POST['City']);
    $SeatingCapacity = htmlspecialchars($_POST['SeatingCapacity']);
    $brand = htmlspecialchars($_POST['brand']);
    $VehicleName = htmlspecialchars($_POST['VehicleName']);
    $CreatedDate = htmlspecialchars($_POST['CreatedDate']);
    $FromDate = htmlspecialchars($_POST['FromDate']);
    $ToDate = htmlspecialchars($_POST['ToDate']);
    $pickuptime = htmlspecialchars($_POST['pickuptime']);
    $TotalNoDays = htmlspecialchars($_POST['TotalNoDays']);
    $PricePerDay = htmlspecialchars($_POST['PricePerDay']);
    $DriverName = htmlspecialchars($_POST['DriverName']);
    $DriverNo = htmlspecialchars($_POST['DriverNo']);
    $pickup = htmlspecialchars($_POST['pickup']);
    $dropoff = htmlspecialchars($_POST['dropoff']);

    $update_qry = "UPDATE tblbooking SET `PricePerDay`='$priceperday',`UserName`='$UserName',`EmailId`='$EmailId',
    `ContactNo`='$ContactNo',`address`='$address',`City`='$City',`SeatingCapacity`='$SeatingCapacity',
    `owner_vehicle_brand` ='$brand',`owner_vehicle_name`='$VehicleName',`CreatedDate`='$CreatedDate',
    `FromDate`='$FromDate',`ToDate`='$ToDate',`pickuptime`='$pickuptime',`TotalNoDays`='$TotalNoDays'
      `PricePerDay`='$PricePerDay',`DriverName`='$DriverName',`DriverNo`='$DriverNo',`pickup`='$pickup',`dropoff`='$dropoff' WHERE tblbooking.id='$bid'";
    $query_run = mysqli_query($conn, $update_qry);
    if ($query_run) {
        header("location:new-bookings.php");
    } else {
        $msg = "updated failed";
    }
}
// if (isset($_POST['owner_update_time'])) {
//     $time = htmlspecialchars($_POST['time']);
//     $status = 3;
//     $upd_time = "UPDATE tblbooking SET `Time`='$time',`Status`='$status' WHERE tblbooking.id='$user_id'";
//     $res_query = mysqli_query($conn, $upd_time);
// }

?>
<!doctype html>
<html lang="en" class="no-js">

<?php include("includes/headerlink.php"); ?>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <?php include('includes/sidebar.php'); ?>

        <div class="content-wrapper" style="margin-left: 10px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="padding: 0px;">

                                <div id="print">
                                    <table border="1" class="display table table-striped table-bordered table-hover"
                                        cellspacing="0" width="100%">

                                        <tbody>
                                            <form method="post">
                                                <?php
                                                $bid = intval($_GET['bid']);
                                                $query = "SELECT * from tblbooking where tblbooking.id='$bid'";
                                                $query_run = mysqli_query($conn, $query);
                                                $cnt = 1;
                                                if (mysqli_num_rows($query_run) > 0) {
                                                    while ($row = mysqli_fetch_array($query_run)) {
                                                ?>
                                                <form action="" method="post">
                                                    <h3 style="text-align:center; color:red">
                                                        #<?php echo $row['BookingNumber']; ?> Booking Details </h3>

                                                    <tr>
                                                        <th colspan="4" style="text-align:center;color:blue">User
                                                            Details
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Booking No.</th>
                                                        <td><input type="text" class="form-control" name="bookingno"
                                                                id="bookingno"
                                                                value="<?php echo $row['BookingNumber']; ?>"
                                                                readonly="readonly" required>
                                                        </td>
                                                        <th>Name</th>
                                                        <td><input type="text" class="form-control" name="UserName"
                                                                id="UserName" value="<?php echo $row['UserName']; ?>"
                                                                required></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email Id</th>
                                                        <td><input type="text" class="form-control" name="EmailId"
                                                                id="EmailId" value="<?php echo $row['EmailId']; ?>"
                                                                required></td>
                                                        <th>Contact No</th>
                                                        <td><input type="text" class="form-control" name="ContactNo"
                                                                id="ContactNo" value="<?php echo $row['ContactNo']; ?>"
                                                                required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Address</th>
                                                        <td><input type="text" class="form-control" name="address"
                                                                id="address" value="<?php echo $row['address']; ?>"
                                                                required>
                                                        </td>
                                                        <th>City</th>
                                                        <td><input type="text" class="form-control" name="City"
                                                                id="City" value="<?php echo $row['City']; ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Country</th>
                                                        <td colspan="3"><input type="text" class="form-control"
                                                                name="Country" id="Country"
                                                                value="<?php echo $row['Country']; ?>" required>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th colspan="4" style="text-align:center;color:blue">Booking
                                                            Details
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>seatingCapacity</th>
                                                        <td><select class="selectpicker" data-live-search="false"
                                                                name="SeatingCapacity" id="SeatingCapacity">
                                                                <option>SeatingCapacity</option>
                                                                <?php
                                                                        $qry = "SELECT DISTINCT SeatingCapacity from tblbooking
                                                                         GROUP BY SeatingCapacity ASC";
                                                                        $exe = mysqli_query($conn, $qry);
                                                                        while ($row = mysqli_fetch_assoc($exe)) {
                                                                        ?>
                                                                <option value="<?php echo $row['SeatingCapacity']; ?>">
                                                                    <?php echo $row['SeatingCapacity']; ?>
                                                                    <?php }
                                                                            ?></option>
                                                            </select>
                                                        </td>
                                                        <th>Brand</th>
                                                        <td>
                                                            <select class="selectpicker" data-live-search="false"
                                                                name="brand" id="brand">
                                                                <option value="">Select Brand</option>
                                                            </select>
                                                        </td>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th> <label>VehicleName</label></th>
                                                        <td>
                                                            <input type="hidden" id="userID" name="userID" value="" />

                                                            <select class="selectpicker" data-live-search="false"
                                                                name="VehicleName" id="VehicleName">
                                                                <option value="">Select Brand first</option>
                                                            </select>
                                                        </td>

                                                        <th>Booking Date</th>
                                                        <td><input type="text" class="form-control" name="CreatedDate"
                                                                id="CreatedDate" readonly="readonly"
                                                                value="<?php echo $row['RegDate']; ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>PickUp</th>
                                                        <td><input type="text" class="form-control" name="pickup"
                                                                id="pickup" value="<?php echo $row['pickup']; ?>">
                                                        </td>
                                                        <th>DropOff</th>
                                                        <td><input type="text" class="form-control" name="dropoff"
                                                                id="dropoff" value="<?php echo $row['dropoff']; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>From Date</th>
                                                        <td><input type="date" class="form-control" id="datepicker"
                                                                name="FromDate" placeholder="From Date"
                                                                value="<?php echo $row['FromDate']; ?>" required>
                                                        </td>
                                                        <th>To Date</th>
                                                        <td><input type="date" class="form-control" id="datepicker"
                                                                name="ToDate" placeholder="To Date"
                                                                value="<?php echo $row['ToDate']; ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>PickUp Time</th>
                                                        <td><input type="time" class="form-control" name="pickuptime"
                                                                id="pickuptime" value="<?php echo $row['Time']; ?>"
                                                                required></td>
                                                        <!-- <td style="text-align:center" colspan="4">
                                                            <button class="btn btn-primary pull-left"
                                                                name="owner_update_time" type="submit">Change Pickup
                                                                Time</button>
                                                        </td> -->
                                                    </tr>

                                                    <tr>
                                                        <th>Total Days</th>
                                                        <td><input type="text" class="form-control" name="TotalNoDays"
                                                                id="TotalNoDays"
                                                                value="<?php echo htmlentities($tdays = $row['TotalNoDays']) + 1; ?>"
                                                                required>
                                                        </td>
                                                        <th>Rent Per Days</th>
                                                        <td><input type="text" class="form-control" name="PricePerDay"
                                                                id="PricePerDay" onkeyup="add()"
                                                                value="<?php echo htmlentities($ppdays = $row['PricePerDay']); ?>"
                                                                required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="3" style="text-align:center">Grand Total</th>
                                                        <td><input type="text" class="form-control" name="total"
                                                                id="total" readonly="readonly"
                                                                value="<?php echo htmlentities(($tdays) * $ppdays); ?>"
                                                                required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Booking Status</th>
                                                        <td><?php
                                                                    if ($row['Status'] == 0) {
                                                                        echo htmlentities('Not Confirmed yet');
                                                                    } else if ($row['Status'] == 1) {
                                                                        echo htmlentities('Confirmed');
                                                                    } else {
                                                                        echo htmlentities('Cancelled');
                                                                    }
                                                                    ?></td>

                                                        <th>Last updation Date</th>
                                                        <td><?php echo htmlentities($row['UpdationDate']); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="4" style="text-align:center;color:blue">Assign
                                                            Driver
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Driver Name</th>
                                                        <td><select name="DriverName" id="DriverName" type="text"
                                                                class="selectpicker">
                                                                <option value="<?php echo $row['DriverName']; ?>">
                                                                    <?php echo $row['DriverName']; ?></option>
                                                            </select>
                                                        </td>
                                                        <th>Phone Number</th>
                                                        <td><input class="form-control white_bg"
                                                                placeholder="Driver Number" name="DriverNo"
                                                                id="DriverNo" value="<?php echo $row['DriverNo']; ?>"
                                                                type="text" readonly="readonly"></td>
                                                        <td><input class="form-control white_bg"
                                                                placeholder="Driver Name" name="driver_name"
                                                                id="driver_name" value="<?php echo $row['Driverid']; ?>"
                                                                type="hidden" readonly="readonly"></td>
                                                    </tr>
                                                    <?php } ?>


                                                    <tr>
                                                        <td style="text-align:center" colspan="4">
                                                            <button class="btn btn-primary" name="update"
                                                                type="submit">Update</button>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                    <?php $cnt = $cnt + 1;

                                                    ?>
                                                </form>
                                        </tbody>
                                    </table>


                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
    include("includes/footerlink.php");
    ?>
    <script>
    function add() {
        var x = parseInt(document.getElementById("TotalNoDays").value);
        var y = parseInt(document.getElementById("PricePerDay").value)
        document.getElementById("total").value = x * y;
    }
    </script>
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
    <script language="javascript" type="text/javascript">
    function f3() {
        window.print();
    }
    </script>
    <script>
    $(document).ready(function() {
        $('select[name="name"]').change(function() {
            var number = $('option:selected', this).attr('number');
            var driver_name = $('option:selected', this).attr('driver_name');
            $("#number").val(number);
            $("#driver_name").val(driver_name);
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

        $('#VehicleName').on('change', function() {
            var owner_vehicle_name = $(this).val();
            if (owner_vehicle_name) {
                $.ajax({
                    type: 'POST',
                    url: 'get-brand.php',
                    data: 'owner_vehicle_name=' + owner_vehicle_name,
                    success: function(html) {
                        $('#OwnerName').html(html);
                    }
                });
            } else {
                $('#OwnerName').html('<option value="">Select Brand first</option>');
            }
        });
        $('#VehicleName').on('change', function() {
            var owner_vehicle_name = $(this).val();
            $.ajax({
                type: 'POST',
                url: 'get-vehicle.php',
                data: {
                    owner_vehicle_name: owner_vehicle_name
                },
                success: function(data) {
                    $('#owner_vehicle_no').val(data);
                }
            });
        });
    });
    $('#VehicleName').on('change', function() {
        var owner_vehicle_name = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'get-vehicle-RC-no.php',
            data: {
                owner_vehicle_name: owner_vehicle_name
            },
            success: function(data) {
                $('#owner_vehicle_RCno').val(data);
            }
        });
    });
    $('#VehicleName').on('change', function() {
        var owner_vehicle_name = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'get-vehicle-RC-no.php',
            data: {
                owner_vehicle_name: owner_vehicle_name
            },
            success: function(data) {
                $('#owner_vehicle_RCno').val(data);
            }
        });
    });
    $('#VehicleName').on('change', function() {
        var owner_vehicle_name = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'get-vehicle-chesis-no.php',
            data: {
                owner_vehicle_name: owner_vehicle_name
            },
            success: function(data) {
                $('#owner_vehicle_chesis_no').val(data);
            }
        });
    });
    $('#VehicleName').on('change', function() {
        var owner_vehicle_name = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'get-price-per-day.php',
            data: {
                owner_vehicle_name: owner_vehicle_name
            },
            success: function(data) {
                $('#PricePerDay').val(data);
            }
        });
    });
    $('#VehicleName').on('change', function() {
        var owner_vehicle_name = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'get-model-year.php',
            data: {
                owner_vehicle_name: owner_vehicle_name
            },
            success: function(data) {
                $('#ModelYear').val(data);
            }
        });
    });
    $('#VehicleName').on('change', function() {
        var owner_vehicle_name = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'get-owner-mobile.php',
            data: {
                owner_vehicle_name: owner_vehicle_name
            },
            success: function(data) {
                $('#owner_mobile').val(data);
            }
        });
    });
    $('#VehicleName').on('change', function() {
        var owner_vehicle_name = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'get-owner-mobile.php',
            data: {
                owner_vehicle_name: owner_vehicle_name
            },
            success: function(data) {
                $('#owner_mobile').val(data);
            }
        });
    });
    $('#VehicleName').on('change', function() {
        var owner_vehicle_name = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'get-owner-email.php',
            data: {
                owner_vehicle_name: owner_vehicle_name
            },
            success: function(data) {
                $('#owner_email').val(data);
            }
        });
    });
    $('#VehicleName').on('change', function() {
        var owner_vehicle_name = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'get-driver-name.php',
            data: {
                owner_vehicle_name: owner_vehicle_name
            },
            success: function(data) {
                $('#DriverName').val(data);
            }
        });
    });
    $('#VehicleName').on('change', function() {
        var owner_vehicle_name = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'get-driver-mobile.php',
            data: {
                owner_vehicle_name: owner_vehicle_name
            },
            success: function(data) {
                $('#DriverMobile').val(data);
            }
        });
    });
    </script>
</body>

</html>