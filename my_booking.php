<?php
session_start();
//error_reporting(0);
include("includes/connection.php");
$id = $_GET['id'];
$last_id = $_SESSION['last_id'];
$sql = "SELECT * from tblbooking where id='$last_id'";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_assoc($query);
?>

<!doctype html>
<html lang="en">
<?php
include("includes/header.php");
?>

<body class="hold-transition sidebar-mini">


    <div class="container" id="booknow">
        <div class="row d-flex justify-content-center">


            <input type="hidden" name="id" value="<?php echo $last_id; ?>">

            <?php
            $sql = "SELECT * from tblbooking where id='$last_id'";
            $query = mysqli_query($conn, $sql);
            $results = mysqli_fetch_assoc($query);
            ?>
            <div class="col-md-9">
                <div class="row" id="booking11">

                    <div class="col-md-6 book1" style="background-color: gray;">
                        <input type="hidden" name="id" value="<?php echo $last_id; ?>">

                        <p>
                        <h5>Customer Name: <span class="property_size"><?php echo $results['UserName']; ?></h5>
                        </p>
                        <p>
                        <h5>address: <span class="property_size"><?php echo $results['address']; ?></span></h5>
                        </p>
                        <p>
                        <h5>city: <span class="property_size"><?php echo $results['City']; ?></span></h5>
                        </p>
                    </div>
                </div>
            </div>

            <div>
                <h5 class="uppercase underline">My Bookings</h5>
            </div>

            <div class="col-md-9">
                <div class="row" id="booking11">
                    <div class="col-md-3 col-sm-3">
                        <?php include('includes/sidebar.php'); ?>
                        <div class="col-md-6 book1">

                            <img class="thumb" src="images/<?php echo $results['frontimage']; ?>" width="100%">

                        </div>
                        <div class="col-md-6 book2">

                            <input type="hidden" name="id" value="<?php echo $last_id; ?>">
                            <h5 class="uppercase underline">Booking Number :
                                <span class="property_size"><?php echo $results['BookingNumber']; ?>
                            </h5>
                            <p>Vehicle Name: <span
                                    class="property_size"><?php echo $results['owner_vehicle_name']; ?></span>
                            </p>

                            <p> Vehicle Number: <span
                                    class="property_size"><?php echo $results['owner_vehicle_no']; ?></span>
                            </p>

                            <p>Pickup Place: <span class="property_size"><?php echo $results['pickup']; ?></span>
                            </p>
                            <p>DropOff Place: <span class="property_size"><?php echo $results['dropoff']; ?></span>
                            </p>

                            <?php
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
include("includes/footer.php");
include("includes/footerlink.php");
?>

</html>