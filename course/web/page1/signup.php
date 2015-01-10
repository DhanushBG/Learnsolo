<!DOCTYPE HTML>

<html>
	<head>
		<title>signup</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700|Open+Sans+Condensed:700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body>
<script type="text/javascript">
function validate()
{
	var va=" ";
if(document.getElementById('name').value=="")
{
alert("stop messing around you dint even enter your NAME");
document.getElementById('name').focus();
va=false;
}

else if(document.getElementById('userid').value=="")
{
alert("stop messing around you dint even enter your userid");
document.getElementById('userid').focus();
va=false;
}
else if(document.getElementById('password').value=="")
{
alert("please enter the PASSWORD ");
document.getElementById('password').focus();
va=false;
}
else if(document.getElementById('cpassword').value=="")
{
alert("please enter the confirm password ");
document.getElementById('cpassword').focus();
va=false;
}
else if(document.getElementById('password').value!=document.getElementById('cpassword').value)
{
alert("give me a break!!...your typing your password wrong buddy..!");
document.getElementById('cpassword').focus();
va=false;
}
else
{
va=true;
}
return va;
}
</script>
		<!-- Nav -->
			<nav id="nav" class="skel-panels-fixed">
				<ul>
					<li ><a href="/projects/course/">Home</a></li>
					<li><a href="courses.php">Courses</a></li>
					<li><a href="institution.php">Institution</a></li>
					<li><a href="signin.php">Sign-in</a></li>
					<li class="current_page_item"><a href="signup.php">Sign-up</a></li>
					<li><a href="staff.php">Staff</a></li>
				</ul>
			</nav>
		<!-- /Nav -->
		
		<!-- Main -->
			<div id="main-wrapper">
				<div id="main" class="container">
					<div class="row">
						<div class="9u skel-cell-important">
							<div class="content content-left">
												<!-- Contact Form -->
													<h2 class="major"><span>SIGN-up</span></h2>
													<section class="footer-one">
														<form id="form1" name="form1" action="reg.php" onsubmit="return validate()" method="post">
															<div>
																<div align="center" >
																	<div class="4u">
																	<input type="text" class="text" name="name" id="name" placeholder="Name" />
																	</div><br/>
																	<div class="4u">
																		<input type="text" class="text" name="userid" id="userid" placeholder="User Id" />
																	</div><br/>
																	<div class="4u">
																		<input type="password" class="text" name="password" id="password" placeholder="Password" />
																	</div><br/>
																	<div class="4u">
																		<input type="password" class="text" name="cpassword" id="cpassword" placeholder="confirm Password" />
																	</div><br/>
																	
																</div>
																
																<div class="row" align="center">
																	<div class="12u">
																		<ul class="actions">
																			<li><input type="submit" class="button button-style1" name="button" id="button" value="Sign Up" /></li>
																			
																		</ul>
																	</div>
																</div>
															</div>
														</form>
													</section>
												<!-- /Contact Form -->
								
							</div>
						</div>
						<div class="3u">
							<div class="sidebar">
							
								<!-- Sidebar -->
							
									<!-- Recent Posts -->
										<section>
											<h2 class="major"><span>Already Have An Account?</span></h2>
											<ul class="style2">
												
												<li>
													<article class="is-post-summary">
														<h3>Then click below to..</h3>
														
													</article>
												</li>
											</ul>
											<a href="signin.php" class="button button-alt">SIGN IN</a>
										</section>
									<!-- /Recent Posts -->

									
												
												
										
											</div>
										</div>
									</div>
								</section>
							<!-- /Features -->

						</div>
					</div>
				</div>
			</div>
		<!-- /Main -->

		<!-- Footer -->
			<footer id="footer" class="container">
				
				<div class="row">
					<div class="12u">

						<!-- Contact -->
							<section>
								<h2><span>Get in touch</span></h2></br>
								<ul class="contact">
									<li><a class="fa fa-facebook solo" href="#"><span>Facebook</span></a></li>
									<li><a class="fa fa-twitter solo" href="http://twitter.com/n33co"><span>Twitter</span></a></li>
									<li><a class="fa fa-rss solo" href="http://n33.co/feed/"><span>RSS</span></a></li>
									<li><a class="fa fa-dribbble solo" href="http://dribbble.com/n33"><span>Dribbble</span></a></li>
									<li><a class="fa fa-linkedin solo" href="#"><span>LinkedIn</span></a></li>
									<li><a class="fa fa-google-plus solo" href="#"><span>Google+</span></a></li>
								</ul>
							</section>
						<!-- /Contact -->
					
					</div>
				</div>

				<!-- Copyright -->
					<div id="copyright">
						&copy;learnsOlo  | Images: <a href="#">hey</a> | Design: <a href="#">bmsce</a>
					</div>
				<!-- /Copyright -->

			</footer>
		<!-- /Footer -->

	</body>
</html>