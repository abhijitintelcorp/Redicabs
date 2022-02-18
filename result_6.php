 <!DOCTYPE html>
 <html lang="en">

 <!-- Mirrored from themeskanon.com/livedemo/html/taksi/Results_6.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Feb 2022 08:41:41 GMT -->

 <?php
    include "includes/header.php"
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
                                 <form>
                                     <div class="col-sm-12 custom-select-box tec-domain-cat1">
                                         <div class="row">
                                             <select class="selectpicker" data-live-search="false">
                                                 <option>city</option>
                                                 <option>khulna</option>
                                                 <option>dhaka</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="col-sm-12 custom-select-box tec-domain-cat2">
                                         <div class="row">
                                             <select class="selectpicker" data-live-search="false">
                                                 <option>transfer type</option>
                                                 <option>transfer type 1</option>
                                                 <option>transfer type 2</option>
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
     <div class="container">
         <div class="page30-wrap">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="row">
                         <div class="item-details-wrap">
                             <div class="item-details-wrap-header"></div>
                             <div class="item-details-wrap-container">
                                 <div class="item-details-content">
                                     <div class="item-details-content2"><a href="#"><img src="images/minicar.png" alt="" /></a></div>
                                     <h2>vihicel</h2>
                                 </div>
                             </div>
                             <div class="item-details-wrap-container2">
                                 <div class="item-details-man-wrap">
                                     <div class="item-details-man3"><a href="#" class="img-circle"><img src="images/profile.png" alt=""></a></div>
                                     <div class="item-details-bag3"><a href="#" class="img-circle"><img src="images/bag2.png" alt=""></a></div>
                                 </div>
                                 <div class="clipart-wrap2">
                                     <div class="clipart3">
                                         <a href="#" class="">6</a>
                                     </div>
                                     <div class="clipart33">
                                         <a href="#" class="">4</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="service-wrap">
                                 <div class="row">
                                     <div class="col-sm-12">
                                         <div class="service-wrap1"><span>Car Type:</span></div>
                                         <div class="service-wrap2"><span>Private Car</span></div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-sm-12">
                                         <div class="service-wrap1"><span>Service:</span></div>
                                         <div class="service-wrap2"><span>Outstation</span></div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-sm-12">
                                         <div class="service-wrap1"><span>From:</span></div>
                                         <div class="service-wrap2"><span>Paris</span></div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-sm-12">
                                         <div class="service-wrap1"><span>Destination:</span></div>
                                         <div class="service-wrap2"><span>London</span></div>
                                     </div>
                                 </div>

                                 <div class="row">
                                     <div class="col-sm-12">
                                         <div class="service-wrap1"><span>Pickup Date:</span></div>
                                         <div class="service-wrap2"><span>Sunday, 09th Dec 2014</span></div>
                                     </div>
                                 </div>

                                 <div class="row">
                                     <div class="col-sm-12">
                                         <div class="service-wrap1"><span>Drop Date:</span></div>
                                         <div class="service-wrap2"><span>Thursday, 20th Dec 2014</span></div>
                                     </div>
                                 </div>
                             </div>
                             <div class="Roundtrip-Fare">
                                 <h4>Roundtrip Fare:</h4>
                                 <h3>$128.99</h3>
                                 <p>(Inclusive of All Taxes)</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-sm-8 page30-form-wrapper">
                     <div class="row Transfer">
                         <h3>Your Transfer Details</h3>
                         <h5>Give complete transfer details</h5>
                         <form class="form-horizontal">
                             <div class="form-group">
                                 <label for="inputname1" class="col-sm-4 control-label2 control-label">First Name<span>*</span></label>
                                 <div class=" col-sm-8 completing-form">
                                     <input type="text" class="form-control" id="inputname1" placeholder="First Name" required />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="inputlastname1" class="col-sm-4 control-label2 control-label ">Last Name</label>
                                 <div class=" col-sm-8 completing-form">
                                     <input type="text" class="form-control" id="inputlastname1" placeholder="Last Name" />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="inputemail1" class="col-sm-4 control-label2 control-label ">Email Address<span>*</span></label>
                                 <div class=" col-sm-8 completing-form">
                                     <input type="email" class="form-control" id="inputemail1" placeholder="Email Address*" required />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="inputnumber1" class="col-sm-4 control-label2 control-label ">Mobile Number<span>*</span></label>
                                 <div class=" col-sm-8 completing-form">
                                     <input type="text" class="form-control" id="inputnumber1" placeholder="Mobile Number" required />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="inputage1" class="col-sm-4 control-label2 control-label ">Age</label>
                                 <div class=" col-sm-8 completing-form">
                                     <input type="text" class="form-control" id="inputage1" placeholder="Age">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="inputcountry1" class="col-sm-4 control-label2 control-label">Country<span>*</span></label>
                                 <div class=" col-sm-8 completing-form">
                                     <input type="text" class="form-control" id="inputcountry1" placeholder="Country" required />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-4 control-label2 control-label"> Special note to the driver </label>
                                 <div class=" col-sm-8 completing-form">
                                     <textarea class="form-control" rows="3"></textarea>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-sm-offset-7 col-sm-5">
                                     <div class="completing-form-btnwrap"><button type="submit" class="btn form-btn  btn-block">Complete Booking</button></div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
                 <div class="col-sm-4 page30-form-wrapper">
                     <div class="row">
                         <div class="add-wrap">
                             <div class="add-img"><a href="#"><img class="img-responsive" src="images/add1.jpg" alt="" /></a></div>
                             <div class="add-text"><a href="#">
                                     <h2>Budget <br />Car Rentals<br /> Intercity<br /> Taxi Hire</h2>
                                 </a></div>
                         </div>
                         <div class="add-wrap">
                             <div class="add-img add-img2"><a href="#"><img class="img-responsive" src="images/add2.jpg" alt="" /></a></div>
                             <div class="add-text"><a href="#">
                                     <h2>I Wish I Could <br /> Drive A Different <br /> Car Everyday</h2>
                                 </a></div>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>
     <!-- label white html exit -->


     <!-- ================ footer html start ================ -->
     <?php
        include "includes/footer.php"
        ?>
     <!-- ================ footer html Exit ================ -->
     <?php
        include "includes/footerlink.php"
        ?>
 </body>

 <!-- Mirrored from themeskanon.com/livedemo/html/taksi/Results_6.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Feb 2022 08:41:44 GMT -->

 </html>