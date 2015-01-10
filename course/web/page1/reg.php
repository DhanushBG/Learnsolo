
<?php
$username="root";
$password="";
$server="localhost";
$database="course";
$name=$_POST['name'];
$userid=$_POST['userid'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$con=mysql_connect($server,$username,$password);
mysql_select_db($database,$con);
$query="INSERT INTO reg_course VALUES('$name','$userid','$pass','$cpass')";
mysql_query($query);
mysql_close();

?>
<script type="text/javascript">
alert("Registration success..click OK to login");
window.location.href='signin.php?flag=success';
</script>


