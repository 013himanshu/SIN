
<!doctype html>
<html lang="en">
<head>
	<title>Call for Proposal | SIN 2017</title>
	<?php require 'php_includes/imports.php'; ?>
	<link href="assets/css/k.css" rel="stylesheet">
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
				<h2 class="title">Call For Proposal/Paper</h2>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h4> Download Call For Proposal/Paper</h4>
						<a href="assets/docs/call-for-proposal.pdf" download="SIN-2017 Call for Proposal">
							<button class="btn btn-raised btn-primary">Download
								<div class="ripple-container"></div>
							</button>
						</a>							
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
