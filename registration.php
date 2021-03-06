<?php include('serv.php') ?>
    <!DOTYPE htlml>
    <html>

    <head>
        <title>Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/icons/favicon.png" />
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main2.css"> </head>

    <body style="background-color: #999999;">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('images/LoginReg.jpg');"></div>
            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <div class="logo">
                    <img src="images/ReBounceLog.png" width="200"></div> <span class="login100-form-title p-b-59">
						<h3>Register</h3>
					</span>
                <form action="registration" method="post">
                    <?php include('errors.php') ?>
                        <div class="wrap-input100 validate-input" data-validate="Username is required"> <span class="label-input100">Username</span>
                            <input class="input100" type="text" name="username" placeholder="Username" required> <span class="focus-input100"></span> </div>
                        <div class="wrap-input100 validate-input" data-validate="Name is required"> <span class="label-input100">Full Name</span>
                            <input class="input100" type="text" name="name" placeholder="Name..." required> <span class="focus-input100"></span> </div>
                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz"> <span class="label-input100">Email</span>
                            <input class="input100" type="text" name="email" placeholder="Email addess..." required> <span class="focus-input100"></span> </div>
                        <div class="wrap-input100 validate-input" data-validate="Phone Number is required"> <span class="label-input100">Phone Number</span>
                            <input class="input100" type="text" name="phonenumber" placeholder="Phone Number..." required> <span class="focus-input100"></span> </div>
                        <div class="wrap-input100 validate-input" data-validate="Password is required"> <span class="label-input100">Password</span>
                            <input class="input100" type="password" name="password" placeholder="*************" required> <span class="focus-input100"></span> </div>
                        <div class="wrap-input100 validate-input" data-validate="Repeat Password is required"> <span class="label-input100">Confirm Password</span>
                            <input class="input100" type="password" name="confirmpassword" placeholder="*************" required> <span class="focus-input100"></span> </div>
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" button type="submit" name="reg_user"> Submit </button>
                            </div>
                            <p>Already a User? <a href="login"><b>Log In</b></a></p>
                        </div>
                </form>
            </div>
        </div>
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <script src="js/main.js"></script>
    </body>

    </html>