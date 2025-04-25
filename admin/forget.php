<?php

include 'connection.php'; ?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/phpmailer/src/PHPMailer.php';
require 'vendor/PHPMailer/phpmailer/src/SMTP.php';
require 'vendor/PHPMailer/phpmailer/src/Exception.php';
?>
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
                            <h4 class="text-center mb-4">Forget Password</h4>

                            <?php

                                if (isset($_POST["btnsubmit"])) {

                                    // echo "hello";
                                    $email = $_POST["email"];

                                    // echo $email;

                                    $result = mysqli_query($conn, "select * from tbl_admin where email = '$email' ") or die(mysqli_error($conn));

                                    $row = mysqli_num_rows($result);

                                    if ($row >= 1) {

                                        // echo "email";

                                        foreach ($result as $row) {

                                            $pass = $row['password'];
                                            $email = $row['email'];
                                            $username = $row['name'];


                                            // echo "<br/>";
                                            // echo $pass;
                                            // echo "<br/>";
                                            // echo $username;
                                            // echo "<br/>";
                                        }





                                        $mail = new PHPMailer;

                                        $mail->isSMTP();
                                        //$mail->SMTPDebug = 1; # 0 off, 1 client, 2 client y server
                                        $mail->CharSet  = 'UTF-8';
                                        $mail->Host     = 'smtp.gmail.com';
                                        $mail->SMTPAuth = true;
                                        $mail->SMTPSecure = 'tls';
                                        $mail->Port     = 587;
                                        $mail->Username = 'anandgamit244@gmail.com';
                                        $mail->Password = 'sirj xrvd fnlt dgod';
                                        // Sender info 
                                        $mail->setFrom('anandgamit244@gmail.com', 'Admin');
                                        $mail->addReplyTo('anandgamit244@gmail.com', 'Admin');

                                        // Add a recipient 
                                        $mail->addAddress($email);

                                        // Email subject 
                                        $mail->Subject = 'Forgot Password';

                                        // Set email format to HTML 
                                        $mail->isHTML(true);

                                        $mail->Body = "<h2> Login Details </h2>
            <p>Dear User,</p>
            <p>Username : $username</p>
            <p>Email : $email</p>
            <p>Password : $pass</p>
            <h2>Thank You - Team WeCop - To Protect and To Serve</h2>
            ";

                                        // Send email 

                                        print_r($mail);

                                        if (!$mail->send()) {
                                            echo "mail not send";
                                            print_r(error_get_last());
                                        } else {
                                            // echo "Mail Send";
                                            echo "<script>window.location='index.php'</script>";
                                        }

                                        // echo $name;
                                    } else {
                                        echo "Email Id Does not Register";
                                    }
                                }


                            ?>


                            <form id="loginform" method="post">

                                <p>Enter your email </p>
                                <div class="form-group mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email">
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