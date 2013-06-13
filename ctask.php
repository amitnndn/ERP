<html> 
<head> 
<title> 
Task Created
</title> 
</head> 
<body>
Thank you for creating the task!
<?php
$con=mysql_connect("localhost","root");
if(!$con) 
	echo "Unable to connect!";
else 
	echo "Connected! "; 
mysql_select_db("erp",$con);
$sql="insert into tasks values($_POST[tid],$_POST[ssn],\"$_POST[tkdep]\");";
if(!mysql_query($sql,$con))
	die("Error ".mysql_error());
else 
	echo "Task ID: ".$_POST[tid]." created!";
?>
<br /><a href="index.php">Click here to return to the homepage</a> 
</body>
</html>

