<?php include 'sesstion.php'; ?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from omah.dexignzone.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2025 05:39:35 GMT -->

<head>
	<!-- Title -->
	<title>Dashboard</title>

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
	<!-- Vectormap -->
	<link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

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
            Nav header start
        ***********************************-->

		<!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->

		<!--**********************************
            Chat box End
        ***********************************-->

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

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
					<div class="me-auto d-lg-block d-block">
						<h2 class="text-black font-w600">Dashboard</h2>
						<p class="mb-0">Welcome to Omah Property Admin</p>
					</div>
					<a href="index-2.html" class="btn btn-primary rounded light">Refresh</a>
				</div>
				<div class="row">
					<div class="col-xl-6 col-xxl-6">
						<div class="row">
							<div class="col-xl-12">
								<?php
								$result = mysqli_query($conn, "select *from tbl_property_type");
								$row = mysqli_num_rows($result);



								?>
								<div class="card bg-danger property-bx text-white">
									<div class="card-body">
										<div class="media d-sm-flex d-block align-items-center">
											<span class="me-4 d-block mb-sm-0 mb-3">
												<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M31.8333 79.1667H4.16659C2.33325 79.1667 0.833252 77.6667 0.833252 75.8333V29.8333C0.833252 29 1.16659 28 1.83325 27.5L29.4999 1.66667C30.4999 0.833332 31.8333 0.499999 32.9999 0.999999C34.3333 1.66667 34.9999 2.83333 34.9999 4.16667V76C34.9999 77.6667 33.4999 79.1667 31.8333 79.1667ZM7.33325 72.6667H28.4999V11.6667L7.33325 31.3333V72.6667Z" fill="white" />
													<path d="M75.8333 79.1667H31.6666C29.8333 79.1667 28.3333 77.6667 28.3333 75.8334V36.6667C28.3333 34.8334 29.8333 33.3334 31.6666 33.3334H75.8333C77.6666 33.3334 79.1666 34.8334 79.1666 36.6667V76C79.1666 77.6667 77.6666 79.1667 75.8333 79.1667ZM34.9999 72.6667H72.6666V39.8334H34.9999V72.6667Z" fill="white" />
													<path d="M60.1665 79.1667H47.3332C45.4999 79.1667 43.9999 77.6667 43.9999 75.8334V55.5C43.9999 53.6667 45.4999 52.1667 47.3332 52.1667H60.1665C61.9999 52.1667 63.4999 53.6667 63.4999 55.5V75.8334C63.4999 77.6667 61.9999 79.1667 60.1665 79.1667ZM50.6665 72.6667H56.9999V58.8334H50.6665V72.6667Z" fill="white" />
												</svg>
											</span>
											<div class="media-body mb-sm-0 mb-3 me-5">
												<h4 class="fs-22 text-white">Total Properties</h4>
												<div class="progress mt-3 mb-2" style="height:8px;">
													<div class="progress-bar bg-white progress-animated" style="width: 86%; height:8px;" role="progressbar">
														<span class="sr-only">86% Complete</span>
													</div>
												</div>
												<span class="fs-14">431 more to break last month record</span>
											</div>
											<span class="fs-35 font-w500"><?php echo $row;?></span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-sm-12 col-md-6">
								<div class="card property-card">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body me-3">
												<h2 class="fs-28 text-black font-w600"><?php echo $row;?></h2>
												<p class="property-p mb-0 text-black font-w500">Properties for Rent</p>
												<span class="fs-13">Target 3k/month</span>
											</div>
											<div class="d-inline-block position-relative donut-chart-sale">
												<span class="donut1" data-peity='{ "fill": ["rgb(55, 209, 90)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>7/8</span>
												<small class="text-success"><?php echo $row;?></small>
												<span class="circle bgl-success"></span>
											</div>
										</div>
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
		<?php include 'footer.php'; ?>
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
	<script src="vendor/chartjs/chart.bundle.min.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.js"></script>

	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	<!-- Vectormap -->
	<script src="vendor/jqvmap/js/jquery.vmap.min.js"></script>
	<script src="vendor/jqvmap/js/jquery.vmap.world.js"></script>
	<script src="vendor/jqvmap/js/jquery.vmap.usa.js"></script>

	<!-- Chart piety plugin files -->
	<script src="vendor/peity/jquery.peity.min.js"></script>


	<script src="js/dashboard/dashboard-1.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<!-- Dashboard 1 -->

	<script>
		function carouselReview() {
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop: true,
				autoplay: true,
				margin: 0,
				nav: true,
				dots: false,
				navText: ['<i class="las la-long-arrow-alt-left"></i>', '<i class="las la-long-arrow-alt-right"></i>'],
				responsive: {
					0: {
						items: 1
					},

					480: {
						items: 1
					},

					767: {
						items: 1
					},
					1000: {
						items: 1
					}
				}
			})
			/*Custom Navigation work*/
			jQuery('#next-slide').on('click', function() {
				$('.testimonial-one').trigger('next.owl.carousel');
			});

			jQuery('#prev-slide').on('click', function() {
				$('.testimonial-one').trigger('prev.owl.carousel');
			});
			/*Custom Navigation work*/
		}

		jQuery(window).on('load', function() {
			setTimeout(function() {
				carouselReview();
			}, 1000);
		});
	</script>

</body>

<!-- Mirrored from omah.dexignzone.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2025 05:41:26 GMT -->

</html>