<html>
<head> 
<title> 
Troubleshoot an Issue
</title> 
</head> 
<body>
Please fill in the form to report a Troubleshoot (Fields marked with * are cumpulsory)
<form action="trbshoot.php" method="post"> 
<table>
<tr>
<td>TaskID*:</td><td><input type="number" name="tid"></td>
</tr>
<tr>
<td>Issue*:</td><td><input type="text" name="issue"></td>
</tr>
<tr>
    <td>Reporting Date*:</td>
<td>
<select name="tdate_day" type="number">

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

<select name="tdate_month" type="number">

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

<select name="tdate_year" type="number">
<option>2013</option>
<option>2014</option> 
<option>2015</option>
</select></td>
</tr>
<tr>
<td>Priority (On a scale of 0-10)*:</td><td><input type="number" name="priority"></td>
</tr>
<tr>
<td><input type="submit" value="Submit Report"></td> 
</tr>
</table>
</body>
</html>
