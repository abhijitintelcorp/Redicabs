<?php
include("includes/connection.php");
error_reporting(0);
if (isset($_POST['taxi_booking'])) {
    $bookingNumber = mt_rand(100000000, 999999999);
    $UserName = htmlspecialchars($_POST['UserName']);
    $EmailId = htmlspecialchars($_POST['EmailId']);
    $ContactNo = htmlspecialchars($_POST['ContactNo']);
    $SeatingCapacity = htmlspecialchars($_POST['SeatingCapacity1']);
    $brand = htmlspecialchars($_POST['brand']);
    $VehicleName = htmlspecialchars($_POST['VehicleName']);
    $pickup = htmlspecialchars($_POST['pickup']);
    $drop_off_location = htmlspecialchars($_POST['dropoff']);
    $fromdate = htmlspecialchars($_POST['fromdate']);
    $todate = htmlspecialchars($_POST['todate']);
    $Time = htmlspecialchars($_POST['Time']);
    $insert_qry = "INSERT INTO `tblbooking`(`BookingNumber`,`UserName`,`EmailId`,`ContactNo`,`SeatingCapacity`,`owner_vehicle_brand`,`owner_vehicle_name`,`pickup`,`dropoff`,`FromDate`,`ToDate`,`Time`) VALUES( '$bookingNumber','$UserName','$EmailId','$ContactNo','$SeatingCapacity','$brand','$VehicleName','$pickup','$dropoff','$fromdate','$todate','$Time')";
    $res_query = mysqli_query($conn, $insert_qry);
    if ($res_query) {
        header("location:includes/register.php");
    } else {
        echo "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include("includes/header.php");
?>

<body>
    <!-- Booking now form wrapper html start -->
    <div class="booking-form-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="form-wrap " style="height: 680px; width: 350px;">
                            <div class="form-headr"></div>
                            <h2> <b>Book Your Transfer</b></h2>
                            <div class="form-select">
                                <form action="" method="post" name="booking" id="booking" class="form-horizontal">
                                    <div class="col-sm-12 custom-select-box tec-domain-cat2">
                                        <div class="row">
                                            <label>Seating Capacity</label>
                                            <select class="selectpicker" name="SeatingCapacity1" id="SeatingCapacity1" style="width: 305px;">
                                                <option> Select Seating Capacity</option>
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
                                    <br>
                                    <br>
                                    <div class="col-sm-12 custom-select-box tec-domain-cat2">
                                        <div class="row">
                                            <label>Select Vehicle Brand</label>
                                            <select class="selectpicker" name="brand" id="brand">
                                                <option value=""> Select Vehicle Brand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-sm-12 custom-select-box tec-domain-cat2">
                                        <div class="row">
                                            <label>Select Vehicle Brand first</label>
                                            <select class="selectpicker" name="VehicleName" id="VehicleName">
                                                <option value=""> Select Vehicle Brand first</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-sm-12 ">
                                        <div class="row">
                                            <div>
                                                <label>pick-up location</label>
                                                <input class="selectpicker custom-select-box tec-domain-cat" style="width: 305px;" name="dropoff" id="dropoff" value="<?php echo $row['dropoff']; ?>" required>
                                                </input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <div class="row">
                                            <div>
                                                <label>Drop off location</label>
                                                <input class="selectpicker custom-select-box tec-domain-cat" style="width: 305px;" name="pickup" id="pickup" value="<?php echo $row['pickup']; ?>" required>
                                                </input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <div class="row">
                                            <div>
                                                <label>From Date</label>
                                                <input class="selectpicker custom-select-box tec-domain-cat" style="width: 305px;" name="fromdate" id="fromdate" type="date" required>
                                                </input>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <div class="row">
                                            <div>
                                                <label>To Date</label>
                                                <input class="selectpicker custom-select-box tec-domain-cat" style="width: 305px;" name="todate" id="todate" type="date" required>
                                                </input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <div class="row">
                                            <div>
                                                <label>Time</label>
                                                <input class="selectpicker custom-select-box tec-domain-cat" style="width: 305px;" name="Time" id="Time" type="time" required>
                                                </input>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- 
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8 custom-select-box tec-domain-cat5">
                                                <div class="row">

                                                    <input class="form-control custom-select-box" type="date" name="date" />


                                                </div>
                                            </div>

                                            <div class="col-sm-4 custom-select-box tec-domain-cat6 time">
                                                <div class="row">
                                                    <select class="selectpicker" data-live-search="false">
                                                        <option class="time1"> 08:00</option>
                                                        <option class="time1"> 09:00</option>
                                                        <option class="time1"> 10:00</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="form-button">
                                        <button type="submit" id="taxi_booking" name="taxi_booking" class="btn form-btn btn-lg btn-block">Book Your Taxi Now</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking now form wrapper html Exit -->

    <!-- anytime-anywhere html start -->
    <div class="anytime-anywhere">
        <div class="row">
            <div class="anytime-wrap">
                <h1>ANYTIME, <br />ANYWHERE!</h1>
                <div class="anytime-text">
                    <p><i class="fa fa-custom fa-circle-o"></i>Proin gravida nibh vel velit auctor aliquet sollicitudin.</p>
                    <p><i class="fa fa-custom fa-circle-o"></i>Qnec sagittis bibendum auctor sem nibh id.</p>
                    <p><i class="fa fa-custom fa-circle-o"></i>Rit amet nibh vulputate cursus nisi elit.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- anytime-anywhere html Exit -->

    <!-- label white html start -->
    <div class="label-white2 white-lable-m">
        <div class="container">
            <div class="row">
                <div class="car-item-wrap">
                    <div class="car-type">
                        <div class="car-wrap"><img class="private-car" src="images/private-car.png" alt="" /></div>
                        <h5>Private Car</h5>
                        <div class="car-type-btn">
                            <a href="results_1.php" class="btn car-btn btn-lg">BOOK NOW</a>
                        </div>
                    </div>

                    <div class="car-type">
                        <div class="car-wrap"><img class="morotbike-car" src="images/motorbike.png" alt="" /></div>
                        <h5>Motorbike</h5>
                        <div class="car-type-btn">
                            <a href="results_1.php" class="btn car-btn btn-lg">BOOK NOW</a>
                        </div>
                    </div>

                    <div class="car-type">
                        <div class="car-wrap"> <img class="minicar-car" src="images/minicar.png" alt="" /></div>
                        <h5>Minicar</h5>
                        <div class="car-type-btn">
                            <a href="results_1.php" class="btn car-btn btn-lg">BOOK NOW</a>
                        </div>
                    </div>

                    <div class="car-type">
                        <div class="car-wrap"> <img class="mini-track-car" src="images/mini-track.png" alt="" /></div>
                        <h5>Mini Truck</h5>
                        <div class="car-type-btn">
                            <a href="results_1.php" class="btn car-btn btn-lg">BOOK NOW</a>
                        </div>
                    </div>

                    <div class="car-type">
                        <div class="car-wrap"> <img class="boat-car" src="images/boat.png" alt="" /></div>
                        <h5>Boat</h5>
                        <div class="car-type-btn">
                            <a href="results_1.php" class="btn car-btn btn-lg">BOOK NOW</a>
                        </div>
                    </div>

                    <div class="car-type">
                        <div class="car-wrap"> <img class="snow-car" src="images/snow-bike.png" alt="" /></div>
                        <h5>Snow Bike</h5>
                        <div class="car-type-btn">
                            <a href="results_1.php" class="btn car-btn btn-lg">BOOK NOW</a>
                        </div>
                    </div>

                    <div class="car-type">
                        <div class="car-wrap"> <img class="tractor-car" src="images/tractor.png" alt="" /></div>
                        <h5>Tractor</h5>
                        <div class="car-type-btn">
                            <a href="results_1.php" class="btn car-btn btn-lg">BOOK NOW</a>
                        </div>
                    </div>

                    <div class="car-type">
                        <div class="car-wrap"> <img class="vihicel-car" src="images/vihicel.png" alt="" /></div>
                        <h5>Large Vehicle</h5>
                        <div class="car-type-btn">
                            <a href="results_1.php" class="btn car-btn btn-lg">BOOK NOW</a>
                        </div>
                    </div>

                    <div class="car-type">
                        <div class="car-wrap"> <img class="morotbike-car" src="images/motorbike.png" alt="" /></div>
                        <h5>Motorbike</h5>
                        <div class="car-type-btn">
                            <a href="results_1.php" class="btn car-btn btn-lg">BOOK NOW</a>
                        </div>
                    </div>

                    <div class="car-type">
                        <div class="car-wrap"> <img class="big-track-car" src="images/big-track.png" alt="" /></div>
                        <h5>Big Truck</h5>
                        <div class="car-type-btn">
                            <a href="results_1.php" class="btn car-btn btn-lg">BOOK NOW</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- label white html exit -->

    <!-- label yellow html start -->
    <div class="yellow-label-wrapper2">
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
                                        <div class="slider-item ">
                                            <div class="slider-img"><img class="img-responsive" alt="First slide" src="images/slider/slider1.jpg" /></div>
                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2">
                                                        <h4>Orange Skies</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4>Orange Skies</h4>
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
                                            <div class="slider-img"><img class="img-responsive" alt="First slide" src="images/slider/slider2.jpg" /></div>

                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2">
                                                        <h4>Orange Skies</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4>Orange Skies</h4>
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
                                            <div class="slider-img"><img class="img-responsive" alt="First slide" src="images/slider/slider3.jpg" /></div>

                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2">
                                                        <h4>Orange Skies</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4>Orange Skies</h4>
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
                                            <div class="slider-img"><img class="img-responsive" alt="First slide" src="images/slider/slider4.jpg" /></div>
                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2">
                                                        <h4>Orange Skies</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4>Orange Skies</h4>
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
                                            <div class="slider-img"><img class="img-responsive" alt="First slide" src="images/slider/slider5.jpg" /></div>
                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2">
                                                        <h4>Orange Skies</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4>Orange Skies</h4>
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
                                            <div class="slider-img"><img class="img-responsive" alt="First slide" src="images/slider/slider6.jpg" /></div>

                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2">
                                                        <h4>Orange Skies</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4>Orange Skies</h4>
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
                                            <div class="slider-img"><img class="img-responsive" alt="First slide" src="images/slider/slider7.jpg" /></div>
                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2">
                                                        <h4>Orange Skies</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4>Orange Skies</h4>
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
                                            <div class="slider-img"><img class="img-responsive" alt="First slide" src="images/slider/slider8.jpg" /></div>

                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2">
                                                        <h4>Orange Skies</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4>Orange Skies</h4>
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
                                            <div class="slider-img"><img class="img-responsive" alt="First slide" src="images/slider/slider9.jpg" /></div>
                                            <div class="slider-text-hover">
                                                <div class="slider-hover-content"></div>
                                                <div class="Orange">
                                                    <div class="slider-hover-content2">
                                                        <h4>Orange Skies</h4>
                                                        <p>Save upto 50%</p>
                                                    </div>
                                                    <div class="slider-hover-content3">
                                                        <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-text">
                                                <div class="slider-text1">
                                                    <h4>Orange Skies</h4>
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
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio cidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
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
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio cidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
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
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio cidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
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
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio cidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
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
    <!-- ================ footer html Exit ================ -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script>
        $(document).ready(function() {

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
                            $('#VehicleName').html('<option value="">Select Brand first</option>');
                            $('#brand').selectpicker('refresh');
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
                            $('#VehicleName').selectpicker('refresh');
                        }
                    });
                } else {
                    $('#VehicleName').html('<option value="">Select Brand first</option>');
                }
            });

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
            "vanivihar", "Acaryavihar", "jaydevbihar", "CDA", "Kiit square", "CRP", "Firestation"
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
<script>
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
    });
</script>