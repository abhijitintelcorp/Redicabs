<head>

  <title>Taksi</title>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-select.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/color.css" rel="stylesheet">
  <link href="css/custom-responsive.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/component.css" rel="stylesheet">
  <link href="css/default.css" rel="stylesheet">
  <!-- font awesome this template -->
  <link href="fonts/css/font-awesome.css" rel="stylesheet">
  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/w3.css">
</head>
<div id="preloader">
  <div class="preloader-container">
    <img src="images/preloader.gif" class="preload-gif" alt="preload-image">
  </div>
</div>
<div class="map-wapper-opacity">
  <div class="container">
    <div class="row">
      <div class="row">
        <div class="col-sm-4">
<!--           <div class="language-opt custom-select-box custom-select-box2 tec-domain-cat7" id="translateElements">
            <select class="selectpicker" data-live-search="false">
              <option>English</option>
              <option>Bangla</option>
              <option>Hindi</option>
            </select>
          </div> -->

          <div class="call-us">
            <span class="img-circle"><i class="fa fa-phone"></i></span>
            <p>Call Us Now - 9776000769 </p>
          </div>

        </div>
        <div class="col-sm-3">
          <div class="logo-wraper">
            <div class="logo">
              <a href="index.php">
                <img src="images/logo.png" alt="">
              </a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div id="languages" class="resister-social">

            <div>
              <!-- <a href="#">Login</a> -->
              <button onclick="document.getElementById('id01').style.display='block'">Login</button>
<?php
  include "login.php"
?>

     <!-- <a href="#">Register</a> -->
                <button onclick="document.getElementById('id02').style.display='block'">Register</button>
<?php
  include "register.php"
?>

            </div>
<!--             <div class="social-icon">
              <p>paul@intelcorpsolutions.com</p>
            </div> -->
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="google-image">
  <div id="map-canvas"></div>
</div>