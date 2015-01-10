<!DOCTYPE HTML>
<!--
	Dopetrope 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>QUIZ</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700|Open+Sans+Condensed:700" rel="stylesheet" />
		<script src="js1/jquery.min.js"></script>
		<script src="js1/config.js"></script>
		<script src="js1/skel.min.js"></script>
		<script src="js1/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css1/skel-noscript.css" />
			<link rel="stylesheet" href="css1/style.css" />
			<link rel="stylesheet" href="css1/style-desktop.css" />
		</noscript>
		</noscript>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body >
	
		<!-- Header Wrapper -->
			
		
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Portfolio -->
								<section>
									<div>
										<div class="row">
											<div class="8u skel-cell-important">
												
												<!-- Content -->
													<article class="box is-post">
														<a href="#" class="image image-full"><img src="images/techq1.jpg"  alt="" /></a>
														<header>
															<span class="byline">QUIZ</span>
															<h1>The following quizzes are available currently:</h1><br/>

															<h2>Android Quiz #1  </h2>
															<a href="test.php" class="image image-full"><img src="images/attempt.png"  alt="" /></a>
															<p>
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

															<h2>PHP Quiz #1  </h2>
															<a href="test.php" class="image image-full"><img src="images/attempt.png"  alt="" /></a>
															<p>
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

                                                            <h2>Algorithms Design And Analysis Quiz #1  </h2>
															<a href="test.php" class="image image-full"><img src="images/attempt.png"  alt="" /></a>
															<p>
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


														</header>
														
															
														
														
													</article>
													

											</div>
											<div class="4u">
											
												<!-- Sidebar -->
													<section class="box">
														<a href="#" class="image image-full"><img src="images/quiz.jpg" alt="" /></a>
														<header>
															<span class="byline">Difficulty answering? <br/> Watch the videos here</span>
														</header>
														
														<ul class="divided">
														<li>
														
									                       <div class="6u">
										                   <a href="android.php" class="image full"><img src="images/pic10.jpg" alt="" /></a>
									                        </div> </li>
									                        <li>
									                      <div class="6u">
										                  <a href="php.php" class="image full"><img src="images/pic11.jpg" alt="" /></a>
									                         </div>
									                         </li>
														<li>
														<div class="6u">
										<a href="ada.php" class="image full"><img src="images/pic13.jpg" alt="" /></a>
									</div><li>
									<li>
									<div class="6u">
										<a href="java.php" class="image full"><img src="images/pic12.jpg" alt="" /></a>
									</div></li>
									<li>
									<div class="6u">
										<a href="#" class="image full"><img src="images/pic14.jpg" alt="" /></a>
									</div></li>
									<li>
									<div class="6u">
										<a href="#" class="image full"><img src="images/pic15.jpg" alt="" /></a>
									</div></li>
									<li>
									<div class="6u">
										<a href="#" class="image full"><img src="images/pic16.jpg" alt="" /></a>
									</div></li>
									<li>
									<div class="6u">
										<a href="#" class="image full"><img src="images/pic17.jpg" alt="" /></a>
									</div></li>
									<li>
									<div class="6u">
										<a href="#" class="image full"><img src="images/pic18.jpg" alt="" /></a>
									</div></li>
									<li>
									<div class="6u">
										<a href="#" class="image full"><img src="images/pic19.jpg" alt="" /></a>
									</div></li>
									<li><div class="6u">
										<a href="#" class="image full"><img src="images/pic20.jpg" alt="" /></a>
									</div></li>

														
													</section>
													
											</div>
										</div>
									</div>
								</section>

						</div>
					</div>
				</div>
			</div>

		

	</body>
</html>