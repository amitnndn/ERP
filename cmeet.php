<html> 
<head> 
<title> 
Meeting Created
</title> 
</head> 
<body> 
Thank you for creating the meeting!
<?php
$con=mysql_connect("localhost","root");
if(!$con) 
	echo "Not able to connect!";
else 
	echo "Connected! ";
$meetyear=$_POST['meeting_year'];
$meetmonth=$_POST['meeting_month'];
$meetday=$_POST['meeting_day'];
$mdate=$meetyear.'-'.$meetmonth.'-'.$meetday;
mysql_select_db("erp",$con);
$sql="insert into meetings values($_POST[tid],'$mdate',\"$_POST[venue]\",\"$_POST[mobj]\");";
if(!mysql_query($sql,$con))
	die("Error ".mysql_error());
?>
<br /><a href="index.php">Click here to go to the home page</a>
</body> 
</html>


