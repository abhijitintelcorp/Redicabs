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
    //include("includes/search-header.php");
    ?>

    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <?php include('includes/sidebar.php'); ?>
            <div class="col-md-10">
                <div class="card" style="margin-right: 250px;">
                    <h1>MY BOOKING</h1>
                    <div class="row">
                        <?php
                        extract($_POST);
                        $id = $_GET['id'];
                        $sql = "SELECT * from tblbooking";
                        $query = mysqli_query($conn, $sql);
                        $rws = mysqli_fetch_assoc($query);
                        $count = mysqli_num_rows($query);
                        $cnt = 1;
                        if ($count > 0) {
                            while ($rws = mysqli_fetch_assoc($query)) {
                        ?>
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image"
                                        src="images/<?php echo $rws['frontimage']; ?>" width="250" /> </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <input type="hidden" name="id" value=" <?php echo $rws['id']; ?>">
                                <div class="mt-4 mb-3">
                                    <h6> Vehicle name : <?php echo $rws['owner_vehicle_name']; ?>
                                    </h6>
                                    <h6>PriceperDay: <?php echo $rws['PricePerDay']; ?></h6>

                                    <h6>SeatingCapacity :
                                        <?php echo $rws['SeatingCapacity']; ?></h6>
                                </div>


                                <div class="cart mt-4 align-items-center">
                                    <a href="book_now.php?id=<?php echo $rws['id'] ?>" class="btn btn-primary"
                                        name="submit" type="submit">Book Now</a>

                                </div>

                            </div>
                        </div>
                        <?php }
                        } ?>
                    </div>
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