<html>
<head>
<title>QUESTIONS</title>
</head>
<body>
<font size="30px" color="pink">
<style>
h2
{
	 color: yellow;
	 font-align:center;
	 font-size:40px;
}
</style>
<body background="bg12.jpg">
<?php
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('quiz');
session_start();
$p=$_SESSION['name'];
if($_POST['radio']==$_SESSION['cans'])
{
		    echo "<center>Congrats &nbsp".$p."!&nbspYou won the game! :D </center><br>";
			$sql=mysql_query("update questions set status='0'");
?>
<form method ="post" action ="index.php">
<center><input type="submit" value="LOGOUT"></center>
</form>
<?php			
}
else
{
	echo "<html><center><b>SORRY YOU GOT THE WRONG ANSWER! ;/</b></center></html>";
	echo "<html><center><b>YOU JUST MISSED IT BY A GO! </b></center></html>";
	echo "<html><center><b>BETTER LUCK NEXT TIME :) /</b></center></html>";
	echo "<html><center><b>THANK YOU! :)</b></center></html>";
	$sql=mysql_query("update questions set status='0'");
	
?>
<form action="index.php">
<center><input type="submit" value="LOGOUT"></center>
</form>
<?php 
}
?>
</font>
</body>
</html>