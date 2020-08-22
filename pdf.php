
<!doctype html>
<html lang="en">
<head>
	<title>Workshop | SIN 2017</title>
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
				<h2 class="title">Call For Proposal/Paper</h2>
				<h4><strong>10<sup>th</sup> International Conference on Security of Information and Networks</strong></h4>
				<h3><a href="index"><strong>(SIN - 2017)</strong></a></h3>
				<h4><strong>October 13<sup>th</sup> to  15<sup>th</sup>, 2017</strong></h4>
				<h4><strong>Manipal University, Jaipur</strong></h4>
				<div class="team">
					<div class="row">
						<h3>
							Proceedings by ACM International Conference Proceeding Series (ICPS)
							All accepted papers will be included into the ACM Digital Library
						</h3>
					</div>
				</div>												
			</div>
		</section>
		<section class="section topics">
			<div class="container">
				<div class="row">
					<h3 class="title">Scope &amp; Theme</h3>
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
