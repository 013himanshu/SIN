
<!doctype html>
<html lang="en">
<head>
	<title>Paper Submission | SIN 2017</title>
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
				<h2 class="title">Paper Submission</h2>				
				<div class="team">
					<div class="row">
						<div class="col-md-12">
							<h4 style="text-align: justify;">
								Papers must be submitted electronically via the SIN-2017 submission site, <a href="https://cmt3.research.microsoft.com/SIN2017/" style="display: inline-block;"><strong>Click Here To Submit The Paper</strong></a>. All papers should be written according to double-column ACM conference format <a href="http://www.acm.org/sigs/publications/proceedings-templates" style="display: inline-block;"><strong>Click Here</strong></a>. Title, author's name(s), affiliation, mailing address, telephone, fax and email of the principal author should be included.
								<br>
								All accepted papers will be published by ACM Press in a conference proceedings and placed into ACM Digital Library. Extended versions of selected papers will be invited for possible publication in a special issue of the International Journal. Each accepted paper must be registered to be included in the proceedings.
								<br>								
								All proposals for organizing <strong>workshops</strong>, <strong>tutorials</strong>, <strong>demos</strong>, and <strong>special sessions</strong> are to be shared to the conference e-mail <a href="mailto:sin2017@muj.manipal.edu" style="display: inline-block;"><strong>sin2017@muj.manipal.edu</strong></a>.
							</h4>
						</div>
					</div>
				</div>
				<br>
				<h2 class="title">Paper Categories</h2>				
				<div class="team">
					<div class="row">
						<div class="col-md-12">
							<h4 style="text-align: justify;">
								<blockquote>
									<p>
										<strong>Research Contributions:-</strong> Submissions must not substantially duplicate work that any of the authors has published elsewhere or has submitted simultaneously to any other conference or workshop that has published proceedings. Maximum length for the proceedings is 8 pages for full papers, 6 pages for short papers.
									</p>								    
								</blockquote>
							</h4>
						</div>
						<div class="col-md-12">
							<h4 style="text-align: justify;">
								<blockquote>
									<p>
										<strong>Student Contributions:-</strong> Doctoral / Masters Students are encouraged to propose papers on ongoing research. Please add "(Student contribution)" to the title. Maximum length for the proceedings is 6 pages for student papers.
									</p>								    
								</blockquote>
							</h4>
						</div>
						<div class="col-md-12">
							<h4 style="text-align: justify;">
								<blockquote>
									<p>
										<strong>Industrial Contributions:-</strong> Authors from industry and government enterprises are welcome to submit original papers that describe their experiences, challenges, and applications in security. Maximum length for the proceedings is 8 pages.
									</p>								    
								</blockquote>
							</h4>
						</div>
						<div class="col-md-12">
							<h4 style="text-align: justify;">
								<blockquote>
									<p>
										<strong>Position Papers / Fast Abstracts / Poster Paper:-</strong> Authors are also encouraged to propose position papers / fast abstracts on practical studies and experiments, critiques of existing work, emerging issues, and novel ideas under development. Maximum length for the proceedings is 4 pages for fast abstracts and position statements.
									</p>								    
								</blockquote>
							</h4>
						</div>
						<div class="col-md-12">
							<h4 style="text-align: justify;">
								<blockquote>
									<p>
										<strong>Tool Demos:-</strong> Enterprises and research centers developing, implementing, or using security tools and frameworks are encouraged to propose application / tool demos. Maximum length for the proceedings is 4 pages for tool demos.
									</p>								    
								</blockquote>
							</h4>
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
