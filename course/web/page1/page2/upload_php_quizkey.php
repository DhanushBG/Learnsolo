<!DOCTYPE HTML>

<html>
	<head>
		<title>Upload PHP Quiz</title>
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
	<body class="no-sidebar">

		<!-- Header -->
			<div id="header">

				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="/projects/course/web/page1/page2/uploadquiz.php">Go back</a></li>
							
						</ul>
					</nav>

			</div>
			<div class="wrapper style1">

				<div class="container">
					<div class="row">
						<div class="12u skel-cell-important" id="content">
							<article id="main" class="special">
								<header>
									<h2 align="left"><a>Status Of The Answer Keys</a></h2>
									
								</header>
							
<?php 
 $File = "phpkey.txt"; 
 $Handle = fopen($File, 'a') or die("couldn't open");
 $Data = $_POST['ques']; 
 fwrite($Handle, $Data); 
 print "<span class='byline'>Answer Keys  have been  Added</span>"; 
 fclose($Handle); 
 ?>

 </article>
  <br/> <br/> <br/>
 <hr/>
 <br/>
  <br/>
   <br/>
    <br/>
 </div>
 
 </div>
 </div>
 </div>
 </body>
 </html>
 