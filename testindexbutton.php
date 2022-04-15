<?php
session_start();
include("includes/connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<body class="hold-transition sidebar-mini">

    <div class="container">
        <h3>Available Vehicles</h3>
        <ul class="nav nav-pills">

            <li><a href="">Cars</a></li>
            <li><a href="">Truck</a></li>
            <li><a href="">Lorry</a></li>
        </ul>
        <div id="menu1" class="tab-pane fade">
            <div class="carousel slide" data-ride="carousel" id="multi_item">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <?php

                            $sql = "SELECT * from tblbooking  where Categories='Car' and Status=3 ";
                            $query = mysqli_query($conn, $sql);

                            while ($results = mysqli_fetch_assoc($query)) {


                            ?>
                            <div class="row" style="margin-bottom: 14px;margin-top: 22px; border:1px solid #0d4555;">
                                <div class="col-lg-6">
                                    <div class="text-center"> <img src="images/<?php echo $results['frontimage']; ?>"
                                            width="100%" height="80%" style="margin-top:30px;" /> </div>
                                </div>
                                <div class="col-lg-6 product">

                                    <input type="hidden" name="id" value=" <?php echo $last_id; ?>">
                                    <div class="mt-4 mb-3">
                                        <h3> Vehicle name : <?php echo $results['owner_vehicle_name']; ?>
                                        </h3>

                                        <h6>Vehicle Type: <?php echo $results['Categories']; ?></h6>
                                        <h6>Brand Name: <?php echo $results['owner_vehicle_brand']; ?></h6>
                                        <h6>Seating Capacity : <?php echo $results['SeatingCapacity']; ?></h6>
                                        <h6> <span>Price: Rs<?php echo $results['PricePerDay']; ?>/-</span></h6>

                                    </div>

                                    <div class="cart mt-4 align-items-center">
                                        <a href="index.php" class="btn btn-primary" name="submit" type="submit">Book
                                            Now</a>

                                    </div>

                                </div>

                            </div>
                            <div class="col-sm"><img class="d-block w-100"
                                    src="//www.tutsmake.com/wp-content/uploads/2019/03/install-sublime-on-ubunut.jpeg"
                                    alt="1 slide"></div>
                            <div class="col-sm"><img class="d-block w-100"
                                    src="//www.tutsmake.com/wp-content/uploads/2019/03/boostrap-datetimepicker.jpeg"
                                    alt="2 slide"></div>
                            <div class="col-sm"><img class="d-block w-100"
                                    src="//www.tutsmake.com/wp-content/uploads/2019/03/laravel-razorpay-payment.jpeg"
                                    alt="3 slide"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm"><img class="d-block w-100"
                                    src="//www.tutsmake.com/wp-content/uploads/2019/03/install-sublime-on-ubunut.jpeg"
                                    alt="4 slide"></div>
                            <div class="col-sm"><img class="d-block w-100"
                                    src="//www.tutsmake.com/wp-content/uploads/2019/03/boostrap-datetimepicker.jpeg"
                                    alt="5 slide"></div>
                            <div class="col-sm"><img class="d-block w-100"
                                    src="//www.tutsmake.com/wp-content/uploads/2019/03/laravel-razorpay-payment.jpeg"
                                    alt="6 slide"></div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#multi_item" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#multi_item" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

</body>
<? } ?>

</html>