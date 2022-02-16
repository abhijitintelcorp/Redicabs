 <!DOCTYPE html>
 <html lang="en">

 <!-- Mirrored from themeskanon.com/livedemo/html/taksi/Results_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Feb 2022 08:41:37 GMT -->

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
         <div class="page27-content-wrap">
             <div class="row">
                 <div class="col-sm-4">
                     <div class="row">
                         <div class="minicar-promo">
                             <div class="minicar-promo-carwrap">
                                 <div class="minicar-promo-cont"><a href="#"><img class="" src="images/minicar.png" alt="" /></a></div>
                                 <h3>Mini Car</h3>
                             </div>
                             <div class="minicar-promo-text">
                                 <div class="minicar-promo-text2">
                                     <div class="containt-text-man">
                                         <a href="#" class="img-circle"><img src="images/profile2.png" alt=""></a>
                                     </div>
                                     <div class="containt-text-man">
                                         <a href="#" class="img-circle"><img src="images/bag.png" alt=""></a>
                                     </div>
                                 </div>
                                 <div class="clipart-wrap">
                                     <div class="clipart27 clipart">
                                         <a href="#" class="">6</a>
                                     </div>
                                     <div class="clipart227 clipart">
                                         <a href="#" class="">4</a>
                                     </div>
                                 </div>
                                 <h2>$135.49</h2>
                                 <p>Fare Details</p>
                                 <div class="minicar-promo-text-btnwrap">
                                     <a href="Results_5.html" class="btn minicar-promo-text-btn btn-lg">BOOK NOW</a>
                                 </div>
                             </div>
                         </div>

                         <div class="minicar-promo">
                             <div class="minicar-promo-carwrap">
                                 <div class="minicar-promo-cont"><a href="#"><img class="" src="images/boat.png" alt="" /></a></div>
                                 <h3>Ninja boat</h3>
                             </div>
                             <div class="minicar-promo-text">
                                 <div class="minicar-promo-text2">
                                     <div class="containt-text-man">
                                         <a href="#" class="img-circle"><img src="images/profile2.png" alt=""></a>
                                     </div>
                                     <div class="containt-text-man">
                                         <a href="#" class="img-circle"><img src="images/bag.png" alt=""></a>
                                     </div>
                                 </div>
                                 <div class="clipart-wrap">
                                     <div class="clipart27 clipart">
                                         <a href="#" class="">6</a>
                                     </div>
                                     <div class="clipart227 clipart">
                                         <a href="#" class="">4</a>
                                     </div>
                                 </div>
                                 <h2>$135.49</h2>
                                 <p>Fare Details</p>
                                 <div class="minicar-promo-text-btnwrap">
                                     <a href="Results_5.html" class="btn minicar-promo-text-btn btn-lg">BOOK NOW</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-sm-4">
                     <div class="row">
                         <div class="minicar-promo">
                             <div class="minicar-promo-carwrap">
                                 <div class="minicar-promo-contbigtrack"><a href="#"><img class="" src="images/big-track.png" alt="" /></a></div>
                                 <h3>Large Truck</h3>
                             </div>
                             <div class="minicar-promo-text">
                                 <div class="minicar-promo-text2">
                                     <div class="containt-text-man">
                                         <a href="#" class="img-circle"><img src="images/profile2.png" alt=""></a>
                                     </div>
                                     <div class="containt-text-man">
                                         <a href="#" class="img-circle"><img src="images/bag.png" alt=""></a>
                                     </div>
                                 </div>
                                 <div class="clipart-wrap">
                                     <div class="clipart27 clipart">
                                         <a href="#" class="">6</a>
                                     </div>
                                     <div class="clipart227 clipart">
                                         <a href="#" class="">4</a>
                                     </div>
                                 </div>
                                 <h2>$135.49</h2>
                                 <p>Fare Details</p>
                                 <div class="minicar-promo-text-btnwrap">
                                     <a href="Results_5.html" class="btn minicar-promo-text-btn btn-lg">BOOK NOW</a>
                                 </div>
                             </div>
                         </div>

                         <div class="minicar-promo">
                             <div class="minicar-promo-carwrap">
                                 <div class="minicar-promo-conttractor"><a href="#"><img class="" src="images/tractor.png" alt="" /></a></div>
                                 <h3>Tractor</h3>
                             </div>
                             <div class="minicar-promo-text">
                                 <div class="minicar-promo-text2">
                                     <div class="containt-text-man">
                                         <a href="#" class="img-circle"><img src="images/profile2.png" alt=""></a>
                                     </div>
                                     <div class="containt-text-man">
                                         <a href="#" class="img-circle"><img src="images/bag.png" alt=""></a>
                                     </div>
                                 </div>
                                 <div class="clipart-wrap">
                                     <div class="clipart27 clipart">
                                         <a href="#" class="">6</a>
                                     </div>
                                     <div class="clipart227 clipart">
                                         <a href="#" class="">4</a>
                                     </div>
                                 </div>
                                 <h2>$135.49</h2>
                                 <p>Fare Details</p>
                                 <div class="minicar-promo-text-btnwrap">
                                     <a href="Results_5.html" class="btn minicar-promo-text-btn btn-lg">BOOK NOW</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-sm-4 custom-col-sm4">
                     <div class="row">
                         <div class="minicar-promo">
                             <div class="minicar-promo-carwrap">
                                 <div class="minicar-promo-cont-vihicel"><a href="#"><img class="" src="images/vihicel.png" alt="" /></a></div>
                                 <h3>Small Truck</h3>
                             </div>
                             <div class="minicar-promo-text">
                                 <div class="minicar-promo-text2">
                                     <div class="containt-text-man">
                                         <a href="#" class="img-circle"><img src="images/profile2.png" alt=""></a>
                                     </div>
                                     <div class="containt-text-man">
                                         <a href="#" class="img-circle"><img src="images/bag.png" alt=""></a>
                                     </div>
                                 </div>
                                 <div class="clipart-wrap">
                                     <div class="clipart27 clipart">
                                         <a href="#" class="">6</a>
                                     </div>
                                     <div class="clipart227 clipart">
                                         <a href="#" class="">4</a>
                                     </div>
                                 </div>
                                 <h2>$135.49</h2>
                                 <p>Fare Details</p>
                                 <div class="minicar-promo-text-btnwrap">
                                     <a href="Results_5.html" class="btn minicar-promo-text-btn btn-lg">BOOK NOW</a>
                                 </div>
                             </div>
                         </div>

                         <div class="minicar-promo minicar-promo9">
                             <div class="minicar-promo-carwrap">
                                 <div class="minicar-promo-contmotorbiak"><a href="#"><img class="" src="images/motorbiak.png" alt="" /></a></div>
                                 <h3>Motor Bike</h3>
                             </div>
                             <div class="minicar-promo-text">
                                 <div class="minicar-promo-text2">
                                     <div class="containt-text-man">
                                         <a href="#" class="img-circle"><img src="images/profile2.png" alt=""></a>
                                     </div>
                                     <div class="containt-text-man">
                                         <a href="#" class="img-circle"><img src="images/bag.png" alt=""></a>
                                     </div>
                                 </div>
                                 <div class="clipart-wrap">
                                     <div class="clipart27 clipart">
                                         <a href="#" class="">6</a>
                                     </div>
                                     <div class="clipart227 clipart">
                                         <a href="#" class="">4</a>
                                     </div>
                                 </div>
                                 <h2>$135.49</h2>
                                 <p>Fare Details</p>
                                 <div class="minicar-promo-text-btnwrap">
                                     <a href="Results_5.html" class="btn minicar-promo-text-btn btn-lg">BOOK NOW</a>
                                 </div>
                             </div>
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

 <!-- Mirrored from themeskanon.com/livedemo/html/taksi/Results_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Feb 2022 08:41:38 GMT -->

 </html>