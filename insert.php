<?php
$con=mysql_connect("localhost","root");
if(!$con)
echo "Not able to connect";
else
echo "Connected!";
mysql_select_db("test",$con);
$sql="insert into customers values ($_POST[id],\"$_POST[name]\", \"$_POST[number]\");";
if(!mysql_query($sql,$con))
{	die("Error ".mysql_error());
}
else
echo "Value ".$_POST[id]." inserted!";
?>
