<?php
session_start();
error_reporting(0);

include("includes/connection.php");
include("includes/header_link.php");
//$id = $_GET['id'];
if (isset($_POST['submit'])) {
}
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

                <!-- <input type="hidden" name="id" value="<?php echo $id; ?>"> -->
                <input type="hidden" name="UserName" value="<?php echo $UserName ?>">
                <?php
                $UserName = $_GET['UserName'];
                //$id = $_GET['id'];
                $sql = "SELECT * from tblbooking where UserName='$UserName'";
                $query = mysqli_query($conn, $sql);
                $results = mysqli_fetch_assoc($query);
                $cnt = mysqli_num_rows($query);
                if ($cnt > 0) {
                ?>
                <div class="col-md-6 book2" style="background-color: gray;">

                    <input type="hidden" name="UserName" value="<?php echo $results['$UserName']; ?>">

                    <p>CustomerName: <span class="property_size"><?php echo $results['UserName']; ?></span>
                    </p>
                    <p>address: <span class="property_size"><?php echo $results['address']; ?></span>
                    </p>
                    <p>city: <span class="property_size"><?php echo $results['city']; ?></span>
                    </p>

                    <?php }
                    ?>
                </div>
            </div>
            <div>
                <h5 class="uppercase underline">My Bookings</h5>
            </div>
            <?php
            $id = $_GET['id'];
            //$user_id = $_GET['user_id'];
            $query = "SELECT * FROM tblbooking where id= 244";
            $query_run = mysqli_query($conn, $query);
            $rws = mysqli_fetch_array($query_run);
            $ppdays = $rws['PricePerDay'];
            ?>
            <div class="col-md-9">
                <div class="row" id="booking11">
                    <div class="col-md-6 book1">
                        <input type="hidden" name="id" value="<?php echo $last_id; ?>">
                        <img class="thumb" src="images/<?php echo $rws['frontimage']; ?>" width="100%">
                        <p class="spam">TotalFare: <span
                                class="property_size"><?php echo htmlentities($tdays * $ppdays); ?></span>
                        </p>

                    </div>
                    <div class="col-md-6 book2">

                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <p>Vehicle Name: <span class="property_size"><?php echo $rws['owner_vehicle_name']; ?></span>
                        </p>

                        <p> Vehicle Number: <span class="property_size"><?php echo $rws['owner_vehicle_no']; ?></span>
                        </p>
                        <p>Price Per Day: <span
                                class="property_size"><?php echo htmlentities($ppdays = $rws['PricePerDay']); ?></span>
                        </p>

                        <p>Pickup Place: <span class="property_size"><?php echo $rows['pickup']; ?></span></p>
                        <p>DropOff Place: <span class="property_size"><?php echo $rows['dropoff']; ?></span></p>
                        <p>TotalNo of Days: <span
                                class="property_size"><?php echo htmlentities($tdays = $rows['TotalNoDays']); ?></span>
                        </p>

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