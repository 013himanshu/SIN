
<!doctype html>
<html lang="en">
<head>
	<title>Conference Registration Fee | SIN 2017</title>
	<?php require 'php_includes/imports.php'; ?>
	<link href="assets/css/k.css" rel="stylesheet">
	<style type="text/css">
		.rwd-table {
			margin: auto;
		}
		th, td {
			text-align: center !important;
			vertical-align: middle !important;
		}
	.auto-style1 {
	font-size: x-large;
	font-weight: normal;
	font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
}
	</style>
</head>

<body class="profile-page">
<!-- Navbar -->
<?php require 'php_includes/navbar.php'; ?>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image:url(assets/img/background/mujBg.jpg);"></div>
	<div class="main main-raised">								
		<section class="section">
			<div class="container">
				<div class="row">										
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="rwd-table table-bordered">
							<tr>
								<th rowspan="2" colspan="2">Category</th>
								<th colspan="2">Registration Fee</th>
							</tr>
							<tr>
								<th>INDIAN</th>
								<th>INTERNATIONAL</th>
							</tr>
							<tr>
								<th colspan="2">Author</th>
								<td>8000 INR</td>
								<td>350 USD</td>
							</tr>
							<tr>
								<th rowspan="2">Delegate</th>
								<td>Student / Research Scholar</td>
								<td>3500 INR</td>
								<td>250 USD</td>
							</tr>
							<tr>
								<td>Academician / Industry</td>
								<td>4500 INR</td>
								<td>300 USD</td>
							</tr>
						</table><br><br>
						<h4 style="text-align: center;">
						<span class="auto-style1"><strong>Please click here for
						</strong></span>
						<a href="https://goo.gl/forms/YY8usGfAtm8gBBLx2">
						<span class="auto-style1"><strong>Registration</strong></span></a></h4>
					</div>
				</div><br>
				<div class="row">
					<h2 class="title text-center">For International Transfer</h2>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="rwd-table table-bordered">
							<tr>
								<th>Particulars</th>
								<th>Details</th>
							</tr>
							<tr>
								<td>Currency</td>
								<td>USD</td>
							</tr>
							<tr>
								<td>Ultimate Beneficiary Name</td>
								<td>Manipal University Jaipur Escrow Account</td>
							</tr>
							<tr>
								<td>Ultimate Beneficiary Bank Name</td>
								<td>IDFC Bank Ltd</td>
							</tr>
							<tr>
								<td>Ultimate Beneficiary Bank Account No.</td>
								<td>10000113667</td>
							</tr>
							<tr>
								<td>Ultimate Beneficiary Bank Address</td>
								<td>IDFC Bank Ltd , Bangalore, India</td>
							</tr>
							<tr>
								<td>Ultimate Beneficiary Bank Swift Code ( IDFC Bank Ltd)</td>
								<td>IDFBINBBMUM</td>
							</tr>
							<tr>
								<td>Intermediate Bank Name</td>
								<td>Wells Fargo Bank NA</td>
							</tr>
							<tr>
								<td>Intermediate Bank  Swift Code</td>
								<td>PNBPUS3NNYC</td>
							</tr>
							<tr>
								<td>Intermediate Bank Account Number</td>
								<td>2000293914147</td>
							</tr>
							<tr>
								<td>Intermediate Bank Address</td>
								<td>New York International Branch, New York NY, US</td>
							</tr>
						</table>
					</div>
				</div><br><br>
				<div class="row">
					<h2 class="title text-center">Bank details for domestic transfer</h2>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="rwd-table table-bordered">
							<tr>
								<th>Particulars</th>
								<th>Details</th>
							</tr>
							<tr>
								<td>Bank Name</td>
								<td>IDFC Bank Limited</td>
							</tr>
							<tr>
								<td>Bank Account No.</td>
								<td>10000113667</td>
							</tr>
							<tr>
								<td>Branch Address</td>
								<td>Residency Road, Bangalore</td>
							</tr>
							<tr>
								<td>IFSC Code</td>
								<td>IDFB0080151</td>
							</tr>
							<tr>
								<td>Account Holder Name</td>
								<td>Manipal University Jaipur Escrow Account</td>
							</tr>
							<tr>
								<td>Swift Code</td>
								<td>IDFBINBBMUM</td>
							</tr>							
						</table>
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
