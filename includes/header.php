<head>
    <title>Redicabs</title>
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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet"> -->
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>


    <style>
    * {
        padding: 0;
        margin: 0;
    }

    #hero {
        /* height: 600px; */
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url("banner 2.jpg");
        background-position: center;
        background-size: cover;
        /* position: absolute; */
        color: white;
    }

    #form-box {
        width: 480px;
        height: 750px;
        background-color: #0D4555;
        position: relative;
        overflow: hidden;
        /* padding: 5px; */
        /* margin: 6% auto; */

    }

    .button-box {
        width: 100%;
        margin: 35px auto;
        position: relative;
        padding: 0;
        background-color: #f0f0f0;
        border-radius: 30px;
    }

    .toggle-btn {
        padding: 10px 30px;
        cursor: pointer;
        background: transparent;
        border: 0;
        outline: none;
        width: 49%;
        border-radius: 30px;
        margin: 0 auto;
        position: relative;
        font-weight: 600;
        color: rgb(73, 72, 72);
    }

    #butn {
        top: 0;
        left: 0;
        position: absolute;
        width: 50%;
        border-radius: 30px;
        height: 100%;
        background-color: #19bde3;
        transition: .5s;

    }

    #hero .input-group {
        top: 100px;
        position: absolute;
        width: 100%;

        transition: .5s;
    }

    #hero .form-control1 {
        padding: 10px 8px;
        margin: 5px 0;
        border: 1px solid white;
        outline: none;
        width: 90%;
        color: #75665F;
        background: transparent;
    }

    .submit-btn {
        width: 90%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        font-weight: bold;
        outline: none;
        border: none;
        color: white;
        background-color: rgb(0, 132, 255);
        margin-top: 20px;
    }


    #one {
        left: 20px;
    }

    #two {
        left: 500px;
    }

    .header-text {
        margin-top: 50px;

    }

    #hero h1 {
        font-size: 55px;
        font-weight: 700;
    }

    #hero h2 {
        font-size: 45px;
    }

    #hero label {
        padding-top: 10px;
    }

    #hero2 img {
        cursor: pointer;
    }
    </style>

    <script>
    $(document).ready(function() {
        $("#selectState").modal('show');
    });
    </script>
</head>
<div id="preloader">
    <div class="preloader-container">
        <img src="images/preloader.gif" class="preload-gif" alt="preload-image">
    </div>
</div>
<div class="map-wapper-opacity">
    <div class="container">
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
                    <b>
                        <p style="font-size: 16px;">Call Us Now - 9776000769 </p>
                    </b>
                </div>

            </div>
            <div class="col-sm-3">
                <div class="logo-wraper">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/Redicabs.png" alt="carlogo" height="70px">
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <div id="languages" class="resister-social">

                    <div class="pull-right">
                        <!-- <a href="#">Login</a> -->
                        <button class="dropbtn" onclick="document.getElementById('id01').style.display='block'"
                            style="background-color: #1799df;">Login</button>
                        <?php
                        include("login.php");
                        ?>

                        <!-- <a href="#">Register</a> -->
                        <button class="dropbtn" onclick="document.getElementById('id02').style.display='block'"
                            style="background-color: #1799df;">Register</button>
                        <?php
                        include("register.php");
                        ?>

                    </div>
                    <!--             <div class="social-icon">
              <p>paul@intelcorpsolutions.com</p>
            </div> -->
                    <!-- <div class="dropdown">
                        <button class="dropbtn2" style="background-color: #1799df;">Select State</button>
                        <div class="dropdown-content">
                            <a href="#" id="odisha" style="padding:10px; cursor:pointer;" onclick="myOdisha()">Odisha</a>
                            <a href="#" id="2" style="padding:10px; cursor:pointer;" onclick="myAP()">Andhra Pradesh</a>
                        </div>
                    </div> -->

                </div>

            </div>
        </div>
    </div>
</div>
<!-- <div class="google-image">
    <div id="map-canvas"></div>
</div> -->