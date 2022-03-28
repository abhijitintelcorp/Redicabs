<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <title>Document</title>
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
        height: 650px;
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
</head>

<body>
    <div class="container-fluid" id="hero">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6 px-2" id="form-box">
                    <div class="button-box">
                        <div id="butn"></div>
                        <button type="button" class="toggle-btn" onclick="one()">OUTSTATION</button>
                        <button type="button" class="toggle-btn" onclick="two()">RENTAL</button>

                    </div>
                    <form id="one" action="" class="input-group" id="">

                        <label for="">Picking Up Location</label>
                        <input type="text" class="form-control1" placeholder=" From (Area,Street,Landmark)"
                            aria-label="Username" aria-describedby="basic-addon1" name="pickup" id="pickup">

                        <label for=""> Dropping Off Location</label>
                        <input type="text" class="form-control1" placeholder="To(Area,Street, Landmark)"
                            aria-label="Username" aria-describedby="basic-addon1" name="dropoff" id="dropoff">
                        <div class="row p-0 m-0">
                            <div class="col-5 p-0">
                                <label for="">Picking Up Date</label>
                                <input type="DATE" class="form-control1" placeholder="Pick-up Date"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2" name="FromDate"
                                    id="FromDate">
                            </div>
                            <div class="col-6 p-0">
                                <label for="">Return Date</label>
                                <input type="DATE" class="form-control1" placeholder="Pick-up Date"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2" name="ToDate"
                                    id="ToDate">
                            </div>
                        </div>



                        <label for="">Pick-up Time (Mandatory)</label>
                        <input type="date" class="form-control1" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1" name="Time" id="Time">
                        <label for="">Select Car Type</label>
                        <input type="text" class="form-control1" placeholder="Select type" aria-label="Username"
                            aria-describedby="basic-addon1">
                        <button class="submit-btn btn">Submit</button>


                    </form>
                    <form id="two" action="" class="input-group" id="">


                        <label for="">Picking Up Location</label>
                        <input type="text" class="form-control1" placeholder=" From (Area,Street,Landmark)"
                            aria-label="Username" aria-describedby="basic-addon1">


                        <div class="row p-0 m-0">
                            <div class="col-5 p-0">
                                <label for="">Picking Up Date</label>
                                <input type="DATE" class="form-control1" placeholder="Pick-up Date"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                            </div>
                            <div class="col-6 p-0">
                                <label for="">Return Date</label>
                                <input type="DATE" class="form-control1" placeholder="Pick-up Date"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                            </div>
                            <div class="col-5 p-0">
                                <label for="">Picking Up Date</label>
                                <input type="DATE" class="form-control1" placeholder="Pick-up Date"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                            </div>
                            <div class="col-6 p-0">
                                <label for="">Return Date</label>
                                <input type="DATE" class="form-control1" placeholder="Pick-up Date"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                            </div>
                        </div>

                        <button class="submit-btn">Submit</button>


                    </form>
                </div>
                <div class="col-md-6 text-center header-text">
                    <h2>
                        Taxi & Cabs In Bhubaneswar
                    </h2>
                    <h4>CALL</h4>
                    <h1>
                        +91 0123456789
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container" id="hero2">
            <div class="row py-4">
                <div class="col-md-3">
                    <img src="car.png" width="70%" alt="">

                </div>
                <div class="col-md-3"><img src="bus.png" width="70%" alt=""></div>
                <div class="col-md-3"><img src="truck.png" width="70%" alt=""></div>
                <div class="col-md-3"><img src="lorry.png" width="70%" alt=""></div>
            </div>
            <div class="row py-4">
                <div class="col"></div>
                <div class="col-md-3">
                    <img src="auto.png" width="70%" alt="">
                </div>
                <div class="col-md-3"><img src="crain.png" width="70%" alt=""></div>
                <div class="col-md-3"><img src="big.png" width="70%" alt=""></div>
                <div class="col"></div>
            </div>
        </div>
    </section>








    <script>
    var x = document.getElementById("one");
    var y = document.getElementById("two");
    var z = document.getElementById("butn");


    function two() {
        x.style.left = "-480px";
        y.style.left = "20px";
        z.style.left = "235px";
    }

    function one() {
        x.style.left = "20px";
        y.style.left = "530px";
        z.style.left = "0px";
    }
    </script>
</body>

</html>