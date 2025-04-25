<?php include 'sesstion.php'; ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from omah.dexignzone.com/xhtml/add-agent.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2025 05:41:56 GMT -->

<head>
    <!-- Title -->
    <title>Add Property Type</title>

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
                        <li class="breadcrumb-item active">Add Property Type</li>
                    </ol>
                    <a href="viewproperties.php" class="btn btn-sm btn-primary me-2">Back</a>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Property Type</h4>
                            </div>





                            <div class="card-body">
                                <?php

                                if (isset($_POST["btnsubmit"])) {
                                    $tname = $_POST["typename"];
                                    // $timg = "abc.jpg";

                                    $ext = pathinfo($_FILES["typeimg"]["name"], PATHINFO_EXTENSION);
                                    $filename = time() . random_int(1111, 9999) . "." . $ext; //78996555.png
                                    move_uploaded_file($_FILES["typeimg"]["tmp_name"], "uploads/propertytype/" . $filename);

                                    $sql = mysqli_query($conn, "select * from tbl_property_type where type_name='$tname'") or die(mysqli_error($conn));

                                    if (mysqli_num_rows($sql) <= 0) {
                                        $result = mysqli_query($conn, "insert into tbl_property_type(type_name,type_imges) values ('$tname','$filename')") or die(mysqli_error($conn));

                                        if ($result) {
                                ?>
                                            <div class="alert alert-primary alert-dismissible fade show">
                                                <svg class="alert-icon me-2" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="9 11 12 14 22 4"></polyline>
                                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                </svg>
                                                <strong>Data Inserted!</strong>
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
                                                <strong>Data Not Inserted!</strong>
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


                                <form method="post" enctype="multipart/form-data" id="frm">
                                    <div class="row">

                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">User Name</label>
                                            <input type="text" name="username" id="username" class="form-control" placeholder="office,villa,apartment">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Type Name</label>
                                            <input type="text" name="typename" id="typename" class="form-control" placeholder="office,villa,apartment">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Area Name</label>
                                            <input type="text" name="areaname" id="areaname" class="form-control" placeholder="office,villa,apartment">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Property File</label>
                                            <input type="text" name="propertyfile" id="propertyfile" class="form-control" placeholder="office,villa,apartment">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">About Propertye</label>
                                            <input type="text" name="aboutproperty" id="aboutproperty" class="form-control" placeholder="office,villa,apartment">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Build Year</label>
                                            <input type="text" name="buildyear" id="buildyear" class="form-control" placeholder="Build Year">
                                        </div>

                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Rent Amount</label>
                                            <input type="text" name="rentamount" id="rentamount" class="form-control" placeholder="Rent Amount">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Main Photo </label>
                                            <input type="file" name="mainphoto" id="mainphoto" class="form-control" placeholder="Main Photo ">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Video Url</label>
                                            <input type="url" name="url" id="url" class="form-control" placeholder="Video Url">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Term & Conditions</label>
                                            <input type="text" name="term" id="term" class="form-control" placeholder="Term & Conditions">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Is Active</label>
                                            <input type="text" name="isactive" id="isactive" class="form-control" placeholder="Is Active">
                                            <select name="isactive" class="form-control">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>

                                            </select>

                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Latitude</label>

                                            <input type="text" name="latitude" id="latitude" class="form-control" placeholder="Latitude">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <div id="us2" style="width: 550px; height: 400px;"></div>

                                        </div>

                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Longtitude</label>
                                            <input type="text" name="longtitude" id="longtitude" class="form-control" placeholder="Longtitude">

                                        </div>

                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Addrees</label>
                                            <input type="text" name="addrees" id="addrees" class="form-control" placeholder="Addrees">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Pincode</label>
                                            <input type="text" name="pincode" id="pincode" class="form-control" placeholder="Pincode">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Property Status</label>
                                            <input type="text" name="propertystatus" id="propertystatus" class="form-control" placeholder="Property Status">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Status</label>
                                            <input type="text" name="status" id="status" class="form-control" placeholder="status">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Sqft</label>
                                            <input type="text" name="sqft" id="sqft" class="form-control" placeholder="Sqft">
                                        </div>
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Overlooking</label>
                                            <input type="text" name="overlooking" id="Overlooking" class="form-control" placeholder="Overlooking">
                                        </div>
                                        <div class=" pt-3">
                                            <button type="btnsubmit" name="btnsubmit" class="btn btn-sm btn-primary me-2">Submit</button>

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
    <scripts src="js/locationpicker.jquery.min.js"></scripts>
    
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBc-id3eeLb52CPkEeCRrq_HlWGH_o05xs"
        type="text/javascript"></script>
        <script src="js/locationpicker.jquery.min.js"></script>
        <!-- <script src="https://www.jqueryscript.net/demo/Location-Picker-Place-Autocomplete-Plugin-For-Google-Maps-Location-Picker/"></script> -->


    <script>
        $('#us2').locationpicker({
            location: {
                latitude: 21.170,
                longitude: 72.831062
            },
            radius: 300,
            inputBinding: {
                latitudeInput: $('#latitude'),
                longitudeInput: $('#longtitude'),
                radiusInput: $('#us2-radius'),
                locationNameInput: $('#us2-address')
            },
            enableAutocomplete: true
        });
    </script>

    <script>
        $(document).ready(function() {

            $("#frm").validate({

                rules: {
                    username: {
                        required: true,
                    },
                    typename: {
                        required: true,
                    },
                    areaname: {
                        required: true,

                    },
                    propertyfile: {
                        required: true,
                    },
                    aboutproperty: {
                        required: true,
                    },
                    buildyear: {
                        required: true,
                    },
                    rentamount: {
                        required: true,
                    },
                    mainphoto: {
                        required: true,
                        extension: "gif|png|jpg|jpeg"
                    },
                    url: {
                        required: true,
                    },
                    term: {
                        required: true,
                    },
                    isactive: {
                        required: true,
                    },
                    latitude: {
                        required: true,
                    },
                    longtitude: {
                        required: true,
                    },
                    addrees: {
                        required: true,
                    },
                    pincode: {
                        required: true,
                    },
                    propertystatus: {
                        required: true,
                    },
                    status: {
                        required: true,
                    },
                    sqft: {
                        required: true,
                    },
                    overlooking: {
                        required: true,
                    }
                },
                messages: {
                    username: {
                        required: "Please Enter Type username"
                    },
                    typename: {
                        required: "Please Enter Type typename "
                    },
                    areaname: {
                        required: "Please Enter Type areaname "
                    },
                    propertyfile: {
                        required: "Please Enter Type propertyfile "
                    },
                    aboutproperty: {
                        required: "Please Enter Type aboutproperty "
                    },
                    buildyear: {
                        required: "Please Enter Type buildyear "
                    },
                    rentamount: {
                        required: "Please Enter Type rentamount "
                    },
                    url: {
                        required: "Please Enter Type url "
                    },
                    term: {
                        required: "Please Enter Type term "
                    },
                    isactive: {
                        required: "Please Enter Type isactive "
                    },
                    latitude: {
                        required: "Please Enter Type latitude "
                    },
                    longtitude: {
                        required: "Please Enter Type longtitude"
                    },
                    addrees: {
                        required: "Please Enter Type addrees "
                    },
                    Pincode: {
                        required: "Please Enter Type Pincode "
                    },
                    propertystatus: {
                        required: "Please Enter Type propertystatus "
                    },
                    status: {
                        required: "Please Enter Type status "
                    },
                    sqft: {
                        required: "Please Enter Type sqft"
                    },
                    overlooking: {
                        required: "Please Enter Type overlooking "
                    }

                }

            })

        })
    </script>



</body>


<!-- Mirrored from omah.dexignzone.com/xhtml/add-agent.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2025 05:42:00 GMT -->

</html>