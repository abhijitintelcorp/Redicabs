<?php
session_start();
error_reporting(0);

include("includes/connection.php");
include("includes/header_link.php");

$id = $_GET['id'];
$sql = "SELECT * from tblbooking where id='$id'";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_assoc($query);

?>

<!doctype html>
<html lang="en">

<body class="hold-transition sidebar-mini">
    <?php
    //include("includes/header.php");
    ?>

    <div class="container" id="booknow">
        <div class="row d-flex justify-content-center">
            <div>

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <?php
                $sql = "SELECT * from tblbooking where id='$id'";
                $query = mysqli_query($conn, $sql);
                $results = mysqli_fetch_assoc($query);
                ?>
                <div class="col-md-6 book2" style="background-color: gray;">

                    <p>Customer Name: <?php echo $results['UserName']; ?>
                    </p>
                    <p>address: <span class="property_size"><?php echo $results['address']; ?></span>
                    </p>
                    <p>city: <span class="property_size"><?php echo $results['city']; ?></span>
                    </p>


                </div>
            </div>
            <div>
                <h5 class="uppercase underline">My Bookings</h5>
            </div>
            <?php
            //$id = $_GET['id'];
            //$user_id = $_GET['user_id'];
            // $query = "SELECT * FROM tblbooking where id='$id'";
            // $query_run = mysqli_query($conn, $query);
            // $rws = mysqli_fetch_array($query_run);
            // $ppdays = $rws['PricePerDay'];
            ?>
            <div class="col-md-9">
                <div class="row" id="booking11">
                    <div class="col-md-6 book1">
                        <!-- <input type="hidden" name="id" value="<?php echo $id; ?>"> -->
                        <img class="thumb" src="images/<?php echo $results['frontimage']; ?>" width="100%">

                    </div>
                    <div class="col-md-6 book2">

                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <p>Vehicle Name: <span
                                class="property_size"><?php echo $results['owner_vehicle_name']; ?></span>
                        </p>

                        <p> Vehicle Number: <span
                                class="property_size"><?php echo $results['owner_vehicle_no']; ?></span>
                        </p>

                        <p>Pickup Place: <span class="property_size"><?php echo $results['pickup']; ?></span></p>
                        <p>DropOff Place: <span class="property_size"><?php echo $results['dropoff']; ?></span></p>

                        <?php
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    // include("includes/footer.php");
    //include("includes/footerlink.php");
    ?>
</body>

</html>