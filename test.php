<?php
session_start();
include("includes/connection.php");
//error_reporting(0);

?>

<!doctype html>
<html lang="en">

<head>
    <style>
    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
        padding: 10px 16px;
    }

    .btn-lg {
        font-size: 18px;
        line-height: 1.33;
        border-radius: 6px;
    }

    .btn-primary {
        color: #fff;
        background-color: #428bca;
        border-color: #357ebd;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .open .dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #3276b1;
        border-color: #285e8e;
    }

    /***********************
ROUND BUTTONS
************************/
    .round {
        border-radius: 24px;
    }

    /***********************
CUSTON BTN VALUES
************************/

    .btn {
        padding: 14px 24px;
        border: 0 none;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .btn:focus,
    .btn:active:focus,
    .btn.active:focus {
        outline: 0 none;
    }

    .btn-primary {
        background: #0099cc;
        color: #ffffff;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .open>.dropdown-toggle.btn-primary {
        background: #33a6cc;
    }

    .btn-primary:active,
    .btn-primary.active {
        background: #007299;
        box-shadow: none;
    }
    </style>
    <style type="text/css">
    #sub3 {
        position: relative;
        left: 250px;
        top: 200px;
        background-color: #f1f1f1;
        width: 1580px;
        padding: 10px;
        color: black;
        border: #0000cc 2px dashed;
        display: none;
    }

    #sub4 {
        position: relative;
        left: 250px;
        top: 200px;
        background-color: #f1f1f1;
        width: 1580px;
        padding: 10px;
        color: black;
        border: #0000cc 2px dashed;
        display: none;
    }
    </style>
    <script language="JavaScript">
    function setVisibility(id1, id2) {
        if (document.getElementById('bt1').value == 'Show Box 3') {
            document.getElementById('bt1').value = 'Show Box 4';
            document.getElementById(id1).style.display = 'inline';
            document.getElementById(id2).style.display = 'none';
        } else {
            document.getElementById('bt1').value = 'Show Box 3';
            document.getElementById(id1).style.display = 'none';
            document.getElementById(id2).style.display = 'inline';
        }
    }
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <!-- <div class="container" id="booknow"> -->
    <!-- <div class="row d-flex justify-content-center">
            <div class="col-md-12"> -->
    <!-- <button type="button" class="btn btn-primary btn-lg round" onclick="cars">Cars</button><button
                        type="button" class="btn btn-primary btn-lg round">Buses</button><button type="button"
                        class="btn btn-primary btn-lg round">Lorries</button><button type="button"
                        class="btn btn-primary btn-lg round">Big Trucks</button><button type="button"
                        class="btn btn-primary btn-lg round">Trucks</button><button type="button"
                        class="btn btn-primary btn-lg round">Autos</button><button type="button"
                        class="btn btn-primary btn-lg round">Crane</button>-->
    <input type=button name=type id='bt1' value='Show Layer' onclick="setVisibility('sub3','sub4');" ;>

    <div id="sub3">Message Box 3</div>

    <br><br><br><br><br>
    <div id="sub4">Message Box 4</div>
    <br><br>
    <!-- </div>
        </div>  -->
</body>

</html>
<script>
language = "JavaScript" > function setVisibility(id, visibility) {
    document.getElementById(id).style.display = visibility;
}
</script>