<?php
session_start();
error_reporting(0);

include("includes/connection.php");
include("includes/header_link.php");
$id = $_GET['id'];
// $query = "SELECT * from tblbooking where tblbooking.id='$id'";
// $query_run = mysqli_query($conn, $query);
// $rows = mysqli_fetch_array($query_run);

function dateDiff($FromDate, $ToDate)
{
    $date1_ts = strtotime($FromDate);
    $date2_ts = strtotime($ToDate);
    $si = 1;
    $diff = $date2_ts - $date1_ts;
    return round($diff / 86400) + 1;
}
if (isset($_POST['submit'])) {
    $pickup = htmlspecialchars($_POST['pickup']);
    $dropoff = htmlspecialchars($_POST['dropoff']);
    $FromDate = htmlspecialchars($_POST['FromDate']);
    $ToDate = htmlspecialchars($_POST['ToDate']);
    $Time = htmlspecialchars($_POST['Time']);
    $totalnodays = dateDiff($FromDate, $ToDate);
    $Categories = htmlspecialchars($_POST['Categories']);
    $SeatingCapacity = htmlspecialchars($_POST['SeatingCapacity']);
    $regdate = date("Y-m-d");
    $raw_results = mysqli_query($conn, "SELECT * FROM tblbooking WHERE Categories LIKE '%$Categories%' AND SeatingCapacity LIKE '%$SeatingCapacity%' AND Status='3'");
    $count = mysqli_num_rows($raw_results);
    $ins = "INSERT INTO `tblbooking` (pickup,dropoff,FromDate,ToDate,Time,RegDate,Categories,SeatingCapacity,TotalNoDays)
         VALUES('$pickup','$dropoff','$FromDate','$ToDate','$Time','$regdate','$Categories','$SeatingCapacity','$totalnodays')";
    $res = mysqli_query($conn, $ins);
    $last_id = mysqli_insert_id($conn);
?>
    <!doctype html>
    <html lang="en">

    <body class="hold-transition sidebar-mini">
        <?php
        include("includes/header.php");
        ?>

        <div class="container mt-2 mb-5">
            <div class="row text-dark d-flex justify-content-center">
                <div class="col-md-8">



                    <?php
                    while ($results = mysqli_fetch_array($raw_results)) {

                    ?>
                        <div class="row" style="margin-bottom: 14px;margin-top: 22px;">
                            <div class="col-lg-6 p-0 m-0 ">
                                <div class="images ">
                                    <div class="text-center"> <img id="main-image" src="images/cars/<?php echo $results['frontimage']; ?>" width="100%" /> </div>

                                </div>
                            </div>
                            <div class="col-lg-6 product">
                                <div class="">
                                    <input type="hidden" name="id" value=" <?php echo $$results['id']; ?>">
                                    <div class="mt-4 mb-3">
                                        <h3> Vehicle name : <?php echo $results['owner_vehicle_name']; ?>
                                        </h3>

                                        <h6>Vachile Type: <?php echo $results['Categories']; ?></h6>
                                        <h6>Brand Name: <?php echo $results['owner_vehicle_brand']; ?></h6>
                                        <h6>Seating Capacity : <?php echo $results['SeatingCapacity']; ?></h6>
                                        <h6> <span>Price: Rs<?php echo $results['PricePerDay']; ?>/-</span></h6>

                                    </div>


                                    <div class="cart mt-4 align-items-center">
                                        <a href="book_now.php?id=<?php echo $results['id'] ?>" class="btn btn-primary" name="submit" type="submit">Book Now</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

                </div>
                <div class="col-md-4">
                    <div class="form-box1" style="margin-top: 20px;">
                        <div class="but11" style="">Find Car</div>
                        <form id="onetwo" action="" method="post">



                            <?php

                            $id = intval($_GET['id']);
                            $query = "SELECT * from tblbooking where tblbooking.id='$id'";
                            $query_run = mysqli_query($conn, $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                $row = mysqli_fetch_array($query_run);

                            ?>
                            <?php }
                            ?>
                            <input type="hidden" name="id" value=" <?php echo $row['id']; ?>">
                            <label style="margin-top: 19px;" for="">Picking Up Location</label>
                            <input type="text" class="form-control1" placeholder=" From (Area,Street,Landmark)" aria-label="Username" aria-describedby="basic-addon1" name="pickup" id="pickup">

                            <label style="margin-top: 19px;" for=""> Dropping Off Location</label>
                            <input type="text" class="form-control1" placeholder="To(Area,Street, Landmark)" aria-label="Username" aria-describedby="basic-addon1" name="dropoff" id="dropoff">

                            <label style="margin-top: 19px;" for="">Picking Up Date</label>
                            <input type="DATE" class="form-control1" placeholder="Pick-up Date" aria-label="Recipient's username" aria-describedby="basic-addon2" name="FromDate" id="FromDate">

                            <label style="margin-top: 19px;" for="">Return Date</label>
                            <input type="DATE" class="form-control1" placeholder="Pick-up Date" aria-label="Recipient's username" aria-describedby="basic-addon2" name="ToDate" id="ToDate">


                            <label style="margin-top: 19px;" for="">Pick-up Time (Mandatory)</label>
                            <input type="time" class="form-control1" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="Time" id="Time">
                            <label style="margin-top: 19px;" for="">Select Vehicle Type</label>
                            <select class="form-control1" data-live-search="false" name="Categories" id="Categories">
                                <option>Select Categories</option>

                                <?php
                                $qry = "SELECT distinct Categories from tblbooking ";
                                $exe = mysqli_query($conn, $qry);
                                while ($row = mysqli_fetch_array($exe)) {

                                ?>
                                    <option value="<?php echo $row['Categories'] ?>">
                                        <?php echo $row['Categories'] ?>
                                    </option>
                                <?php

                                }
                                ?>
                            </select>

                            <label style="margin-top: 19px;" for="">Select Seater Type</label>
                            <select class="form-control1" placeholder="Select type" data-live-search="false" name="SeatingCapacity" id="SeatingCapacity" aria-label="Username" aria-describedby="basic-addon1">
                                <option>Select Seater type</option>
                                <option value="<?php echo $row['SeatingCapacity'] ?>">
                                    <?php echo $row['SeatingCapacity'] ?>
                                </option>
                            </select>






                    </div>
                </div>
            </div>
        </div>

        <?php
        include("includes/footer.php");
        include("includes/footerlink.php");
        ?>
    </body>

    </html>
    <script>
        $('#Categories').on('change', function() {
            var Categories = $(this).val();
            if (Categories) {
                $.ajax({
                    type: 'POST',
                    url: 'get-seat.php',
                    data: 'Categories=' + Categories,
                    success: function(html) {
                        $('#SeatingCapacity').html(html);
                    }
                });
            } else {
                $('#SeatingCapacity').html('No data Found');
            }
        });
    </script>
    <script>
        function change_image(image) {

            var container = document.getElementById("main-image");

            container.src = image.src;
        }
        document.addEventListener("DOMContentLoaded", function(event) {});
    </script>