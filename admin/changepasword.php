<?php include 'sesstion.php';
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from omah.dexignzone.com/xhtml/add-agent.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2025 05:41:56 GMT -->

<head>
    <!-- Title -->
    <title>Add Password</title>

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
    <!-- Custom Stylesheet -->
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="vendor/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .error {
            color: red;
        }

        .page-titles .breadcrumb .breadcrumb-item+.breadcrumb-item:before {
            content: none !important;
        }
    </style>


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">








        <!--**********************************
            Header start
        ***********************************-->
        <?php include 'header.php' ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include 'sidebar.php'; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles d-flex justify-content-between">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active">Add </li>
                    </ol>

                    <!-- <a href="password" class="btn btn-sm btn-primary me-2">Back</a> -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">back</h4>
                            </div>
                            <div class="card-body">
                                <?php
                                if (isset($_POST["btnsubmit"])) {

                                    // echo "yes";

                                    // $title = $_POST['opass'];
                                    // $description = $_POST['psw'];
                                    // $noname = $_POST['cpass'];
                                    // $nodata = $_POST['ndt'];


                                    $oldpsw = $_POST["opass"];
                                    $newpsw = $_POST["psw"];

                                    $id = $_SESSION["adminid"];

                                    $result = mysqli_query($conn, "select * from tbl_admin where admin_id ='$id' and password='$oldpsw'");

                                    if (mysqli_num_rows($result) <= 0) {
                                        echo "invalid";
                                    } else {
                                        $result = mysqli_query($conn, "update tbl_admin  set password='$newpsw' where admin_id='$id'");

                                        if ($result) {
                                            // header("location:index.php");
                                            echo "<script>window.location='index.php'</script>";
                                        } else {
                                            echo "password not change";
                                        }
                                    }

                                    // echo "yes";


                                }

                                ?>
                                                <form id="loginform" method="post">

                                                <div class="form-group">
                                                <input type="password" class="form-control" id="opass" name="opass" placeholder=" old password">
                                            </div>

                                            <div class="form-group">
                                                <input type="password" class="form-control" id="psw" name="psw" placeholder=" new password">


                                            </div>

                                            <div class="form-group">
                                                <input type="password" class="form-control" id="cpass" name="cpass" placeholder="confrom  password">
                                            </div>
                                             




                                            <div class="form-group text-right">
                                                <button type="submit" name="btnsubmit" class="btn btn-primary float-end">add
                                                </button>
                                            </div>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php include 'footer.php' ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script>
    <script src="vendor/dropzone/dist/dropzone.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>


    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>

    <script>
         $(document).ready(function() {
            $("#loginform").validate({
                rules: {
                    opass: {
                        required: true,

                    },
                    psw: {
                        required: true,
                    },
                    cpass: {
                        required: true,
                    },
                    
                },

                messages: {
                    opass: {
                        required: "enter old password",
                        
                    },
                    psw: {
                        required: "new password"
                    },
                    cpass: {
                        required: " confriom new password"
                    },
                     
                }


            });
        });

    </script>



</body>


<!-- Mirrored from omah.dexignzone.com/xhtml/add-agent.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2025 05:42:00 GMT -->

</html>