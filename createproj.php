<html>
<head>
<title>Create a Project</title>
</head>
<body>
Please fill the form below to create a project (Fields with * are cumpulsary)<br />
<form action="cproj.php" method="post">
<table>
<tr>
<td>TaskID*:</td><td>	<input type="number" name="tid"><br /></td>
</tr>
<tr>
<td>Phase*:</td><td><select name="phase" type="number"><option value="1">Requirement Analysis</option><option value="2">Planning</option><option value="3">Design</option><option value="4">Implememtation</option><option value="5">Coding and Development</option><option value="6">Testing and QA</option></select></td>
</tr>
<tr>
<td>Start Date*:</td>
<td>
<select name="start_day" type="number">

<option>01</option>

<option>02</option>

<option>03</option>

<option>04</option>

<option>05</option>

<option>06</option>

<option>07</option>

<option>08</option>

<option>09</option>

<option>10</option>

<option>11</option>

<option>12</option>

<option>13</option>

<option>14</option>

<option>15</option>

<option>16</option>

<option>17</option>

<option>18</option>

<option>19</option>

<option>20</option>

<option>21</option>

<option>22</option>

<option>23</option>

<option>24</option>

<option>25</option>

<option>26</option>

<option>27</option>

<option>28</option>

<option>29</option>

<option>30</option>

<option>31</option>

</select>

<select name="start_month" type="number">

<option value="1">January</option>

<option value="2">February</option>

<option value="3">March</option>

<option value="4">April</option>

<option value="5">May</option>

<option value="6">June</option>

<option value="7">July</option>

<option value="8">August</option>

<option value="9">September</option>

<option value="10">October</option>

<option value="11">November</option>

<option value="12">December</option>

</select>

<select name="start_year" type="number">
<option>2011</option>
<option>2012</option>
<option>2013</option>

</select></td></tr>
<tr>

<td>Deadline*:</td>
<td>

<select name="dead_day" type="number">

<option>01</option>

<option>02</option>

<option>03</option>

<option>04</option>

<option>05</option>

<option>06</option>

<option>07</option>

<option>08</option>

<option>09</option>

<option>10</option>

<option>11</option>

<option>12</option>

<option>13</option>

<option>14</option>

<option>15</option>

<option>16</option>

<option>17</option>

<option>18</option>

<option>19</option>

<option>20</option>

<option>21</option>

<option>22</option>

<option>23</option>

<option>24</option>

<option>25</option>

<option>26</option>

<option>27</option>

<option>28</option>

<option>29</option>

<option>30</option>

<option>31</option>

</select>

<select name="dead_month" type="number" >

<option value="01">January</option>

<option value="02">February</option>

<option value="03">March</option>

<option value="04">April</option>

<option value="05">May</option>

<option value="06">June</option>

<option value="07">July</option>

<option value="08">August</option>

<option value="09">September</option>

<option value="10">October</option>

<option value="11">November</option>

<option value="12">December</option>

</select>

<select name="dead_year" type="number">

<option>2012</option>
<option>2013</option>
<option>2014</option>

</select></td></tr>
<tr>
<td>Time Spent (In Hours)*:</td><td><input type="number" name="timespent"></td>
</tr>
<tr>
<td>Project ID*:</td><td><input type="number" name="prog"></td>
</tr>
<tr>
<td><input type="submit" value="Create Project"></td>
</tr>
</table>
</body>
</html>
