<!DOCTYPE HTML>

<html>
	<head>
		<title>Course Search Results</title>
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
					<li ><a href="/projects/course/">Home</a></li>
					<li class="current_page_item"><a href="courses.php">Courses</a></li>
					<li ><a href="institution.php">Institution</a></li>
					<li><a href="signin.php">Sign-in</a></li>
					<li><a href="signup.php">Sign-up</a></li>
					<li><a href="staff.php">Staff</a></li>
					
				</ul>
			</nav>
		<!-- /Nav -->
		<hr/>
<div>


	<br/>
	<br/>				

<span class="byline"><h3 align="center">Course Search Engine</h3></span>





																<form id="form" method="get" action="search1.php">

										                         <div>
																<div align="center" >
																	<div class="4u">
																	<input type="text" class="text" type="text" name='k' size="80" value="<?php echo $_GET['k'] ?>"/> 
																	</div>
																	<div class="row" align="center">
																	<div class="12u" align="center">
																		<ul class="actions">
																			<li><input type="submit" class="button button-style1"  name="Search" id="button" value="Search" /></li>
																			
																		</ul>
																	</div>
																</div>
																	
																	</div><br/>
																	
																	
																	</form>

																</div>
																</br>
																<h2 class="fa fa-hand-o-down" align="center"></h2>
																</br>
																<hr/>
																<?php 
																$k=$_GET['k'];
																$terms=explode(" ", $k);
																$query="SELECT * FROM search_eng WHERE ";
                                                                 $i=0;
																foreach($terms as $each){
																	$i++;

																	if($i==1)
                                                                    $query .="keywords LIKE '%$each%' ";
																	else
																		$query .="OR keywords LIKE '%$each%' ";
																}

                                                              $con=mysql_connect("localhost","root","")or die("cannot connect");
                                                               mysql_select_db("course",$con);
                                                               $query=mysql_query($query);
                                                               $num_rows=mysql_num_rows($query);
                                                               if($num_rows>0){

                                                               	while($row=mysql_fetch_assoc($query)){
                                                               		$id=$row['id'];
                                                               		$title=$row['title'];
                                                               		$description=$row['description'];
                                                               		$keywords=$row['keywords'];
                                                               		$link=$row['link'];
                                                               		echo" <h3 align='center'><a href=$link>$title</a></h3> ";
                                                               		echo"<br/><h4 class='byline'>$description</h4></br>";

                                                               	}
                                                               }
                                                               else
                                                               	echo"No results found for\"<b> $k</b> \"";

																?>
															</body></html>  