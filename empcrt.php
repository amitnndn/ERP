<html> 
<head> 
<title> 
Employee Created!
</title> 
</head> 
<body>
Thank you for creating an employee! 
<?php
$con=mysql_connect("localhost","root");
if(!$con)
echo "Not able to connect!";
else 
echo "Connected!";
$yearofbirth=$_POST['edob_year'];
$monthofbirth=$_POST['edob_month'];
$dayofbirth=$_POST['edob_day'];
$date=$yearofbirth.'-'.$monthofbirth.'-'.$dayofbirth;
$yearofjoin=$_POST['jdate_year'];
$monthofjoin=$_POST['jdate_month'];
$dayofjoin=$_POST['jdate_day'];
$djoin=$yearofjoin.'-'.$monthofjoin.'-'.$dayofjoin;
mysql_select_db("erp",$con);
$sql="insert into employee values($_POST[ssn],\"$_POST[fn]\",\"$_POST[ln]\", '$date' ,\"$_POST[sex]\",'$djoin',$_POST[cl],\"$_POST[dept]\",\"$_POST[addr]\",$_POST[cont]);";
if(!mysql_query($sql,$con))
	die("Error ".mysql_error());
else
	echo " Welcome ".$_POST[fn]." to the family!";
?>
<br /><a href="index.php">Click here to go to Home Page</a>
</html>
