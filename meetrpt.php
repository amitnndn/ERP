<html>
<head>
<title>
Meeting Report
</title>
</head>
<body>
Meeting Report: <br /><br />
<?php
$con=mysql_connect("localhost","root");
if(!$con)
echo "Error in Connection";
mysql_select_db("erp",$con);
$sql="select * from meetings,tasks where tasks.tid=meetings.tid;";
$rpt=mysql_query($sql,$con);
echo "<table border=1><tr align='center'><th>Meeting Date</th><th>Venue</th><th>Meeting Objective</th><th>Task Description</th></tr>";
while($info=mysql_fetch_array($rpt))  {
echo "<tr align='center'><td>".$info['mdate']."</td><td>".$info['venue']."</td><td>".$info['mobj']."</td><td>".$info['tkdep']."</td></tr>";
}
echo "</table>";
?>
<br /><br />
<a href="index.php">Click here to go to the home page</a>
</body>
</html>

