<!doctype html>
<html lang="en">
<head>
	<title>Honorary Committee | SIN 2017</title>
	<?php require 'php_includes/imports.php'; ?>
</head>

<body class="profile-page">
<!-- Navbar -->
<?php require 'php_includes/navbar.php'; ?>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image:url(assets/img/background/mujBg.jpg);"></div>
	<div class="main main-raised">
		<section class="section speaker text-center">
			<div class="container">
				<h2 class="title">Honorary Committee</h2>				
				<div class="team">
					<div class="row">
						<h4><u>Chief Patrons</u></h4>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="team-player">
								<img src="assets/img/committee/sandeep-sancheti.jpg" alt="Thumbnail Image" class="img-rounded">
								<h4 class="title">Prof. Sandeep Sancheti<br>
									<small class="text-muted">President, MUJ, India</small> 
								</h4>											
							</div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="team-player"> <img src="assets/img/committee/udaykumar-r-yaragatti.jpg" alt="Thumbnail Image" class="img-rounded">
								<h4 class="title">Prof. Udaykumar R Yaragatti<br>
									<small class="text-muted">Director, MNIT, India</small> 
								</h4>											
							</div>
						</div>
					</div>
					<div class="row">
						<h4><u>Patrons</u></h4>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="team-player"> <img src="assets/img/committee/n-n-sharma.jpg" alt="Thumbnail Image" class="img-rounded">
								<h4 class="title">Prof. N. N. Sharma<br>
									<small class="text-muted">Pro-President, MUJ, India</small> 
								</h4>											
							</div>
						</div>									
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="team-player"> <img src="assets/img/committee/kumkum-garg.jpg" alt="Thumbnail Image" class="img-rounded">
								<h4 class="title">Prof. Kumkum Garg<br>
									<small class="text-muted">Former Pro-Presient, MUJ, India</small> 
								</h4>											
							</div>
						</div>
					</div>
					</div>
				</div>				
			</div>
		</section>
		
		<!-- Social Links -->
		<?php require 'php_includes/social.php'; ?>

	</div>
</div>
<!-- Footer -->
<?php require 'php_includes/footer.php'; ?>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!-- Control Center for activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>
<script type="text/javascript">
	$().ready(function(){
		// the body of this function is in assets/material-kit.js
		$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
	});
</script>
</html>
