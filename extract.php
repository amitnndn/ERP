<html>
<head>
<title>
Test page to see the working of Database extraction
</title>
</head>
<body>
The data extracted is : 
<?php
$con=mysql_connect("localhost","root");
if(!$con)
echo "Connection not possible";
else
echo "Connected!<br />";
mysql_select_db("erp",$con);
$sql="SELECT * FROM employee;" or die(mysql_eror());
$det=mysql_query($sql,$con);
while($row=mysql_fetch_array($det))	{
echo "Name : ".$row['firstname']." SSN : ".$row['ssn']."<br />";
}
mysql_close();
?>
</body>
</html>
