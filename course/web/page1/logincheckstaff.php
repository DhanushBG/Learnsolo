<?php
session_start();
include ("connection.php");
$txtuid=$_REQUEST['txtuid'];
$_SESSION['staffid']=$txtuid;
$txtpwd=$_REQUEST['txtpwd'];
$rs = mysql_query("select * from staff_login where staffid='$txtuid'");
if(mysql_num_rows($rs)==0)
{
echo"dd";?>
<script type="text/javascript">
window.location.href='staff.php?flag=FAILED';
</script>
<?php }
else
{
	$row=mysql_fetch_array($rs);
	$ucd=$row['staffid'];
	$pwd=$row['password'];
	if($txtpwd==$pwd)
	{echo $_SESSION["username"];
		header("Location:stafflist.php?flag=success");
		
		exit();
	}
	//else{

		header("Location:staff.php?flag=success");
		exit();
	}

		?>
	
	
	
<?php 
?>



