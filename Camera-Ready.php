
<!doctype html>
<html lang="en">
<head>
	<title>Camera Ready Instructions | SIN 2017</title>
	<?php require 'php_includes/imports.php'; ?>
	<style type="text/css">
	ol, ul {
		text-align: justify;
	}
		ol {
			list-style: decimal;
			font-size: 17px;
		}
		ul {
			list-style: disc;
			margin-left: 20px;
			font-size: 15px;
		}
		p {
			text-align: justify;
			font-size: 18px;
		}
		blockquote {
			text-align: justify;
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
		<section class="section speaker text-center">
			<div class="container">
				<h2 class="title">Camera Ready Instructions </h2>
				<h4>
					Please click <a href="assets/docs/SIN_camera_ready_submission_instructions_final_Aug17,2017.pdf" download="Camera Ready Instructions"><strong>here</strong></a> to download Camera Ready Instructions PDF
				</h4>	
				<div class="team">
					<div class="row">					
						<div class="col-md-12">
							<h3 style="text-align: justify;">
								SIN'17 proceedings, under assigned ISBN number 978-1-4503-5303-8, 
								to be published in ACM International Conference 
								Proceeding Series (ICPS).
							</h3><br>
							<p style="text-align: justify;">
								<b>The Camera Ready 
								Instructions for the</b> <b>author(s) are as 
								follows:</b>
							</p>
							<ol>
								<li>Papers should include the title, authors' names, affiliation, telephone and email of the author(s). Page limit for different paper categories are:</li>								
									<ul>
										<li>The maximum length for the regular papers(research/student/industrial) is 8 pages. If needed, two additional pages are allowed for regular papers.However, extra page charges ($100 per page) apply.</li>
										<li>The maximum pages limit for short papers is 6 pages.</li>
										<li>Paper under fast abstract / position paper / tool demo categories are allowed maximum 4 pages.</li>
									</ul>
								<br>
								<li>ACM has developed a <strong>new 2017 ACM Master Article Template</strong>. You can download it from the webpage, <a href="http://www.acm.org/publications/proceedings-template" target="_blank"><strong>http://www.acm.org/publications/proceedings-template</strong></a>. You have to use the 
								<strong>"sigconf"</strong> format. Please strictly follow the guidelines of sigconf.pdf while creating camera ready PDF.</li>
								<br>
								<li>You must ensure that have Type 1 fonts (Scalable), not Type 3 (bit-mapped) while generating camera ready copy from docx or latex. All fonts must be embedded within the PDF fille. In order to help you, ACM has created 
								documentation in how to embed your fonts- (<a href="http://www.acm.org/binaries/content/assets/publications/word-to-pdf-instructions-.txt" target="_blank"><strong>http://www.acm.org/binaries/content/assets/publications/word-to-pdf-instructions-.txt</strong></a>).
								<br><br>
								<li>ACM will soon start collecting online copyright forms from the first author of all accepted papers. After completing the rights management form, author(s) will be emailed the correct ACM rights statements and bibliographic strip with a copy of the form. You have to insert permission blocks on the bottom of the first page left column.</li>
								<br>
								<li>Please use 2012 Computing Classification System (CCS) and you can generate indexing terms manually through Author Support Tool (<a href="http://dl.acm.org/ccs.cfm"><strong>http://dl.acm.org/ccs.cfm</strong></a>). Please start with "<strong>Security and Privacy</strong>" followed by areas based on your article's focus. You have to incorporate CCS indexing terms after abstract in camera ready copy.</li>
								<br>
								<li>Authors must supply a caption to the image. The caption length should be no more than 512 characters.</li>
							</ol>
						</p>		
						<br>
						<blockquote>You need to place both source files and camera ready PDF in a zipped folder and send it to <a href="mailto:sin2k17@gmail.com"><strong>sin2k17@gmail.com</strong></a> on or before <strong>September 05,</strong> <strong>2017 (firm deadline)</strong>. During submission, please mention the<strong> type of paper</strong> (regular/short/fast abstract/position/tool demo) and <strong>paper ID </strong>in the<strong> subject line of the email.</strong></blockquote>
						<br>
						<blockquote>Please note that ACM rights management emails are sent from an automated system, there is a chance that emails sent will wind up in SPAM folders. Please make sure that your email SPAM settings are allowing emails from <a href="mailto:rightsreview@acm.org."><strong>rightsreview@acm.org</strong></a></blockquote>
						<br>
						<h4 style="text-align: left;margin-bottom: 10px;"><strong>Additional Links:</strong></h4>
						<ul>
							<li>ACM plagiarism policy (<a href="http://www.acm.org/publications/policies/plagiarism"><strong>http://www.acm.org/publications/policies/plagiarism</strong></a>).</li>     
							<li>ACM copyright details (<a href="http://www.acm.org/publications/policies/copyright-policy"><strong>http://www.acm.org/publications/policies/copyright-policy</strong></a>)</li>
						</ul>
		</section>
		<!-- Social Links -->
		<?php require 'php_includes/social.php'; ?>
		
	</div>
</div>
<!-- Footer -->
<?php require 'php_includes/footer.php'; ?>
</span>
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
