<?php
include("includes/config.php");
error_reporting(0);
if (isset($_POST['submit'])) {
    $brand = htmlspecialchars($_POST['brand']);
    $owner_vehicle_name = htmlspecialchars($_POST['owner_vehicle_name']);
    $owner_vehicle_no = htmlspecialchars($_POST['owner_vehicle_no']);
    $owner_vehicle_RCno = htmlspecialchars($_POST['owner_vehicle_RCno']);
    $owner_vehicle_chesis_no = htmlspecialchars($_POST['owner_vehicle_chesis_no']);
    $DriverName = htmlspecialchars($_POST['DriverName']);
    $DriverMobile = htmlspecialchars($_POST['DriverMobile']);
    $PricePerDay = htmlspecialchars($_POST['PricePerDay']);
    $SeatingCapacity = htmlspecialchars($_POST['SeatingCapacity']);
    $ModelYear = htmlspecialchars($_POST['ModelYear']);
    $OwnerName = htmlspecialchars($_POST['OwnerName']);
    $owner_mobile = htmlspecialchars($_POST['owner_mobile']);
    $owner_email = htmlspecialchars($_POST['owner_email']);
    $pickup = htmlspecialchars($_POST['pickup']);
    $dropoff = htmlspecialchars($_POST['dropoff']);
    $FromDate = htmlspecialchars($_POST['FromDate']);
    $ToDate = htmlspecialchars($_POST['ToDate']);
    $pickuptime = htmlspecialchars($_POST['pickuptime']);
    $frontimage = $_FILES['frontimage']['name'];
    $type = $_FILES['frontimage']['type'];
    $size = $_FILES['frontimage']['size'];
    $img_file1 = $_FILES['frontimage']['tmp_name'];
    $backimage = $_FILES['backimage']['name'];
    $type = $_FILES['backimage']['type'];
    $size = $_FILES['backimage']['size'];
    $img_file2 = $_FILES['backimage']['tmp_name'];

    $path1 = "images/" . $frontimage;
    $path2 = "images/" . $backimage;



    if ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif') {
        if ($size <= 7000000) {
            $insert_qry = "UPDATE  tblbooking SET  OwnerName='$OwnerName',owner_mobile='$owner_mobile',
            owner_email='$owner_email',owner_vehicle_no='$owner_vehicle_no',
            owner_vehicle_RCno='$owner_vehicle_RCno', owner_vehicle_chesis_no='$owner_vehicle_chesis_no',
            owner_vehicle_brand='$owner_vehicle_brand',owner_vehicle_name='$owner_vehicle_name'
            ,PricePerDay='$PricePerDay', ModelYear='$ModelYear', pickup='$pickup', dropoff='$dropoff', FromDate='$FromDate', ToDate='$ToDate',pickuptime='$pickuptime' WHERE id='$id'";
            $inst_u_fn1_qry = mysqli_query($conn, $insert_qry);

            if ($inst_u_fn1_qry) {
                header("location:new-booking.php");
            }
            $path = "images/" . $frontimage;
            if (move_uploaded_file($img_file1, $path)) {
                copy($path, "$path");
            }
            $path = "images/" . $backimage;
            if (move_uploaded_file($img_file2, $path)) {
                copy($path, "$path");
            }
        }
        if ($res_query) {
            header("location:new-booking.php");
            echo "success";
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
                                        <form action="" method="post" name="add_booking" id="add_booking"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-4">

                                                    <label>SeatingCapacity</label>

                                                    <select class="selectpicker" data-live-search="false"
                                                        name="SeatingCapacity" id="SeatingCapacity">
                                                        <option>SeatingCapacity</option>
                                                        <?php
                                                        $qry = "SELECT DISTINCT SeatingCapacity from tblbooking GROUP BY SeatingCapacity ASC";
                                                        $exe = mysqli_query($conn, $qry);
                                                        while ($row = mysqli_fetch_assoc($exe)) {

                                                        ?>
                                                        <option value="<?php echo $row['SeatingCapacity'] ?>">
                                                            <?php echo $row['SeatingCapacity'] ?>
                                                        </option>
                                                        <?php }  ?>
                                                    </select>

                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Brand</label>
                                                    <select class="selectpicker" data-live-search="false" name="brand"
                                                        id="brand">
                                                        <option value="">Select Brand</option>
                                                    </select>

                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <input type="hidden" id="userID" name="userID" value="" />
                                                        <label>VehicleName</label>
                                                        <select class="selectpicker" data-live-search="false"
                                                            name="VehicleName" id="VehicleName">
                                                            <option value="">Select Brand first</option>
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                             <?php
                                                           $owner_vehicle_brand= $_POST['owner_vehicle_brand'];
                                                            $qry = "SELECT * from tblbooking WHERE owner_vehicle_brand = '$owner_vehicle_brand' 
	GROUP BY owner_vehicle_name ASC";
                                                            // WHERE owner_vehicle_name = '$VehicleName' ";
                                                            $exe = mysqli_query($conn, $qry);
                                                            //$userData = array();
                                                           $row = mysqli_fetch_array($exe);
                                                                $owner_vehicle_no = $row['owner_vehicle_no'];
                                                                $owner_vehicle_RCno = $row['owner_vehicle_RCno'];
                                                                $owner_vehicle_chesis_no = $row['owner_vehicle_chesis_no'];
                                                                $PricePerDay = $row['PricePerDay'];
                                                                $ModelYear = $row['ModelYear'];
                                                            ?>
                                                            
        
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>VehicleNumber</label>
<input type="text" class="form-control" placeholder="Enter vehicle Number" name="owner_vehicle_no" id="owner_vehicle_no" readonly="readonly">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>VehRCNo</label>
<input type="text" class="form-control" placeholder="Enter vehicle RC no" name="owner_vehicle_RCno" id="owner_vehicle_RCno" readonly="readonly">
                                                    </div>
                                                </div>
                                            </div>

                                           
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>VehChesisNo</label>
<input type="text" class="form-control" placeholder="Enter vehiclename" name="owner_vehicle_chesis_no" id="owner_vehicle_chesis_no" readonly="readonly">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Price/day</label>
<input type="text" class="form-control" placeholder="Enter Priceperday" name="PricePerDay" id="PricePerDay" readonly="readonly">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>ModelYear</label>
<input type="text" class="form-control" placeholder="Enter vehiclename" name="ModelYear" id="ModelYear" readonly="readonly">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">

                                                        <label>OwnerName</label>
                                                        <select class="selectpicker" data-live-search="false"
                                                            name="OwnerName" id="OwnerName">
                                                            <option value="">Select owner</option>
                                                            <?php
                                                            $OwnerName = $_POST['OwnerName'];
                                                            $qry = "SELECT id,owner_mobile,owner_email,DriverName from tblbooking where OwnerName = '$OwnerName' ";
                                                            $exe = mysqli_query($conn, $qry);
                                                            while ($row = mysqli_fetch_array($exe)) {
                                                                $owner_mobile = $row['owner_mobile'];
                                                                $owner_email = $row['owner_email'];
                                                                $DriverName = $row['DriverName'];
                                                                //$Driver_DL_No = $row['Driver_DL_No'];
                                                                $DriverMobile = $row['DriverMobile'];
                                                                $owner_email = $row['owner_email'];
                                                            ?>
                                                            <option value="<?php echo $row['id']; ?>">
                                                                <?php echo $row['OwnerName']; ?>
                                                            </option>
                                                            <?php }  ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Owner Number</label>
<input type="text" class="form-control" placeholder="Enter owner number" name="owner_mobile" id="owner_mobile" readonly="readonly">
                                                    </div>

                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label>Owneremail</label>
<input type="text" class="form-control" placeholder="Enter owneremail" name="owner_email" id="owner_email" readonly="readonly">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>DriverName</label>
<input type="text" class="form-control" placeholder="Enter Driver name" name="DriverName" id="DriverName" readonly="readonly">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>DriverNumber</label>
<input type="text" class="form-control" placeholder="Enter driver number" name="DriverMobile" id="DriverMobile" readonly="readonly">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>PickUp</label>
                                                <input type="text" class="form-control"
                                                    placeholder="enter pickup location" name="pickup" id="myInput">
                                            </div>
                                        </div>

                                        <div class=" col-sm-6">
                                            <div class="form-group">
                                                <label>DropOff</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter drop off location" name="dropoff" id="myInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>FromDate</label>
                                                <input type="date" class="form-control" id="datepicker" name="FromDate"
                                                    placeholder="From Date" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Todate</label>
                                                <input type="date" class="form-control" id="datepicker" name="ToDate"
                                                    placeholder="To Date" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Pick up time</label>
                                                <input class="form-control white_bg" id="pickuptime"
                                                    placeholder="PickUp Time" name="pickuptime" type="time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>CarFrontImage</label>


                                                <img src="images/<?php echo $row['frontimage']; ?>" style="width:20%;"
                                                    name="frontimage" id="frontimage">


                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customFile">CarBackImage</label>


                                                <img src="images/<?php echo $row['backimage']; ?>" style="width:20%;"
                                                    name="backimage" id="backimage">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="submit"
                                        style="margin-left: 332px;">Submit</button>
                                </div>
                            </div>

                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </section>
            <!--/.col (right) -->
        </div>

    </div><!-- /.container-fluid -->

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
    <link rel="stylesheet" href="jquery-ui/jquery-ui.css">
    <!-- Page specific script -->
    <script>
    $(function() {
        bsCustomFileInput.init();
    });
    </script>
    <!-- <script src="jquery-ui/jquery-ui.js">
    $(document).ready(function() {
        $("#owner_vehicle_name").autocomplete({
            source: "add-booking.php",
            minLength: 1,
            select: function(event, ui) {
                $("#owner_vehicle_name").val(ui.item.value);
                $("#userID").val(ui.item.id);
            }
        }).data("ui-autocomplete")._renderItem = function(ul, item) {
            return $("<li class='ui-autocomplete-row'></li>")
                .data("item.autocomplete", item)
                .append(item.label)
                .appendTo(ul);
        };
    });
    </script> -->
    <script>
    $(document).ready(function() {
        $('select[name="VehicleName"]').change(function() {
            // var owner_vehicle_name = $('option:selected', this).attr('owner_vehicle_name');
            // $("#owner_vehicle_name").val(owner_vehicle_name);

           
            var owner_vehicle_RCno = $('option:selected', this).attr('owner_vehicle_RCno');
            $("#owner_vehicle_RCno").val(owner_vehicle_RCno);

            var owner_vehicle_chesis_no = $('option:selected', this).attr('owner_vehicle_chesis_no');
            $("#owner_vehicle_chesis_no").val(owner_vehicle_chesis_no);

            var owner_vehicle_RCno = $('option:selected', this).attr('owner_vehicle_RCno');
            $("#owner_vehicle_RCno").val(owner_vehicle_RCno);

            var owner_vehicle_chesis_no = $('option:selected', this).attr('owner_vehicle_chesis_no');
            $("#owner_vehicle_chesis_no").val(owner_vehicle_chesis_no);

            var ModelYear = $('option:selected', this).attr('ModelYear');
            $("#ModelYear").val(ModelYear);

            var frontimage = $('option:selected', this).attr('frontimage');
            $("#frontimage").val(frontimage);

            var backimage = $('option:selected', this).attr('backimage');
            $("#backimage").val(backimage);

            // var owner_mobile = $('option:selected', this).attr('owner_mobile');
            // $("#owner_mobile").val(owner_mobile);

            // var owner_email = $('option:selected', this).attr('owner_email');
            // $("#owner_email").val(owner_email);
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
                    data:{owner_vehicle_name:owner_vehicle_name},
                    success: function(data) {
                        $('#owner_vehicle_no').val(data);
                    }
                });
        });
        $('#VehicleName').on('change', function() {
            var owner_vehicle_name = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: 'get-vehicle-RC-no.php',
                    data:{owner_vehicle_name:owner_vehicle_name},
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
                    data:{owner_vehicle_name:owner_vehicle_name},
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
                    data:{owner_vehicle_name:owner_vehicle_name},
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
                    data:{owner_vehicle_name:owner_vehicle_name},
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
                    data:{owner_vehicle_name:owner_vehicle_name},
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
                    data:{owner_vehicle_name:owner_vehicle_name},
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
                    data:{owner_vehicle_name:owner_vehicle_name},
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
                    data:{owner_vehicle_name:owner_vehicle_name},
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
                    data:{owner_vehicle_name:owner_vehicle_name},
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
                    data:{owner_vehicle_name:owner_vehicle_name},
                    success: function(data) {
                        $('#DriverMobile').val(data);
                    }
                });
        });
    });
    </script>
    <!-- <script type="text/javascript">
    $(document).ready(function() {
        $('#owner_vehicle_name').on('change', function() {
            var owner_vehicle_name = $(this).val();
            if (owner_vehicle_name) {
                $.ajax({
                    type: 'POST',
                    url: 'get-owner.php',
                    data: 'owner_vehicle_name=' + owner_vehicle_name,
                    success: function(html) {
                        $('#OwnerName').html(html);

                    }
                });
            } else {
                $('#OwnerName').html('<option value="">SelectVehicle</option>');


            }
        });
    });
    </script> -->
    <script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });

        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function(e) {
            closeAllLists(e.target);
        });
    }

    /*An array containing all the country names in the world:*/
    var countries = ["patia-Bhubaneswar", "Khandagiri", "Cuttack", "Badambadi", "barabati stadium", "lingaraj temple",
        "vanivihar", "Acaryavihar", "jaydevbihar", "CDA", "Kiit square", "CRP", "Firestation"
    ];

    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
    autocomplete(document.getElementById("myInput"), countries);
    autocomplete(document.getElementById("myInput1"), countries);
    </script>
    <script>
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    </script>
</body>

</html>