<html>
  <head>
    <title>Study Material Upload</title>
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
              
              
              <li><a href="/projects/course/web/page1/page2/uploadmaterials.php">Go Back</a></li>
            </ul>
          </nav>

      </div>
      <div class="wrapper style1">

        <div class="container">
          <div class="row">
            <div class="8u skel-cell-important" id="content">
              <article id="main">
                
                  <h3 align="left"><a ><span class="byline">Details of the file that you just uploaded</span></a></h3>


<?php
if (isset($_REQUEST['upload']))

{
  $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma","pdf","docx");


    $extension = pathinfo($_FILES['uploadvideo']['name'], PATHINFO_EXTENSION);
    if ( ($_FILES["uploadvideo"]["size"] < 20000000000)
    && in_array($extension, $allowedExts))
       {
  if ($_FILES["uploadvideo"]["error"] > 0)
    {
    echo "<h3><span class='byline'>Return Code:</span></h3> " . $_FILES["uploadvideo"]["error"] . "<br />";
    }
  else
    {
    echo "<span class='byline'>Uploaded File Name: " . $_FILES["uploadvideo"]["name"] . "</span><br />";
    echo "<span class='byline'>Type: " . $_FILES["uploadvideo"]["type"] . "</span></h3><br />";
    echo "<span class='byline'>Size: " . ($_FILES["uploadvideo"]["size"] / 1024) . " Kb</span><br />";
    echo "<span class='byline'>Temporary location of file: " . $_FILES["uploadvideo"]["tmp_name"] . "</span><br />";
    $name=$_FILES['uploadvideo']['name'];
    $type=$_FILES['uploadvideo']['type'];
    //$size=$_FILES['uploadvideo']['size'];
    $cname=str_replace(" ","_",$name);
    $tmp_name=$_FILES['uploadvideo']['tmp_name'];
    $target_path="materials/php/";
    $target_path=$target_path.basename($cname);
     if (file_exists("materials/php/" . $_FILES["uploadvideo"]["name"]))
      {
        echo" <span class='byline'> <h4>Error:</h4>";
      echo $_FILES["uploadvideo"]["name"] . " already exists.</span>";
      echo" <span class='byline'> Please Check the file name and ensure that the file are uploaded in the correct sequence</span>";
      }
    else
      {
     move_uploaded_file($_FILES['uploadvideo']['tmp_name'],$target_path);
     
      $con=mysql_connect("localhost","root","")or die("cannot connect");
       mysql_select_db("course",$con)or die ("cannot connect to database");
        
        $sql="INSERT INTO table_phpmat(name,type) VALUE('".$cname."','".$type."')"; 
             $result=mysql_query($sql);
             echo" <span class='byline'> <h4>Success</h4></span>";
              echo "<span class='byline'>Your file ".$cname." has been successfully uploaded</span>";
               echo " <span class='byline'>Your file is Stored in: " . "materials/php/" . $_FILES["uploadvideo"]["name"];
               echo"</span> <hr/>";
       
      }
    }
      }
}
?>

</article>
<hr/>
</div>

</div>
        

</div>
</div>


</body>
</html>
