          <?php
          ob_start();
          include("connection.php");
          if (isset($_POST['submit'])) {
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $contact = htmlspecialchars($_POST['contact']);
            $password = htmlspecialchars($_POST['password']);
            $insert_qry = "INSERT INTO `tblbooking` (`UserName`,`EmailId`,`password`,`ContactNo`)
    VALUES('$username','$email','$password','$contact')";
            $fn_qry = mysqli_query($conn, $insert_qry);
            if ($fn_qry) {
              header("Location:index.php");
            }
          }
          ?>
          <html>

          <head>
            <link rel="stylesheet" href="css/w3.css">
          </head>


          <body>
            <div id="id02" class="w3-modal">
              <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                <div class="w3-center"><br>
                  <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                  <img src="images/icons/note.png" alt="Avatar" style="width:10%" class="w3-circle w3-margin-top">
                </div>

                <form class="w3-container" action="" method="post" name="signup_form" id="signup_form">
                  <div class="w3-section">
                    <div>
                      <label><b>Full Name</b></label>
                      <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Full Name" name="username" id="username">
                    </div>
                    <div>
                      <label><b>Email Address</b></label>
                      <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email Address" name="email" id="email">
                    </div>
                    <div>
                      <label><b>Mobile Number</b></label>
                      <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Enter 10digit Mobile Number" name="contact" id="contact">
                    </div>
                    <div>
                      <label><b>Password</b></label>
                      <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Password" name="password" id="password">
                    </div>
                    <div>
                      <label><b>Confirm Password</b></label>
                      <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Confirm Password" name="confirm_password" id="confirm_password">
                    </div>
                    <div>
                      <input class="w3-check w3-margin-top" type="checkbox" checked="checked">Remember Me
                      <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="submit">Sign Up</button>

                    </div>
                </form>

                <center><span class=" w3-padding w3-hide-small">Already got an account?
                    <p onclick="document.getElementById('id01').style.display='block'">Login Here</p>
                  </span></center>

              </div>
            </div>
           
          </body>
          </html>

           <?php
            ob_flush();
            ?>