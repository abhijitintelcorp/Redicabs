<?php
include("includes/connection.php");
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
                        <div class="form-wrap ">
                            <div class="form-headr"></div>
                            <h2>Fill in the Details Below to Book Your Transfer.</h2>
                            <div class="form-select">
                                <form name="form1" action="" method="post">
                                    <div class="col-sm-12 custom-select-box tec-domain-cat1">
                                        <div class="row">
                                            <select class="selectpicker" data-live-search="false">
                                                <option>SeatingCapacity</option>
                                                <?php
                                                        $qry = "SELECT DISTINCT SeatingCapacity from tblbooking ORDER BY id ASC";
                                                        $exe = mysqli_query($conn, $qry);
                                                        while ($row = mysqli_fetch_array($exe)) {
                                                        ?>
                                                        <option value="<?php echo $row['id'] ?>">
                                                            <?php echo $row['SeatingCapacity'] ?>
                                                        </option>
                                                    <?php }  ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 custom-select-box tec-domain-cat2">
                                        <div class="row">
                                            <select class="selectpicker" data-live-search="false">
                                                <option>Vehicle Name</option>
                                                <?php
                                                        $qry = "SELECT id,owner_vehicle_name from tblbooking";
                                                        $exe = mysqli_query($conn, $qry);
                                                        while ($row = mysqli_fetch_array($exe)) {
                                                        ?>
                                                        <option value="<?php echo $row['id'] ?>">
                                                            <?php echo $row['owner_vehicle_name'] ?>
                                                        </option>
                                                    <?php }  ?>
                                            </select>
                                        </div>
                                    </div>
                                      <div class="col-sm-12 custom-select-box tec-domain-cat2">
                                        <div class="row">
                                            <select class="selectpicker" data-live-search="false">
                                                <option>Vehicle Brand</option>
                                                    <?php
                                                        $qry = "SELECT id,owner_vehicle_brand from tblbooking";
                                                        $exe = mysqli_query($conn, $qry);
                                                        while ($row = mysqli_fetch_array($exe)) {
                                                        ?>
                                                        <option value="<?php echo $row['id'] ?>">
                                                            <?php echo $row['owner_vehicle_brand'] ?>
                                                        </option>
                                                    <?php }  ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 custom-select-box tec-domain-cat3">
                                        <div class="row">
                                            <div id="panel">
                                                <select id="start" onchange="calcRoute();" class="selectpicker custom-select-box tec-domain-cat">
                                                    <option value="">puck-up location</option>
                                                    <option value="chicago, il">Chicago</option>
                                                    <option value="st louis, mo">St Louis</option>
                                                    <option value="joplin, mo">Joplin, MO</option>
                                                    <option value="oklahoma city, ok">Oklahoma City</option>
                                                    <option value="amarillo, tx">Amarillo</option>
                                                    <option value="gallup, nm">Gallup, NM</option>
                                                    <option value="flagstaff, az">Flagstaff, AZ</option>
                                                    <option value="winona, az">Winona</option>
                                                    <option value="kingman, az">Kingman</option>
                                                    <option value="barstow, ca">Barstow</option>
                                                    <option value="san bernardino, ca">San Bernardino</option>
                                                    <option value="los angeles, ca">Los Angeles</option>
                                                    <option value="khulna">Khulna, Bangladesh</option>
                                                    <option value="terokhada">Terokhada, Bangladesh</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 custom-select-box tec-domain-cat4">
                                        <div class="row">
                                            <div>
                                                <select id="end" onchange="calcRoute();" class="selectpicker custom-select-box tec-domain-cat">
                                                    <option value="">drop-off location</option>
                                                    <option value="chicago, il">Chicago</option>
                                                    <option value="st louis, mo">St Louis</option>
                                                    <option value="joplin, mo">Joplin, MO</option>
                                                    <option value="oklahoma city, ok">Oklahoma City</option>
                                                    <option value="amarillo, tx">Amarillo</option>
                                                    <option value="gallup, nm">Gallup, NM</option>
                                                    <option value="flagstaff, az">Flagstaff, AZ</option>
                                                    <option value="winona, az">Winona</option>
                                                    <option value="kingman, az">Kingman</option>
                                                    <option value="barstow, ca">Barstow</option>
                                                    <option value="san bernardino, ca">San Bernardino</option>
                                                    <option value="los angeles, ca">Los Angeles</option>
                                                    <option value="Satkhira">Satkhira, Bangladesh</option>
                                                    <option value="terokhada">Terokhada, Bangladesh</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8 custom-select-box tec-domain-cat5 day">
                                                <div class="row">
                                                    <input class="form-control custom-select-box tec-domain-cat5" type="date" name="date" />

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
                                    </div>

                                    <div class="form-button">
                                        <button type="submit" class="btn form-btn btn-lg btn-block">Book Your Taxi Now</button>
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
    ?>
    <!-- ================ footer html Exit ================ -->
    <?php
    include("includes/footerlink.php");
    ?>
</body>

<!-- Mirrored from themeskanon.com/livedemo/html/taksi/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Feb 2022 08:41:18 GMT -->

</html>
<script src="js/jquery.validate.min.js"></script>
<script src="js/validation.js">
</script>