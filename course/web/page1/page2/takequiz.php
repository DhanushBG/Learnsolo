<!DOCTYPE HTML>

<html>
	<head>
		<title>QUIZ</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body class="right-sidebar">

		<!-- Header -->
			<div id="header">

				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							
							
							<li><a href="/projects/course/web/page1/select.php">Go Back</a></li>
						</ul>
					</nav>

			</div>
			
		<!-- Main -->
			<div class="wrapper style1">
	
				<div class="container">
					<div class="row">
						<div class="8u skel-cell-important" id="content"><h1  align="center" class="img featured"><img src="images/techq1.jpg" alt="" /></h1>
							<article id="main">
								
									
									
								
									
								
							
								<span class="byline">
										The following quizzes are available:
									</span>
								<p>
									<a href="trial.php"><span class="byline">&nbsp Android Quiz #1</span></a>
															</br>
															<a href="andquiz.php" ><input type="submit" class="btn button-style1"  name="Search" id="button" value="Attempt" /></a></br>
															</br></br>
														
															Due Date &nbsp &nbsp &nbsp 	 Wed 9 Apr 2014 11:59 PM PDT</br>
															Hard Deadline	 &nbsp &nbsp &nbsp Fri 4 Jul 2014 11:59 PM PDT</br>
															
															<?php session_start();

                                                              $con=mysql_connect("localhost","root","")or die("cannot connect");
                                                                mysql_select_db("course",$con)or die ("cannot connect to database");
                                                          
                                                                 date_default_timezone_set('UTC');
                                                                 $dat1=date(DATE_RFC2822);
                                                                 echo "Current date  </t>  &nbsp  &nbsp  &nbsp       $dat1 </br>"  ;
                                                                

                                                           
                                                               	if(isset($_SESSION['userid']))
															{
																$uid=$_SESSION['userid']; 
																 $result = mysql_query("SELECT * FROM user_score1 where login='$uid' ") or die(mysql_error()) ;
																 
																 $row = mysql_fetch_assoc($result);
														    echo "No of attempts &nbsp &nbsp &nbsp".$row['attempt']."</br>";
														    echo "Effective score= &nbsp &nbsp &nbsp".$row['score1']."</br>";
														    echo "Last attempted &nbsp &nbsp &nbsp".$row['date1']."</br>";
																}  
																
															


																
															?>

								</p>
								<section>
									
									<p>
                                 <a href="#"> <span class="byline">&nbsp PHP Quiz #1 </span> </a>
                                 						</br>
															<a href="phpquiz.php" ><input type="submit" class="btn button-style1"  name="Search" id="button" value="Attempt" /></a></br>
															</br></br>
															Due Date &nbsp &nbsp &nbsp 	 Wed 9 Apr 2014 11:59 PM PDT</br>
															Hard Deadline	 &nbsp &nbsp &nbsp Fri 4 Jul 2014 11:59 PM PDT</br>
															
															<?php 

                                                              $con=mysql_connect("localhost","root","")or die("cannot connect");
                                                                mysql_select_db("course",$con)or die ("cannot connect to database");
                                                          
                                                                 date_default_timezone_set('UTC');
                                                                 $dat1=date(DATE_RFC2822);
                                                                 echo "Current date  </t>  &nbsp  &nbsp  &nbsp       $dat1 </br>"  ;
                                                                

                                                           
                                                               	if(isset($_SESSION['userid']))
															{
																$uid=$_SESSION['userid']; 
																 $result = mysql_query("SELECT * FROM user_score2 where login='$uid' ") or die(mysql_error()) ;
																 
																 $row = mysql_fetch_assoc($result);
														    echo "No of attempts &nbsp &nbsp &nbsp".$row['attempt']."</br>";
														    echo "Effective score= &nbsp &nbsp &nbsp".$row['score1']."</br>";
														    echo "Last attempted &nbsp &nbsp &nbsp".$row['date1']."</br>";
																}  
																
															


																
															?>


									</p>
								</section>
								<section>
									
									<p>
									<a href="#">	<span class="byline">&nbsp Algorithms Design And Analysis Quiz #1  </span></a>
															</br>
															<a href="adaquiz.php" ><input type="submit" class="btn button-style1"  name="Search" id="button" value="Attempt" /></a></br>
															</br></br>
															
															Due Date &nbsp &nbsp &nbsp 	 Wed 9 Apr 2014 11:59 PM PDT</br>
															Hard Deadline	 &nbsp &nbsp &nbsp Fri 4 Jul 2014 11:59 PM PDT</br>
															
															<?php 

                                                              $con=mysql_connect("localhost","root","")or die("cannot connect");
                                                                mysql_select_db("course",$con)or die ("cannot connect to database");
                                                          
                                                                 date_default_timezone_set('UTC');
                                                                 $dat1=date(DATE_RFC2822);
                                                                 echo "Current date  </t>  &nbsp  &nbsp  &nbsp       $dat1 </br>"  ;
                                                                

                                                           
                                                               	if(isset($_SESSION['userid']))
															{
																$uid=$_SESSION['userid']; 
																 $result = mysql_query("SELECT * FROM user_score3 where login='$uid' ") or die(mysql_error()) ;
																 
																 $row = mysql_fetch_assoc($result);
														    echo "No of attempts &nbsp &nbsp &nbsp".$row['attempt']."</br>";
														    echo "Effective score= &nbsp &nbsp &nbsp".$row['score1']."</br>";
														    echo "Last attempted &nbsp &nbsp &nbsp".$row['date1']."</br>";
																}  
																
															


																
															?>

									</p>
										</section>
							</article>
						</div>

									
						<div class="4u" id="sidebar">
							
							
							<section class="box">
														
														<header>
															<span class="byline">Difficulty answering? <br/> Watch the videos here</span>
														</header>
														
														<ul class="divided">
														
														
									                       <div class="6u">
										                   <a href="android.php" class="im im-full"><img src="images/pic10.jpg" alt="" /></a>
									                        </div> 
									                        
									                      <div class="6u">
										                  <a href="php.php" class="im im-full"><img src="images/pic11.jpg" alt="" /></a>
									                         </div>
									                         
														
														<div class="6u">
														<a href="ada.php" class="im im-full"><img src="images/pic13.jpg" alt="" /></a>
														</div>
									
														<div class="6u">
														<a href="java.php" class="im im-full"><img src="images/pic12.jpg" alt="" /></a>
														</div>
									
														<div class="6u">
														<a href="#" class="im im-full"><img src="images/pic14.jpg" alt="" /></a>
														</div>
									
														<div class="6u">
														<a href="#" class="im im-full"><img src="images/pic15.jpg" alt="" /></a>
														</div>
									
														<div class="6u">
														<a href="#" class="im im-full"><img src="images/pic16.jpg" alt="" /></a>
														</div>
									

														
													</section>
													
											</div>
										</div>
									</div>
								
				<hr />
					
							
							<!-- Contact -->
								<section class="contact" align="center">
									<header>
										<h3>Get In Touch</h3>
									</header>
									
									<ul class="icons">
										<li><a href="#" class="fa fa-twitter solo"><span>Twitter</span></a></li>
										<li><a href="#" class="fa fa-facebook solo"><span>Facebook</span></a></li>
										<li><a href="#" class="fa fa-google-plus solo"><span>Google+</span></a></li>
										<li><a href="#" class="fa fa-pinterest solo"><span>Pinterest</span></a></li>
										<li><a href="#" class="fa fa-dribbble solo"><span>Dribbble</span></a></li>
										<li><a href="#" class="fa fa-linkedin solo"><span>Linkedin</span></a></li>
									</ul>
								</section>
							
							<!-- Copyright -->
								<div class="copyright" align="center">
									<ul class="menu">
										<li>&copy; learnsOlo.</li>
										<li> Images: <a href="#">fotoshow</a></li>
										<li>Design: <a href="#">BMSCE</a></li>
									</ul>
								</div>
							
					
				</div>
			</div>

					
		

	</body>
</html>