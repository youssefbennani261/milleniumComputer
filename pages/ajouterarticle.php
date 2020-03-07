<!DOCTYPE html>
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Melinium Computer - Connexion  </title>
	<!-- favicon -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
	<!-- flat icon -->
	<link rel="stylesheet" href="../assets/fonts/font/flaticon.css">
	<!-- animate.css -->
	<link rel="stylesheet" href="../assets/css/animate.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
	<!-- stylesheet -->
	<link rel="stylesheet" href="../assets/css/style.css">
	<!-- responsive -->
	<link rel="stylesheet" href="../assets/css/responsive.css">


</head>

<body>

	

	<!-- Start Navigation -->
	<?php $path=$_SERVER["DOCUMENT_ROOT"]."/meliniumpc/pages/"; include($path."menuheader.html");?>
			<!-- Search Modal Start -->
			<!-- Modal -->
			<div class="modal fade" id="serchmodal" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn my-2 my-sm-0" type="submit">Search</button>
						</form>
					</div>
				</div>
			</div>
			<!-- Search Modal End -->
		</header>
	<!-- End Navigation -->

	<!-- Hero Area Start  -->
	<header class="breadcrumb">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
								<h2 class="title">
								<span style="color: #FF0050"> Melinium </span>Computer
								</h2>
								<ul class="links">
								
								
									<li>
										<a class="active" href="Connexion.php">
												Connexion
										</a>
									</li>
								</ul>
				</div>
			</div>
		</div>
	</header>
	<!-- Hero Area End -->

<!-- Contact page start -->
<section class="contact">
		<div class="container">
				<div class="row">
						<div class="col-12 text-center">
							<div class="section-title">
								<h2 >
										Login 
								</h2>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-10">
							<div class="contact-form">
									<form action="#">
											<div class="row">
												<div class="col-md-6">
												<input type="text" class="myform" placeholder=" Designation D'article">
												<input type="number" min="1" max="5" class="myform col-md-2" placeholder=" Designation D'article">
												<input type="email" class="myform" placeholder=" Votre Email">
												
											</div>
												<div class="col-md-6">
												<input type="number" class="myform" placeholder="Prix Article">
												<input type="password" class="myform" placeholder="Mot de Passe ">
												</div>
												
												<div class="col-md-6" style="margin:auto; margin-top: 50px">
													<button type="submit" class="submitbtn">
														Connexion
													</button>
												</div>
											</div>
										</form>
							</div>
						</div>
					</div>
		</div>
	</section>
<!-- Contact  page End -->

<!-- Map Start -->

<!-- Map end -->

<!-- footer area start -->

<?php $path=$_SERVER["DOCUMENT_ROOT"]."/meliniumpc/pages/"; include($path."footer.html");?>


<!-- footer area End -->











	<!-- back to top start -->
	<div class="back-to-top">
		<!-- back to top start -->
		<i class="fas fa-rocket"></i>
	</div>
	<!-- back to top end -->

	<!-- preloader area start -->
	<div class="preloader" id="preloader">
		<div class="loader loader-1">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>
		</div>
	</div>
	<!-- preloader area end -->


	<!-- jquery -->
	<script src="../assets/js/jquery.js"></script>
	<!-- popper -->
	<script src="../assets/js/popper.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/js/bootstrap.min.js"></script>
	<!-- owl carousel -->
	<script src="../assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="../assets/js/jquery.magnific-popup.js"></script>
	<!-- wow js-->
	<script src="../assets/js/wow.min.js"></script>
	<!-- way point -->
	<script src="../assets/js/waypoints.min.js"></script>
	<!-- counterup js-->
	<script src="../assets/js/jquery.counterup.min.js"></script>
	<!-- Google Map Api js -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&amp;callback=initMap"
	async defer></script>
	<!-- Google Map Activate -->
	<script src="../assets/js/goolg-map-activate.js"></script>
	<!-- main -->
	<script src="../assets/js/main.js"></script>

</body>


</html>