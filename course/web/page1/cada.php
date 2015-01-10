<!DOCTYPE HTML>

<html>
	<head>
		<title>ada</title>
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

		

		<!-- Nav -->
			<nav id="nav" class="skel-panels-fixed">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="#">specification</a></li>
					<li  class="current_page_item"><a href="courses.php">Courses</a></li>
					<li><a href="#">Institution</a></li>
					<li><a href="signin.php">Sign-in</a></li>
					<li><a href="signup.php">Sign-up</a></li>
				</ul>
			</nav>
		<!-- /Nav -->
		
		<!-- Main -->
			<div id="main-wrapper">
				<div id="main" class="container">
					<div class="row">
						<div class="12u skel-cell-important">
							<div class="content">
							
								<!-- Content -->
						
									<article class="is-page-content">

										<header>
											<h2>Ada</h2>
											<span class="byline">Programming language</span>
											<ul class="meta">
												<li class="fa fa-clock-o">5 days ago</li>
												
											</ul>
										</header>

										<section>
											<span class="image image-full"><img src="images/courses/ada.jpg" alt="" /></span>
											
										</section>
										
										<section>
											<h3>Ada</h3>
											<p>
												Ada was originally targeted at embedded and real-time systems. 
The Ada 95 revision, designed by S. Tucker Taft of Intermetrics between 1992 and 1995, improved support
 for systems, numerical, financial, and object-oriented programming (OOP).
Notable features of Ada include: strong typing, modularity mechanisms (packages), run-time checking, parallel 
processing (tasks, synchronous Message passing, protected objects, and nondeterministic select statements), exception
 handling, and generics. Ada 95 added support for object-oriented programming, including dynamic dispatch.
											</p>
										</section>

										<section>
											
											<p>Ada is designed for development of very large software systems.
 Ada packages can be compiled separately. Ada package specifications (the package interface) can also be compiled 
separately without the implementation to check for consistency. This makes it possible to detect problems early
 during the design phase, before implementation starts.
A large number of compile-time checks are supported to help avoid bugs that would not be detectable until run-time
 in some other languages or would require explicit checks to be added to the source code. For example, the syntax
 requires explicitly named closing of blocks to prevent errors due to mismatched end tokens. The adherence to strong
 typing allows detection of many common software errors (wrong parameters, range violations, invalid references, 
mismatched types, etc.) either during compile-time, or otherwise during run-time. As concurrency is part of the language
 specification, the compiler can in some cases detect potential deadlocks. Compilers also commonly check for misspelled
 identifiers, visibility of packages, redundant declarations, etc. and can provide warnings and useful suggestions on how to fix the error.
											</p>
											<p>Ada also supports run-time checks to protect against access to unallocated memory,
 buffer overflow errors, range violations, off-by-one errors, array access errors, and other detectable bugs. These checks 
can be disabled in the interest of runtime efficiency, but can often be compiled efficiently. It also includes facilities to help
 program verification. For these reasons, Ada is widely used in critical systems, where any anomaly might lead to very serious 
consequences, e.g., accidental death, injury or severe financial loss. Examples of systems where Ada is used include avionics, 
railways, banking, military and space technology.[6][7]
											</p>
<p>Ada dynamic memory management is high-level and type safe. Ada does not have
 generic or untyped pointers; nor does it implicitly declare any pointer type. Instead, all dynamic memory
 allocation and deallocation must take place through explicitly declared access types. Each access type has
 an associated storage pool that handles the low-level details of memory management; the programmer can
 either use the default storage pool or define new ones (this is particularly relevant for Non-Uniform Memory
 Access). It is even possible to declare several different access types that all designate the same type but use
 different storage pools. Also, the language provides for accessibility checks, both at compile time and at run
 time, that ensures that an access value cannot outlive the type of the object it points to.
											</p>
										</section>

									</article>

								<!-- /Content -->
								
							</div>
						</div>
					</div>
					

							
						</div>
					</div>
				</div>
			</div>
		<!-- /Main -->

		<!-- Footer -->
			<footer id="footer" class="container">
				

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
				
				<!-- Copyright -->
					<div id="copyright">
						&copy; learnsOlo | Images: <a href="#">fotogrph</a> | Design: <a href="#">BMSCE</a>
					</div>
				<!-- /Copyright -->

			</footer>
		<!-- /Footer -->

	</body>
</html>