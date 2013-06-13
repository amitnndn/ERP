<html>
<head>
<title>
Welcome to the MySQL test page
</title>
</head>
<body>
Fill in the contents of this form to test if the database is working.<br />
<form action="insert.php" method="post">
<table>
<tr> 
<td>ID</td><td><input type="number" name="id"></td> 
</tr>
<tr>
<td>Age</td><td><input type="text" name="name"></td>
</tr>
<tr> 
<td>Name</td><td><input type="text" name="number"></td> 
</tr>
<tr>
/*<td>DOB</?td><td><select name="edop"><option value=" "></option><?php for($i=1980;$i<1992;$i++) : ?>
<option value="<?php echo $i: ?>"><?php echo $i?></option><?php endfor;?></td></select>*/
</tr>
<tr> 
<td><input type="submit" value="Check Database"></td>
</tr>
</table>
</html>

