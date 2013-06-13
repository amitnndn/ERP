<html>
<head>
<title>
Troubleshoot Report
</title>
</head>
<body>
Troubleshoot Report: <br /><br />
<?php 
$con=mysql_connect("localhost","root");
if(!$con)
echo "Error in Connection!";
mysql_select_db("erp",$con);
$sql="select * from troubleshoot,tasks where tasks.tid=troubleshoot.tid;";
$trb=mysql_query($sql,$con);
echo "<table border=1><tr align='center'><th>Issue</th><th>Date</th><th>Priority</th><th>Task Description</th></tr>";
while($info=mysql_fetch_array($trb))  {
echo "<tr align='center'><td>".$info['issue']."</td><td>".$info['tdate']."</td><td>".$info['priority']."</td><td>".$info['tkdep']."</td></tr>";
}
echo "</table>";
?>
<br /><br />
<a href="index.php">Click here to go to the main menu</a>
</body>
</html>
