<?php
session_start();
include("includes/connection.php");
// error_reporting(0);
date_default_timezone_set("Asia/Kolkata");
$msg = "";
$fromDate = "";


function dateDiff($fromDate, $toDate)
{
    $date1_ts = strtotime($fromDate);
    $date2_ts = strtotime($toDate);
    $diff = $date2_ts - $date1_ts;
    return round($diff / 86400) + 1;
}

?>

<!DOCTYPE html>
<html lang="en">
<style>
#hero2 {
    padding: 20px 0px;
    margin-top: 70px;
}

#hero2 img {
    cursor: pointer;
    width: 180px;
    height: 180px;
}
</style>

<body>

    <?php
    //include("includes/register.php");
    include("show_cars.php");
    // }
    ?>
    <?php
    include("includes/header.php");
    ?>
    <!-- Booking now form wrapper html start -->
    <div class="booking-form-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-box row">
                        <div class="butn col-12" style="margin-top:-30px;margin-left:100px;">RENTAL</div>
                        <fieldset style="height: 560px;">

                            <form class="text-center" id="booking" action="Search_car.php" method="post" name="booking">
                                <label for="">Picking Up Location</label>
                                <input type="text" class="form-control" placeholder=" From (Area,Street,Landmark)"
                                    aria-label="Username" aria-describedby="basic-addon1" name="pickup" id="pickup"
                                    required>

                                <label for=""> Dropping Off Location</label>
                                <input type="text" class="form-control" placeholder="To(Area,Street, Landmark)"
                                    aria-label="Username" aria-describedby="basic-addon1" name="dropoff" id="dropoff"
                                    required>
                                <div class="row p-0 m-0">
                                    <div class="col-5 p-0">
                                        <label for="">Picking Up Date</label>
                                        <input type="date" class="form-control" placeholder="Pick-up Date"
                                            style="margin-left:20px;" name="FromDate" id="FromDate" required>
                                    </div>
                                    <div class="col-6 p-0">
                                        <label for="">Return Date</label>
                                        <input type="date" class="form-control" placeholder="Pick-up Date"
                                            style="margin-left:20px;" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2" name="ToDate" id="ToDate" required>
                                    </div>
                                </div>

                                <label for="">Pick-up Time (Mandatory)</label>
                                <input type="time" class="form-control" placeholder="Username" aria-label="Username"
                                    aria-describedby="basic-addon1" name="Time" id="Time" required>
                                <label for="">Select Vehicle Type</label>
                                <select class="form-control" data-live-search="false" name="Categories" id="Categories"
                                    required>
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

                                <label for="">Select Seater Type</label>
                                <select class="form-control" placeholder="Select type" data-live-search="false"
                                    name="SeatingCapacity" id="SeatingCapacity" aria-label="Username"
                                    aria-describedby="basic-addon1" required>
                                    <option>Select Seater type</option>
                                    <option value="<?php echo $row['SeatingCapacity'] ?>">
                                        <?php echo $row['SeatingCapacity'] ?>
                                    </option>
                                </select>

                                <!-- <center><button class="submit-btn btn" type="submit" name="submit"> Book
                                        Vehicle</button></center> -->
                                <center><button class="submit-btn btn" type="submit" name="submit">Book
                                        Now</button></center>


                            </form>

                        </fieldset>
                    </div>
                </div>

                <div class="col-md-6 text-center header-text">
                    <h2 style="color:white;">
                        Taxi & Cabs In Bhubaneswar
                    </h2>
                    <h4 style="color:white;"><b>CALL :</b></h4>
                    <h1>
                        +91 0123456789
                    </h1>
                </div>

            </div>
        </div>
    </div>
    <!-- new codes -->
    <!-- <div class="container mt-5 mb-5" id="content">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card" style="margin-right: 250px;">
                    <div class="row">

                        <?php
                        // $sql = "SELECT * from tblbooking  where Categories LIKE '%Car'";
                        // $query = mysqli_query($conn, $sql);
                        // $results = mysqli_fetch_assoc($query);
                        // $count = mysqli_num_rows($query);
                        // $cnt = 1;
                        // if ($count > 0) {
                        //     while ($results = mysqli_fetch_assoc($query)) {
                        ?>
                        <div class="col-md-6" id="divMsg">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image"
                                        src="images/<?php echo $results['frontimage']; ?>" width="350" /> </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="mt-4 mb-3">
                                    <h6> Vehicle name : <?php echo $results['owner_vehicle_name']; ?>
                                    </h6>
                                    <h6>PriceperDay: <?php echo $results['PricePerDay']; ?></h6>

                                    <h6>SeatingCapacity :
                                        <?php echo $results['SeatingCapacity']; ?></h6>
                                    <h6>ModelYear :
                                        <?php echo $results['ModelYear']; ?></h6>
                                </div>
                            </div>
                            <div class="cart mt-4 align-items-center">
                                <a href="book_now.php?id=<?php echo $$results['id'] ?>" class="btn btn-primary"
                                    name="submit" type="submit"> <?php echo $results['owner_vehicle_name']; ?>Book
                                    Now</a>

                            </div>

                        </div>

                    </div>
                    <?php
                    // }
                    //     } 
                    ?>
                </div>
            </div>
        </div>
    </div> -->
    <!-- new codes -->
    <div class="label-white2 white-lable-m" id="hero2">
        <div class="container">
            <div class="row py-4">
                <div class="car-item-wrap" style="margin-left:5%;">
                    <div class="car-type">
                        <div class="col-md-3">
                            <div class="car-wrap"><img class="private-car" src="car.png" alt="" /></div>
                            <div class="car-type-btn">
                                <a href="cars.php" type="button" class="btn car-btn btn-lg">BOOK NOW</a>
                            </div>
                        </div>
                    </div>


                    <div class="car-type">
                        <div class="col-md-3">
                            <div class="car-wrap"> <img class="mini-track-car" src="bus.png" alt="" /></div>
                            <div class="car-type-btn">
                                <a href="bus.php" class="btn car-btn btn-lg">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="car-type">
                        <div class="col-md-3">
                            <div class="car-wrap"> <img class="big-track-car" src="truck.png" alt="" /></div>
                            <div class="car-type-btn">
                                <a href="truck.php" class="btn car-btn btn-lg">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="car-type">
                        <div class="col-md-3">
                            <div class="car-wrap"> <img class="big-track-car" src="lorry.png" alt="" /></div>
                            <div class="car-type-btn">
                                <a href="Lorry.php" class="btn car-btn btn-lg">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-4">
                <div class="car-item-wrap" style="margin-left:6%">
                    <div class="car-type">
                        <div class="col-md-3">
                            <div class="car-wrap"> <img class="mini-track-car" width="100px" src="auto.png" alt="" />
                            </div>
                            <div class="car-type-btn">
                                <a href="Mini-Truck.php" class="btn car-btn btn-lg">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="car-type">
                        <div class="col-md-3">
                            <div class="car-wrap"> <img class="big-track-car" width="100px" src="crain.png" alt="" />
                            </div>
                            <div class="car-type-btn">
                                <a href="Crain.php" class="btn car-btn btn-lg">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="car-type">
                        <div class="col-md-3">
                            <div class="car-wrap"> <img class="big-track-car" src="big.png" alt="" /></div>
                            <div class="car-type-btn">
                                <a href="big_truck.php" class="btn car-btn btn-lg">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- label white html exit -->
    <!-- label yellow html start -->
    <div class="yellow-label-wrapper2" style="background-color: #1799df;">
        <div class="label-yellow stellar" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="">
            <div class="container">
                <div class="row">
                    <div class="destination">
                        <h2>Destinations You'd Love</h2>
                        <h4>Look at the wonderful places</h4>
                    </div>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="slider-btn">
                            <a class="right-cursor1" href="#carousel-example-generic" data-slide="prev"></a>
                            <a class="left-cursor1" href="#carousel-example-generic" data-slide="next"></a>
                        </div>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="slider-item">
                                            <div id="slider1" class="slider-img"
                                                style="background-image:url(images/slider/DB.png); background-size:cover;">

                                            </div>
                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2" id="slider1text">
                                                        <h4>Daring Badi</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4 id="slider11">Daring Badi</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-text2">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="slider-item ">
                                            <div id="slider2" class="slider-img"
                                                style="background-image:url(images/slider/Visakhapatnam.png); background-size:cover;">
                                            </div>

                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2" id="slider2text">
                                                        <h4>Visakhapatnam</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4 id="slider12">Visakhapatnam</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-text2">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="slider-item homepage-sllider-m">
                                            <div id="slider3" class="slider-img"
                                                style="background-image:url(images/slider/Kurnool.png); background-size:cover;">
                                            </div>

                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2" id="slider3text">
                                                        <h4>Kurnool</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4 id="slider13">Kurnool</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-text2">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="slider-item ">
                                            <div id="slider4" class="slider-img"
                                                style="background-image:url(images/slider/Amaravathi.png); background-size:cover;">
                                            </div>
                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2" id="slider4text">
                                                        <h4>Amaravathi </h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4 id="slider14">Amaravathi </h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-text2">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="slider-item">
                                            <div id="slider5" class="slider-img"
                                                style="background-image:url(images/slider/NK.png); background-size:cover;">
                                            </div>
                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2" id="slider5text">
                                                        <h4>Nandan Kanan</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-text">
                                                <div class="slider-text1" id="slider5text">
                                                    <h4 id="slider15">Nandan Kanan</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-text2">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="slider-item homepage-sllider-m">
                                            <div id="slider6" class="slider-img"
                                                style="background-image:url(images/slider/Puri.png); background-size:cover;">
                                            </div>

                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2" id="slider6text">
                                                        <h4>Puri</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-text">
                                                <div class="slider-text1" id="slider6text">
                                                    <h4 id="slider16">Puri</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-text2">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="slider-item ">
                                            <div id="slider7" class="slider-img"
                                                style="background-image:url(images/slider/Sambalpur.png); background-size:cover;">
                                            </div>
                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2" id="slider7text">
                                                        <h4>Sambalpur </h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-text">
                                                <div class="slider-text1" id="slider7text">
                                                    <h4 id="slider17">Sambalpur </h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-text2">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="slider-item ">
                                            <div id="slider8" class="slider-img"
                                                style="background-image:url(images/slider/Vijayawada.png); background-size:cover;">
                                            </div>

                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2" id="slider8text">
                                                        <h4>Vijayawada </h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4 id="slider18">Vijayawada </h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-text2">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="slider-item homepage-sllider-m">
                                            <div id="slider9" class="slider-img"
                                                style="background-image:url(images/slider/Tirupati.png); background-size:cover;">
                                            </div>
                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2" id="slider9text">
                                                        <h4>Tirupati</h4>
                                                        <p>hgghhf upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4 id="slider19">Tirupati</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-text2">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- label yellow html exit -->

    <!-- label white2 html start -->
    <div class="label-white white-lable-m">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300, repeat: true}">
                    <div class="row">
                        <div class="label-item">
                            <div class="containt-font">
                                <a href="#" class="img-circle"><img src="images/lock.png" alt="" /></a>
                            </div>
                            <div class="containt-text">
                                <h3>Secure Booking</h3>
                                <span>We ensure safest booking!</span>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio cidunt auctor a ornare odio. Sed
                                    non mauris vitae erat consequat auctor eu in elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300, repeat: true}">
                    <div class="row">
                        <div class="label-item">
                            <div class="containt-font">
                                <a href="#" class="img-circle"><img src="images/reliable.png" alt="" /></a>
                            </div>
                            <div class="containt-text">
                                <h3>Reliable Service</h3>
                                <span>We ensure safest booking!</span>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio cidunt auctor a ornare odio. Sed
                                    non mauris vitae erat consequat auctor eu in elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300, repeat: true}">
                    <div class="row">
                        <div class="label-item">
                            <div class="containt-font">
                                <a href="#" class="img-circle"><img src="images/customer.png" alt="" /></a>
                            </div>
                            <div class="containt-text">
                                <h3>Customer Service</h3>
                                <span>We ensure safest booking!</span>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio cidunt auctor a ornare odio. Sed
                                    non mauris vitae erat consequat auctor eu in elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 " data-uk-scrollspy="{cls:'uk-animation-fade', delay:300, repeat: true}">
                    <div class="row float-right">
                        <div class="label-item ">
                            <div class="containt-font">
                                <a href="#" class="img-circle"><img src="images/hidden.png" alt="" /></a>
                            </div>
                            <div class="containt-text">
                                <h3>No Hidden Charges</h3>
                                <span>We ensure safest booking!</span>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio cidunt auctor a ornare odio. Sed
                                    non mauris vitae erat consequat auctor eu in elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- label white2 html Exit -->
    <!-- ================ footer html start ================ -->
    <?php
    include("includes/footer.php");
    include("includes/footerlink.php");
    ?>
</body>

</html>
<!-- ================ footer html Exit ================ -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<script>
// $(document).ready(function() {
//     $('#fromdate').datetimepicker();

$('#SeatingCapacity1').on('change', function() {
    var SeatingCapacity1 = $(this).val();
    if (SeatingCapacity1) {
        $.ajax({
            type: 'POST',
            url: 'get-brand-name.php',
            data: {
                SeatingCapacity1: SeatingCapacity1
            },
            success: function(html) {
                console.log(html)
                $('#brand').html(html);
                $('#VehicleName').html(
                    '<option value="">Select Brand first</option>');
                // $('#brand').selectpicker('refresh');
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
            url: 'get-brand-name.php',
            data: 'owner_vehicle_brand=' + owner_vehicle_brand,
            success: function(html) {
                $('#VehicleName').html(html);
                //  $('#VehicleName').selectpicker('refresh');
            }
        });
    } else {
        $('#VehicleName').html('<option value="">Select Brand first</option>');
    }
});
</script>
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
    "vanivihar", "acharyavihar", "jaydevbihar", "CDA", "Kiit square", "CRP", "Firestation"
];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("pickup"), countries);
autocomplete(document.getElementById("dropoff"), countries);
</script>
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

<!-- Mirrored from themeskanon.com/livedemo/html/taksi/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Feb 2022 08:41:18 GMT -->

</html>
<script type="text/javascript">
$(document).ready(function() {

    $("#signup_form").validate({
        rules: {
            username: {
                required: true,
                minlength: 3,
            },
            email: {
                required: true,
                email: true,
            },
            contact: {
                required: true,
                minlength: 10,
            },
            password_id: {
                required: true,
                minlength: 8,
            },
            cpassword: {
                minlength: 8,
                equalTo: "#password_id",
            },
        },
        messages: {
            username: {
                required: "<b style='color:red'>Please enter your Full Name</b>",
                minlength: "<b style='color:red'>Full Name should be at least 3 characters</b>",
            },
            email: {
                required: "<b style='color:red'>Please enter Email Id</b>",
                email: "<b style='color:red'>The email should be in the format: abc@domain.tld</b>",
            },
            contact: {
                required: "<b style='color:red'>Please enter your Mobile Number</b>",
                number: "<b style='color:red'>Please Enter numerical values Only</b>",
            },
            password_id: {
                required: "<b style='color:red'>Please enter your Password</b>",
                minlength: "<b style='color:red'>Password should be at least 8 characters</b>",
            },
            cpassword: {
                minlength: "<b style='color:red'>Confirm Password should be at least 8 characters</b>",
                equalTo: "<b style='color:red'>Password and Confirm Password must be same</b>",
            },
        },
        submitHandler: function(form) {
            form.submit();
        },
    });
    $("#booking").validate({
        rules: {
            SeatingCapacity: {
                required: true,
            },
            brand: {
                required: true,
            },
            VehicleName: {
                required: true,
            },
            pickup: {
                required: true,
            },
            dropoff: {
                required: true,
            },
            FromDate: {
                required: true,
            },
            ToDate: {
                required: true,
            },
            Categories: {
                required: true,
            },
            SeatingCapacity: {
                required: true,
            },

        },
        messages: {

            SeatingCapacity: {
                required: "<b style='color:red'>Please select  Seating Capacity</b>",
            },
            brand: {
                required: "<b style='color:red'>Please select your Brand</b>",
            },
            VehicleName: {
                required: "<b style='color:red'>Please select your Vehicle Name</b>",
            },
            pickup: {
                required: "<b style='color:red'>Please enter your Pick Up Location</b>",
            },
            dropoff: {
                required: "<b style='color:red'>Please enter your Drop Off Location</b>",
            },
            FromDate: {
                required: "<b style='color:red'>Please enter your From Date</b>",
            },
            ToDate: {
                required: "<b style='color:red'>Please enter your To Date</b>",
            },
            Categories: {
                required: "<b style='color:red'>Please select categories</b>",
            },
            SeatingCapacity: {
                required: "<b style='color:red'>Please select seating capacity</b>",
            },
        },
        submitHandler: function(form) {
            form.submit();
        },
    });
});
</script>
<script>
$(document).ready(function() {
    let now = new Date();

    $('#datetimepicker4').val(now.getHours() + ":" + now.getMinutes());
});
</script>
<!-- Select state javascript codes -->

<script>
var map;

function initialize() {
    map = new google.maps.Map(document.getElementById('map-canvas'), {
        center: new google.maps.LatLng(48.1293954, 12.556663), //Setting Initial Position
        zoom: 10
    });
}

function newLocation(newLat, newLng) {
    map.setCenter({
        lat: newLat,
        lng: newLng
    });
}

google.maps.event.addDomListener(window, 'load', initialize);

//Setting Location with jQuery
$(document).ready(function() {
    $("#odisha").on('click', function() {
        newLocation(20.64012280220996, 83.7516135646323);
    });

    $("#2").on('click', function() {
        newLocation(14.901206653751029, 78.32374069508379);
    });

});
</script>


<script>
function myOdisha() {
    console.log("odisha");
    document.getElementById("slider1").style.backgroundImage = "url(images/slider/NK.png)";
    document.getElementById("slider1text").innerHTML = ' <h4>Nandan Kanan (Bhubneswar) </h4>';
    document.getElementById("slider12").innerText = "puri";

    document.getElementById("slider2").style.backgroundImage = "url(images/slider/Puri.png)";
    document.getElementById("slider2text").innerHTML = ' <h4> Jaganath Temple (Puri) </h4>';
    document.getElementById("slider11").innerText = "Nandan Kanan (Bhubneswar)";

    document.getElementById("slider3").style.backgroundImage = "url(images/slider/Chilika.png)";
    document.getElementById("slider3text").innerHTML = ' <h4>Cilika (Bhubneswar) </h4>';
    document.getElementById("slider13").innerText = "Cilika (Bhubneswar)";

    document.getElementById("slider4").style.backgroundImage = "url(images/slider/Konark.png)";
    document.getElementById("slider4text").innerHTML = ' <h4>Konark (Bhubaneswar) </h4>';
    document.getElementById("slider14").innerText = "Konark (Bhubaneswar) ";

    document.getElementById("slider5").style.backgroundImage = "url(images/slider/SNP.png)";
    document.getElementById("slider5text").innerHTML = ' <h4> Similipal National Park (Odisha) </h4>';
    document.getElementById("slider15").innerText = "Similipal National Park (Odisha)";

    document.getElementById("slider6").style.backgroundImage = "url(images/slider/Cuttack.png)";
    document.getElementById("slider6text").innerHTML = ' <h4>Cuttack (Odisha) </h4>';
    document.getElementById("slider16").innerText = "Cuttack (Odisha)";

    document.getElementById("slider7").style.backgroundImage = "url(images/slider/BK.png)";
    document.getElementById("slider7text").innerHTML = ' <h4>Bhitar Kanika (Odisha) </h4>';
    document.getElementById("slider17").innerText = "Bhitar Kanika  (Odisha)";

    document.getElementById("slider8").style.backgroundImage = "url(images/slider/Sambalpur.png)";
    document.getElementById("slider8text").innerHTML = ' <h4>Sambalpur (Odisha) </h4>';
    document.getElementById("slider18").innerText = "Sambalpur (Odisha)";

    document.getElementById("slider9").style.backgroundImage = "url(images/slider/DB.png)";
    document.getElementById("slider9text").innerHTML = ' <h4>Daring Badi (Odisha) </h4>';
    document.getElementById("slider19").innerText = "Daring Badi (Odisha)";

}

function myAP() {
    console.log("AP");
    document.getElementById("slider1").style.backgroundImage = "url(images/slider/ArakuValley.png)";
    document.getElementById("slider1text").innerHTML = ' <h4>Araku Valley (Andhra Pradesh) </h4>';
    document.getElementById("slider11").innerText = "Araku Valley (Andhra Pradesh) ";

    document.getElementById("slider2").style.backgroundImage = "url(images/slider/Visakhapatnam.png)";
    document.getElementById("slider2text").innerHTML = ' <h4> Visakhapatnam (Andhra Pradesh) </h4>'
    document.getElementById("slider12").innerText = "Visakhapatnam (Andhra Pradesh)";

    document.getElementById("slider3").style.backgroundImage = "url(images/slider/Amaravathi.png)";
    document.getElementById("slider3text").innerHTML = ' <h4> Amaravathi (Andhra Pradesh) </h4>'
    document.getElementById("slider13").innerText = "Amaravathi (Andhra Pradesh)";

    document.getElementById("slider4").style.backgroundImage = "url(images/slider/Gandikota.png)";
    document.getElementById("slider4text").innerHTML = ' <h4>Gandikota (Andhra Pradesh) </h4>'
    document.getElementById("slider14").innerText = "Gandikota (Andhra Pradesh)";

    document.getElementById("slider5").style.backgroundImage = "url(images/slider/Tirupati.png)";
    document.getElementById("slider5text").innerHTML = ' <h4>  Tirupati (Andhra Pradesh) </h4>'
    document.getElementById("slider15").innerText = "Tirupati (Andhra Pradesh)";

    document.getElementById("slider6").style.backgroundImage = "url(images/slider/Vijayawada.png)";
    document.getElementById("slider6text").innerHTML = ' <h4>Vijayawada (Andhra Pradesh) </h4>'
    document.getElementById("slider16").innerText = "Vijayawada (Andhra Pradesh) ";

    document.getElementById("slider7").style.backgroundImage = "url(images/slider/Anantapur.png)";
    document.getElementById("slider7text").innerHTML = ' <h4>Anantapur (Andhra Pradesh) </h4>'
    document.getElementById("slider17").innerText = "Anantapur (Andhra Pradesh) ";

    document.getElementById("slider8").style.backgroundImage = "url(images/slider/Srisailam.png)";
    document.getElementById("slider8text").innerHTML = ' <h4>Srisailam (Andhra Pradesh) </h4>'
    document.getElementById("slider18").innerText = "Srisailam (Andhra Pradesh)";

    document.getElementById("slider9").style.backgroundImage = "url(images/slider/Kurnool.png)";
    document.getElementById("slider9text").innerHTML = ' <h4>Kurnool (Andhra Pradesh) </h4>'
    document.getElementById("slider19").innerText = "Kurnool (Andhra Pradesh)";
}
</script>
<script>
$(document).ready(function() {
    $('#zctb').DataTable();
});
</script>
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
$('.btn').click(function() {
    $('#content div').hide();
    var target = '#' + $(this).data('target');
    $(target).show();
})
</script>

<script>
$(document).ready(function() {
    $('#FromDate').datepicker({
        onSelect: function(dateText, inst) {
            //Get today's date at midnight
            var today = new Date();;
            today = Date.parse(today.getMonth() + 1 + '/' + today.getDate() + '/' + today
                .getFullYear());
            //Get the selected date (also at midnight)
            var selDate = Date.parse(dateText);

            if (selDate < today) {
                //If the selected date was before today, continue to show the datepicker
                $('#FromDate').val('');
                $(inst).datepicker('show');
            }
        }
    });
});
</script>
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

    $('#FromDate').attr('min', minDate);
    $('#ToDate').attr('min', minDate);
});
</script>