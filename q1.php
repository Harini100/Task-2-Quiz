<html>
<head>
<title></title>
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
$n=$_POST['name'];
$p=$_POST['pwd'];
if($n!=NULL && $p!=NULL)
{
	$query=mysql_query("select * from details where Email='".$n."' and password='".$p."'");
	$res=mysql_fetch_row($query);
	if($res)
	{
		//header('location:view.php');
		$sql=mysql_query("select * from details where Email='$n'");
		$res=mysql_fetch_array($sql,MYSQL_ASSOC);
		echo "<center>Hii&nbsp".$res['name']."!&nbspWe extend our hearty welcome!</center>";
		
			$get_question = "SELECT * from questions_table order by rand() limit 1;";
			$result_get_question = mysql_query( $get_question);
			$row_get_question = mysql_fetch_array($result_get_question,MYSQL_ASSOC);
			echo "<center>".$res['name']."</center>";
	}
	else
	{
		echo"<br><br><br><br><br>";
		echo"<html><center><b>Invalid usernames and passwords! :(</b></center></html>";
	}
}
else
{
	echo "<html><center><b>Enter both username and password! :)</b></center></html>";
}
?>
</font>
<form action=index.php>
<tr><td><center><input type="image" value="submit" src="button(9).png" alt="submit Button" onMouseOver="this.src='button(9).png'"></center></td></tr>
</form>
</body>
</html>