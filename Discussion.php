<?php
mysql_connect("localhost","root","root");
mysql_select_db("userinfo")or die("Could not open the Discussion Forum");
?>
<html>
<body>
<center><span style="font-weight:bold;font-size:30pt">Discussion Forum</span></center>
<br><br><br>
<span style="font-size:20pt">
<a href="Home.php">Home</a>&nbsp;&nbsp;
<a href="Register.html">Register Now!</a>&nbsp;&nbsp;
<a href="Login.php">Login</a>&nbsp;&nbsp;
<br><br><br>
</span>
<?php
$query="SELECT * FROM forum ORDER BY time DESC";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
$t=$row[0];
$n=$row[1];
$p=$row[2];
echo "<b>$t:$n wrote</b>:$p<br>";
}
?>

<br><br><br>
<form action="Discussion_Add.php" method="POST">
Name: <input type="text" name="tname">
<br><br>
Post:<textarea name="tpost" rows="2" cols="40" maxlength="180" value=" "></textarea>
<br><br>
<input type="Submit" value="Submit">
</form>

</body>
</html>
