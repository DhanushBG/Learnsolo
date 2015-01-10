<!DOCTYPE HTML>

<html>
	<head>
		<title>staff</title>
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
if(document.getElementById('txtuid').value=="")
{
alert("please enter the username");
document.getElementById('txtuid').focus();
va=false;
}

else if(document.getElementById('txtpwd').value=="")
{
alert("please enter the password ");
document.getElementById('txtpwd').focus();
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
					<li><a href="signup.php">Sign-up</a></li>
					<li class="current_page_item"><a href="staff.php">Staff</a></li>
				</ul>
			</nav>
		<!-- /Nav -->
		
		
		<!-- Main -->
			<div id="main-wrapper">
				<div id="main" class="container">
					<div class="row">
						<div class="9u skel-cell-important"><h2><img src="images/banner-left.png"/> </h2>
							<div class="content content-left">
												<!-- Contact Form -->

														<h3 class="major" align="center"><span class="byline">Staff - login</span></h2></br>
													<section class="footer-one">
														<form id="form" name="first" method="post" action="logincheckstaff.php" onsubmit="return validate()">
															<div>
																<div align="center" >
																	<div class="4u">
																	<input type="text" class="text" name="txtuid" id="txtuid" placeholder="staff-id" />
																	</div><br/>
																	<div class="4u">
																		<input type="password" class="text" name="txtpwd" id="txtpwd" placeholder="password" />
																	</div><br/>
																	
																	
																</div>
																
																<div class="row" align="center">
																	<div class="12u">
																		<ul class="actions">
																			<li><input type="submit" class="button button-style1" name="button" id="button" value="Sign In" /></li>
																			
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
											<h2 class="major"><span>Teach Online</span></h2>
											<ul class="style2">
												
												<li>
													<article class="is-post-summary">
														<h3>What is online teaching?</h3>
														<p>
														Teaching online can be very different from teaching in a traditional classroom. 
														An instructor who accepts employment teaching online must be
														 prepared to help students learn without face-to-face interaction and live discussion. 
														 Teaching online certainly isn’t for everyone.
														 However, many instructors enjoy the freedom of virtual instruction and the opportunity to interact
														  with students from around the nation. 
                                                         </p>
                                                        <h3> WARNING!</h3>
                                                        <p>
          This system is for the use of authorized BMSCE Staff/personnel only and by accessing this system you hereby consent 
          to the system being monitored by COE. Any unauthorized use will be considered a breach of COE's Information Security policies
 and may also be unlawful under law. COE reserves the right to take any action including disciplinary action or legal proceedings 
 in a court of law against persons involved in the violation of the access restrictions herein.

													</article>
												</li>
											</ul>
											
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