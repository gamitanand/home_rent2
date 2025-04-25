<?php include 'sesstion.php';
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from omah.dexignzone.com/xhtml/add-agent.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2025 05:41:56 GMT -->

<head>
    <!-- Title -->
    <title>Edit City</title>

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
                        <li class="breadcrumb-item"><a href="dashboard.php">DashBoard</a></li>
                        <li class="breadcrumb-item active">Edit City</li>
                    </ol>

                    <a href="viewcity.php" class="btn btn-sm btn-primary me-2">Back</a>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit City</h4>
                            </div>
                            <div class="card-body">
                                <?php

                                if (isset($_POST["btnsubmit"])) {

                                    $tname = $_POST["cityname"];
                                    $stateid = $_POST["sid"];
                                    $id = $_GET["updateid"];

                                    $sql = mysqli_query($conn, "select * from type_city where city_name='$tname'") or die(mysqli_error($conn));

                                    if (mysqli_num_rows($sql) <= 0) {

                                        $result = mysqli_query($conn, "update type_city set city_name='$tname',state_id='$stateid' where city_id='$id'") or die(mysqli_error($conn));



                                      

                                        if ($result) {
                                ?>
                                            <div class="alert alert-primary alert-dismissible fade show">
                                                <svg class="alert-icon me-2" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="9 11 12 14 22 4"></polyline>
                                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                </svg>
                                                <strong>Data Update!</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                </button>
                                            </div>
                                        <?php
                                        } else {
                                        ?>


                                            <div class="alert alert-danger alert-dismissible fade show">
                                                <svg class="alert-icon me-2" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                                </svg>
                                                <strong>Data Not Update!</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                </button>
                                            </div>
                                        <?php
                                        }
                                    } else {
                                        ?>


                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg class="alert-icon me-2" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                                <line x1="15" y1="9" x2="9" y2="15"></line>
                                                <line x1="9" y1="9" x2="15" y2="15"></line>
                                            </svg>
                                            <strong>Data Already Axist!</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            </button>
                                        </div>
                                <?php
                                    }
                                }

                                ?>



                                <?php

                                if (isset($_GET["updateid"])) {
                                    $id = $_GET["updateid"];
                                    $result = mysqli_query($conn, "select * from type_city where city_id='$id'") or die(mysqli_error($conn));
                                    $row = mysqli_fetch_assoc($result);
                                }


                                ?>
                                <form method="post" id="frm">
                                    <div class="row">

                                        <div class="mb-3 col-sm-6col-lg-12">
                                            <label class="form-label">State Name </label>
                                            <select type="text" name="sid" id="sid" class="form-control" placeholder="Enter State Id">
                                                <option value="">Selecte State</option>

                                                <?php

                                                $count = 1;
                                                $result = mysqli_query($conn, "select * from table_states") or die(mysqli_error($conn));
                                                while ($row1 = mysqli_fetch_assoc($result)) {

                                                ?>

                                                    <option <?php if($row["state_id"]==$row1["state_id"]) { ?> selected <?php   } ?> value="<?php echo $row1["state_id"] ?>"><?php echo $row1["state_name"] ?></option>
                                                <?php

                                                }

                                                ?>

                                            </select>
                                        </div>

                                        <div class="mb-3 col-sm-6col-lg-12">
                                            <label class="form-label">City Name</label>
                                            <input type="text" value="<?php echo $row["city_name"] ?>" name="cityname" id="cityname" class="form-control" placeholder="Enter City Name">
                                        </div>

                                        <div class="	pt-3">
                                            <button type="submit" name="btnsubmit" class="btn btn-sm btn-primary me-2">Save</button>

                                        </div>
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

            $("#frm").validate({

                rules: {
                    cityname: {
                        required: true,
                    },
                    sid: {
                        required: true
                    }
                },
                messages: {
                    cityname: {
                        required: "Please Enter City Name"
                    },
                    sid: {
                        required: "Please Enter State Id"
                    }
                }

            })

        })
    </script>



</body>


<!-- Mirrored from omah.dexignzone.com/xhtml/add-agent.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2025 05:42:00 GMT -->

</html>