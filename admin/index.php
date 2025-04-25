<?php

session_start();

include 'connection.php'; ?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from omah.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2025 05:41:45 GMT -->

<head>
    <!-- Title -->
    <title>Login</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">

    <meta name="keywords" content="admin, dashboard, admin dashboard, admin template, template, admin panel, administration, analytics, bootstrap, hospital admin, modern, property, real estate, responsive, creative, retina ready, modern Dashboard">
    <meta name="description" content="Your Ultimate Real Estate Admin Dashboard Template. Streamline property management, analyze market trends, and boost productivity with our intuitive and feature-rich solution. Elevate your real estate business today!">

    <meta property="og:title" content="Omah - Real Estate Admin Dashboard Template">
    <meta property="og:description" content="Your Ultimate Real Estate Admin Dashboard Template. Streamline property management, analyze market trends, and boost productivity with our intuitive and feature-rich solution. Elevate your real estate business today!">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <meta name="twitter:title" content="Omah - Real Estate Admin Dashboard Template">
    <meta name="twitter:description" content="Your Ultimate Real Estate Admin Dashboard Template. Streamline property management, analyze market trends, and boost productivity with our intuitive and feature-rich solution. Elevate your real estate business today!">
    <meta name="twitter:image" content="social-image.png">
    <meta name="twitter:card" content="summary_large_image">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .error {
            color: brown;
        }
    </style>

</head>

<body>
    <div class="fix-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="card mb-0 h-auto">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <a href="index-2.html"><img class="logo-auth" src="images/logo2.png" alt="loogin page"></a>
                            </div class="login-main">
                            <h4 class="text-center mb-4">Sign in your account</h4>

                            <?php

                            if (isset($_POST["btnsubmit"])) {
                                // echo "yes";

                                $txtemail = $_POST["email"];
                                $txtpws = $_POST["password"];

                                // echo $txtemail;
                                // echo $txtpws;

                                $result = mysqli_query($conn, "select * from tbl_admin where email='$txtemail' and password='$txtpws'") or die(mysqli_error($conn));

                                if (mysqli_num_rows($result) <= 0) {
                                    // echo "Inavlid Email or Password";
                            ?>

                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg class="alert-icon me-2" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line>
                                            <line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                        <strong>Inavlid Email or Password</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                        </button>
                                    </div>
                            <?php


                                } else {


                                    $_SESSION["islogin"] = "true";
                                    header("location:dashboard.php");

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $_SESSION["adminid"] = $row["admin_id"];
                                        $_SESSION["adminname"] = $row["name"];
                                        $_SESSION["adminemail"] = $row["email"];
                                        $_SESSION["adminpassword"] = $row["mobile"];
                                    }
                                   
                                    echo "<script>window.location='dashboard.php'</script>";

                                 
                                 ?>

                                    
                                    <?php
                                }
                            }

                            ?>


                            <form id="loginform" method="post">
                            <h4>Sign in to account</h4>
                            <p>Enter your email & password to login </p>
                            <div class="form-group mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email">
                                </div>
                                <div class="form-group mb-3 mb-sm-4">
                                    <label class="form-label">Password</label>
                                    <div class="position-relative">
                                        <input type="password" id="password" name="password" class="form-control" value="Password">
                                        <span class="show-pass eye">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-row d-flex flex-wrap justify-content-end align-items-baseline mb-2">

                                    <div class="form-group ms-2">
                                        <a href="forget.php">Forgot Password?</a>

                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="btnsubmit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#loginform").validate({
                rules: {
                    email: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                  

                },
                messages: {
                        email: {
                            required: "enter your email"
                        },
                        password: {
                            required: "enter your password"
                        }
                    }
            })
        });
    </script>

</body>


<!-- Mirrored from omah.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2025 05:41:47 GMT -->

</html>