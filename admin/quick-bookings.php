<?php
include("includes/config.php");
error_reporting(0);
if (isset($_POST['booking'])) {
    $bookingNumber = mt_rand(100000000, 999999999);
    $UserName = htmlspecialchars($_POST['UserName']);
    $EmailId = htmlspecialchars($_POST['EmailId']);
    $ContactNo = htmlspecialchars($_POST['ContactNo']);
    $SeatingCapacity = htmlspecialchars($_POST['SeatingCapacity']);
    $brand = htmlspecialchars($_POST['brand']);
    $VehicleName = htmlspecialchars($_POST['VehicleName']);
    $puck_up_location = htmlspecialchars($_POST['puck_up_location']);
    $drop_off_location = htmlspecialchars($_POST['drop_off_location']);
    $fromdate = htmlspecialchars($_POST['fromdate']);
    $todate = htmlspecialchars($_POST['todate']);
    $Time = htmlspecialchars($_POST['Time']);
    $insert_qry = "INSERT INTO `tblbooking`(`BookingNumber`,`UserName`,`EmailId`,`ContactNo`,`SeatingCapacity`,`owner_vehicle_brand`,`owner_vehicle_name`,`pickup`,`dropoff`,`FromDate`,`ToDate`,`Time`) VALUES( '$bookingNumber','$UserName','$EmailId','$ContactNo','$SeatingCapacity','$brand','$VehicleName','$puck_up_location','$drop_off_location','$fromdate','$todate','$Time')";
    $res_query = mysqli_query($conn, $insert_qry);
    if ($res_query) {
        header("location:new-bookings.php");
        echo "success";
    } else {
        echo "error";
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
                                    <div class="card-body d-flex justify-content-center ">
                                        <form action="" method="post" name="quick_booking" id="quick_booking" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-6 ">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Customer User Name</label>
                                                        <input type="text" style="height: 50px; width:450px;" name="UserName" id="UserName" required>

                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 ">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Customer Email Id</label>
                                                        <input type="email" style="height: 50px; width:450px;" name="EmailId" id="EmailId" required>

                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 ">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Customer Contact No</label>
                                                        <input type="number" style="height: 50px; width:450px;" name="ContactNo" id="ContactNo" required>

                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">

                                                        <label>Seating Capacity</label>
                                                        <select id="SeatingCapacity" class="selectpicker" data-live-search="false" name="SeatingCapacity" style="height: 50px; width:450px" required>
                                                            <option value=""> Select Seating Capacity</option>
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
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Vehicle Brand</label>
                                                        <select class="selectpicker" data-live-search="false" name="brand" id="brand" style="height: 50px; width:450px;" required>
                                                            <option value=""> Select Vehicle Brand</option>

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
                                                            <option value=""> Select Vehicle Name</option>
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
                                                        <label>Pick-up location</label>
                                                        <input style="height: 50px; width:450px;" name="puck_up_location" id="puck_up_location" value="<?php echo $row['puck_up_location']; ?>" required>

                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 ">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Drop-off location</label>
                                                        <input style="height: 50px; width:450px" name="drop_off_location" id="drop_off_location" value="<?php echo $row['drop_off_location']; ?>" required>

                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 ">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label> From Date</label>
                                                        <input type="date" name="fromdate" id="fromdate" style="height: 50px; width:450px" required>
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 ">

                                                    <div class="form-group">
                                                        <label>To Date</label>
                                                        <input type="date" name="todate" id="todate" style="height: 50px; width:450px" required>
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 ">

                                                    <div class="form-group">
                                                        <label>Time</label>
                                                        <input type="time" class="selectpicker" data-live-search="false" name="Time" id="Time" style="height: 50px; width:450px" required>

                                                        </input>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group padding-right:10px  mx-auto ">
                                                <button type="submit" class="btn btn-primary text-center" id="booking" name="booking">submit</button>
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
    <script src="js/valid.js"></script>

    <script src="js/additional-methods.min.js">
    </script>
    <script src="js/jquary.min.js">
    </script>
    <!-- auto city generate -->

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
        autocomplete(document.getElementById("puck_up_location"), countries);
        autocomplete(document.getElementById("drop_off_location"), countries);
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
    <!-- date validation -->

    <script>
        $(function() {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();

            var minDate = year + '-' + month + '-' + day;

            $('#fromdate').attr('min', minDate);
            $('#todate').attr('min', minDate);
        });
    </script>
</body>

</html>