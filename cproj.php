<html> 
<head> 
<title> 
Project Created! 
</title> 
</head> 
<body>
Thank you for creating the project
<?php
$con=mysql_connect("localhost","root");
if(!$con)
echo "Not able to connect!";
else 
echo "Connected! ";
$startyear=$_POST['start_year'];
$startmonth=$_POST['start_month'];
$startday=$_POST['start_day'];
$sdate=$startyear.'-'.$startmonth.'-'.$startday;
$endyear=$_POST['dead_year'];
$endmonth=$_POST['dead_month'];
$endday=$_POST['dead_day'];
$ddate=$endyear.'-'.$endmonth.'-'.$endday;
mysql_select_db("erp",$con);
$sql="insert into project values($_POST[tid],$_POST[phase],'$sdate','$ddate',$_POST[timespent],$_POST[prog]);";
if(!mysql_query($sql,$con))
	die("Error ".mysql_error());
else 
	echo "Project No: ".$_POST[prog]." created!";
?>
<br /><a href="index.php">Click here to return to the main page</a>
</html>



