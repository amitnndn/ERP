<html> 
<head> 
<title> 
Bug Reported!
</title> 
</head> 
<body> 
Thank you for reporting the bug! 
<?php
$con=mysql_connect("localhost","root");
if(!$con) 
	echo "Not able to connect!";
else 
	echo "Connected! ";
$tyear=$_POST['tdate_year'];
$tmonth=$_POST['tdate_month'];
$tday=$_POST['tdate_day'];
$tdate=$tyear.'-'.$tmonth.'-'.$tday;
mysql_select_db("erp",$con);
$sql="insert into troubleshoot values($_POST[tid],\"$_POST[issue]\",'$tdate',$_POST[priority]);";
if(!mysql_query($sql,$con))
	die("Error ".mysql_error());
?>
<br /><a href="index.php">Click here to go to the home page</a>
</body>
</html>
