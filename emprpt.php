<html>
<head>
<title>
Employee Reports
</title>
</head>
<body>
Employee Reports: <br /><br />
<?php
$con=mysql_connect("localhost","root");
if(!$con)
echo "Error in connection";
mysql_select_db("erp",$con);
$sql="select * from employee, tasks, project where (employee.ssn=tasks.ssn && tasks.tid=project.tid);";
$rpt=mysql_query($sql,$con);
echo "<table border=1><tr align='center'><th>SSN</th><th>First Name</th><th>Last Name</th><th>Task Description</th><th>Start Date</th><th>End Date</th><th>Phase</th>";
while($info=mysql_fetch_array($rpt))  {
echo "<tr align='center'><td>".$info['ssn']."</td><td>".$info['firstname']."</td><td>".$info['lastname']."</td><td>".$info['tkdep']."</td><td>".$info['sdate']."</td><td>".$info['deadline']."</td>";
if($info['phase']==1)
echo "<td>Requirement Analysis</td>";
else if($info['phase']==2)
echo "<td>Planning</td>";
else if($info['phase']==3)
echo "<td>Design</td>";
else if($info['phase']==4)
echo "<td>Implementation</td>";
else if($info['phase']==5)
echo "<td>Coding and Development</td>";
else 
echo "<td>Testing and Q&A</td>";
echo "</tr>";
}
echo "</table>";
?>
<br /><br />
<a href="index.php">Click here to return to the main menu</a>
</body>
</html>

