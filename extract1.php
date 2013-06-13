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
echo "Connected";
mysql_select_db=("erp",$con);
$sql="select * from employee;";
$details=mysql_query($sql,$con);
while($details=mysql_fetch_array($sql))
echo "Name :".$details[fn]."<b>SSN :".$details[ssn];
?>
</body>
</html>
