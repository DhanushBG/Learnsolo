<!DOCTYPE HTML>

<html>
	<head>
		<title>learn course</title>
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
							
							
							<li><a href="/projects/course/web/page1/page2/listcourses.php">Go Back</a></li>
						</ul>
					</nav>

			</div

					<div id="main" class="container">


 <span class="byline" align="center"><h3 align="center"><a>Course Videos Search Engine</a></h3></span>


</div>


																<form id="form" method="get" action="search2.php">

										                         <div>
																<div align="center" >
																	<div class="4u">
																	<br/>
																	<input type="text" class="text" type="text" name='k' size="80" value="<?php echo $_GET['k'] ?>"/> 
																	</div>
																	<div class="row" align="center">
																	<div class="12u" align="center">
																		<ul class="actions">
														                 <br/>
																			<li><input type="submit" class="button button-style1"  name="Search" id="button" value="Search" /></li>
																			
																		</ul>
																	</div>
																</div>
																	
																	</div><br/>
																	
																	
																	</form>
																		<div class="wrapper style1">

				
	
				<div class="container">
					
						

														
																
																<?php 
																$k=$_GET['k'];
																$terms=explode(" ", $k);
																$query="SELECT * FROM search_eng1 WHERE ";
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
                                                               		echo" <h3><span class='byline'><a href=$link>$title</a></span><h3> ";
                                                               		echo"<h3>Description:<br/>$description</h3><hr/>";
                                                               	}
                                                               }
                                                               else
                                                               	echo"No results found for\"<b> $k</b> \"";

																?>
																</div>
																</div>
																
															</body></html>  