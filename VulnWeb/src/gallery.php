<!DOCTYPE HTML>

<html>
	<head>
		<title>Generic - CyberTech</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo"><strong>CyberTech</strong> <span>for Hackers</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
							<li><a href="content.html">Content</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="index.html#organizers">Know More</a></li>
						</ul>
						
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Gallery</h1>
									</header>
									<span class="image main"><img src="images/pic11.jpg" alt="" /></span>
		
								</div>
							</section>

							<section id="uploader">
								<div class="inner">
									<header class="major">
										<h1>Contribute</h1>
									</header>
									<p>At CyberTech, you have the opportunity to shape our tech education gallery by submitting your valuable content in the form of images. Share banners for your cybersecurity-oriented tech tutorials, coding projects, or educational resources related to the field with us, and together, we can enrich the learning experience for our community. Your contributions make a significant impact on the tech education landscape, inspiring and empowering learners around the world.</p>

									<form action="gallery.php#uploader" method="post" enctype="multipart/form-data">
										<div class="form-group col-md-3">
											<p>Upload an image here (.png, .jpg, .gif, or .bmp format accepted):
											<input type="file" id="fileToUpload" name="fileToUpload" accept="image/gif, image/jpeg" style="margin-left: 5%" required></p>
											<input type="submit" value="Upload" class="form-control btn btn-default" name="submit">
										</div>
									</form>

									<?php
										$target_dir = "uploads/";
										
										if(isset($_POST["submit"])) {
											$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
											if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
												echo "<p class=\"alert-success\">Your contribution has been acknowledged and is currently under review. You can view your file at <a href=\"$target_file\">$target_file</a>.</p>";
											} else {
												echo "<p class=\"alert-danger\">Sorry, there was an error uploading your file.</p>";
											}
										}
									?>
								</div>
							</section> 
					</div>
					
				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">cybertech@email.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<a>+91 4712788000</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>Digital University Kerala<br />
										 Thiruvananthapuram 695317<br />
										Kerala, INDIA</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; CyberTech</li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>