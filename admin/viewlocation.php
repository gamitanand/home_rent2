<?php include 'sesstion.php'; ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from omah.dexignzone.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2025 05:44:01 GMT -->
<head>
    <!-- Title -->
	<title>View location</title>
 
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
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="vendor/datatables/responsive/responsive.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
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
       <?php include 'header.php'; ?>
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



        
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Warning!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are u sure you want to delete!
                    </div>
                    <div class="modal-footer">
                       <form method="post">
                        <input type="text" name="deleteid" id="deleteid">
                        <input type="text" name="deleteimg" id="deleteimg">
                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                       <button type="submit" name="delete-btn" class="btn btn-primary">Yes</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>

        <?php 
        
        if(isset($_POST["delete-btn"]))
        {
            $did = $_POST["deleteid"];
           

           

            $result = mysqli_query($conn,"delete from tbl_location_area where area_id='$did'") or die(mysqli_error($conn));
        }
        
        ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
            <div class="page-titles d-flex justify-content-between">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">DashBoard</a></li>
                        <li class="breadcrumb-item active">View property</li>
                    </ol>
                    <a href="addlocation.php" class="btn btn-sm btn-primary me-2">Add</a>
                </div>
                
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">View location</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                   <table id="example" class="display" style="min-width: 850px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>User Id</th>
                                                <th>Type Name</th>
                                                <th>Type Image </th>
                                                <th>Action </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                            $count=1;
                                            $result = mysqli_query($conn, "select * from tbl_location_area as l left join type_city as c on l.city_id=c.city_id") or die(mysqli_error($conn));
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                           <tr>
                                                <td><?php echo $count++; ?></td>
                                                <td><?php echo $row['areaname']; ?></td>
                                                <?php echo $row['city_id ']; ?>
                                                <td>
                                                    <a href="#" class="btn btn-primary">Edit</a>
                                                    <button id="btndelete" type="button" data-img="<?php echo $row['area_id']; ?>" data-id="<?php echo $row["type_id"] ?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <?php

}

?>

                                        </tbody>
                                       
                                    </table>
                                </div>
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
       <?php include 'footer.php';?>
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
	
    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables/responsive/responsive.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>

    <script>
        $(document).ready(function(){


            $(document).on("click","#btndelete",function(){

                var id = $(this).attr('data-id');
                $("#deleteid").val(id);
               
            });

        });
    </script>

</body>

<!-- Mirrored from omah.dexignzone.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2025 05:44:13 GMT -->
</html>







