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

        <div class="container mt-5 mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card" style="margin-right: 250px;margin-top: 113px;">
                        <div class="row" style="margin-bottom: 54px;margin-top: 22px;">

                            <?php
                            while ($results = mysqli_fetch_array($raw_results)) {
                                echo "<p><h3>" . $results['Categories'] . "</h3>" . $results['SeatingCapacity'] . "</p>";
                            ?>

                                <div class="col-md-6">
                                    <div class="images p-3">
                                        <div class="text-center p-4"> <img id="main-image" src="images/<?php echo $results['frontimage']; ?>" width="250" /> </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product p-4">
                                        <input type="hidden" name="id" value=" <?php echo $last_id; ?>">
                                        <div class="mt-4 mb-3">
                                            <h6> Vehicle name : <?php echo $results['owner_vehicle_name']; ?>
                                            </h6>
                                            <h6>Price: <?php echo $results['PricePerDay']; ?></h6>

                                            <h6>Seating Capacity :
                                                <?php echo $results['SeatingCapacity']; ?></h6>
                                        </div>


                                        <div class="cart mt-4 align-items-center">
                                            <a href="book_now.php?id=<?php echo $results['id'] ?>" class="btn btn-primary" name="submit" type="submit">Book Now</a>

                                        </div>

                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-box" style="margin-top: 168px; margin-left: -234px;height:44%;background-color: #0d554e7a;">
                        <div class="butn" style="margin-top:-30px;margin-left:100px;">Your Searched Details</div>
                        <fieldset>
                            <form id="one" action="" method="post">
                                <input type="hidden" name="id" value=" <?php echo $last_id; ?>">
                                <label style="margin-top: 19px;" for="">Picking Up Location</label>
                                <input type="text" class="form-control" value="<?php echo $pickup; ?>" aria-label="Username" aria-describedby="basic-addon1" name="pickup" id="pickup">

                                <label style="margin-top: 19px;" for=""> Dropping Off Location</label>
                                <input type="text" class="form-control" value="<?php echo $dropoff; ?>" aria-label="Username" aria-describedby="basic-addon1" name="dropoff" id="dropoff">
                                <div class="row p-0 m-0">
                                    <div class="col-5 p-0">
                                        <label style="margin-top: 19px;" for="">Picking Up Date</label>
                                        <input type="DATE" class="form-control" value="<?php echo $FromDate; ?>" style="margin-left:20px;" aria-label="Recipient's username" aria-describedby="basic-addon2" name="FromDate" id="FromDate">
                                    </div>
                                    <div class="col-6 p-0">
                                        <label style="margin-top: 19px;" for="">Return Date</label>
                                        <input type="DATE" class="form-control" value="<?php echo $ToDate; ?>" style="margin-left:20px;" aria-label="Recipient's username" aria-describedby="basic-addon2" name="ToDate" id="ToDate">
                                    </div>
                                </div>

                                <label style="margin-top: 19px;" for="">Pick-up Time (Mandatory)</label>
                                <input type="time" class="form-control" value="<?php echo $Time; ?>" aria-label="Username" aria-describedby="basic-addon1" name="Time" id="Time">
                                <label style="margin-top: 19px;" for="">Select Vehicle Type</label>
                                <select class="form-control" data-live-search="false" name="Categories" id="Categories">
                                    <option value="<?php echo $Categories; ?>"><?php echo $Categories; ?></option>

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
                                <select class="form-control" placeholder="Select type" data-live-search="false" name="SeatingCapacity" id="SeatingCapacity" aria-label="Username" aria-describedby="basic-addon1">
                                    <option value="<?php echo $SeatingCapacity; ?>"><?php echo $SeatingCapacity; ?></option>
                                    <option value="<?php echo $row['SeatingCapacity'] ?>">
                                        <?php echo $row['SeatingCapacity'] ?>
                                    </option>
                                </select>

                                <!-- <center><button class="submit-btn btn" type="submit" name="submit"> Book
                                        Vehicle</button></center> -->
                                <center><a href="Search_car.php" class="submit-btn btn" type="submit" name="submit">Book
                                        Now</a></center>


                        </fieldset>
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