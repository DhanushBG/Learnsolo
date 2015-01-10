<?php
session_start();
include ("connection.php");
$txtuid=$_REQUEST['txtuid'];
$_SESSION['userid']=$txtuid;
$txtpwd=$_REQUEST['txtpwd'];
$rs = mysql_query("select * from reg_course where userid='$txtuid'");
if(mysql_num_rows($rs)==0)
{
echo"dd";?>
<script type="text/javascript">
window.location.href='signin.php?flag=FAILED';
</script>
<?php }
else
{
	$row=mysql_fetch_array($rs);
	$ucd=$row['userid'];
	$pwd=$row['password'];
	if($txtpwd==$pwd)
	{echo $_SESSION["name"];
		header("Location:select.php?flag=success");
		
		exit();
	}
	//else{

		header("Location:signin.php?flag=success");
		exit();
	}

		?>
	
	
	
<?php 
?>



