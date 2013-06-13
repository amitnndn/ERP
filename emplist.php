<html>
<head>
<title> 
Employee List
</title>
</head>
<body>
The list of employees are: <br /><br />
<?php
$con=mysql_connect("localhost","root");
if(!$con)
echo "Error in connection!";
mysql_select_db("erp",$con);
$sql="select * from employee;";
$emp=mysql_query($sql,$con);
echo "<table border='1'>";
echo "<tr align='center'><th>First Name</th><th>Last Name</th><th>SSN</th><th>Contact No.</th><th>Educational Qualificaton</tr>";
while($info=mysql_fetch_array($emp))
echo "<tr align='center'><td>".$info['firstname']."</td><td>".$info['lastname']."</td><td>".$info['ssn']."</td><td>".$info['contact']."</td><td>".$info['dpt']."</td></tr>";
echo "</table>"
?>
<br /><a href="index.php">Click here to go to the home page</a>
</body>
</html>

