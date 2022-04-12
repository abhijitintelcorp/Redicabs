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
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>




    <script>
    $(document).ready(function() {
        $("#selectState").modal('show');
    });
    </script>

    <!-- <script>
    $(document).ready(function() {
        $("#selectState").modal('show');
    });
    </script> -->
</head>
<div id="preloader">
    <div class="preloader-container">
        <img src="images/Preloader-1.gif" class="preload-gif" alt="preload-image">
    </div>
</div>
<div class="map-wapper-opacity">
    <div class="container">
        <div class="row">

            <div class="col-sm-4">

                <div class="call-us">
                    <span class="img-circle" style="width: 28px; height: 28px;"><i class="fa fa-phone"></i></span>
                    <b>
                        <p style="font-size: 20px;"> <a href="tel:9776000769">Call Us Now - 9776000769</a></p>
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
<div class="Hero">

</div>