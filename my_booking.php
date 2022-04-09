<?php
session_start();
error_reporting(0);

include("includes/connection.php");
include("includes/header_link.php");
$id = $_GET['id'];
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
                        <p>Vehicle RCNo: <span class="property_size"><?php echo $rws['owner_vehicle_RCno']; ?></span>
                        </p>
                        <p>Vehicle ChesisNo: <span
                                class="property_size"><?php echo $rws['owner_vehicle_chesis_no']; ?></span>
                        </p>
                        <p> Vehicle Number: <span class="property_size"><?php echo $rws['owner_vehicle_no']; ?></span>
                        </p>
                        <p>Price Per Day: <span
                                class="property_size"><?php echo htmlentities($ppdays = $rws['PricePerDay']); ?></span>
                        </p>
                        <hr>
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