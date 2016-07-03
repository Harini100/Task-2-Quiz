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
$n=$_POST['name'];
$p=$_POST['pwd'];
if($n!=NULL && $p!=NULL)
{
	$query=mysql_query("select * from details where Email='".$n."' and password='".$p."'");
	$res=mysql_fetch_row($query);
	if($res)
	{
		$sql=mysql_query("update questions set status='0'");
		$sql=mysql_query("select * from details where Email='$n'");
		$res=mysql_fetch_array($sql,MYSQL_ASSOC);
		$_SESSION['name']=$res['name'];
		echo "<center>Hii&nbsp".$res['name']."!&nbspWe extend our hearty welcome!</center>";
		     echo "<br><br>";
			$get_question = "SELECT * from questions order by rand() limit 1;";
			$result_get_question = mysql_query($get_question);
			$row_get_question = mysql_fetch_array($result_get_question,MYSQL_ASSOC);
			echo "<center>".$row_get_question['qst']."</center>";
			
			$q1=$row_get_question['qid'];
			$sql=mysql_query("select * from answers where aid='1' and qid='$q1'");
			$res=mysql_fetch_array($sql,MYSQL_ASSOC);
			$a1 = $res['ast'];
			
			$sql=mysql_query("select * from answers where aid='2' and qid='$q1'");
			$res=mysql_fetch_array($sql,MYSQL_ASSOC);
			$a2 = $res['ast'];
			
			$sql=mysql_query("select * from answers where aid='3' and qid='$q1'");
			$res=mysql_fetch_array($sql,MYSQL_ASSOC);
			$a3 = $res['ast'];
			
			
			$sql=mysql_query("select * from questions where qid='$q1'");
			$res=mysql_fetch_array($sql,MYSQL_ASSOC);
		    $q=$res['cansid'];
			
			$sql=mysql_query("select * from answers where qid='$q1' and aid='$q'");
			$res=mysql_fetch_array($sql,MYSQL_ASSOC);
		    $_SESSION['cans']=$res['ast'];
			
			$sql=mysql_query("update questions set status='1' where qid='$q1'");
			?>
			<form method ="post" action ="q2.php">

 <span style="padding-left:500px"> <input type="radio" name="radio" value="<?=$a1?>"><?=$a1?><br></span>

  <span style="padding-left:500px"> <input type="radio" name="radio" value="<?=$a2?>"><?=$a2?><br></span>

  <span style="padding-left:500px"> <input type="radio" name="radio" value="<?=$a3?>"><?=$a3?><br></span><br><br>
<center><input type="image" value="submit" src="button(8).png" alt="submit Button" onMouseOver="this.src='button(8).png'"></center>
</form>
<?php
	}
	else
	{
		echo"<br><br><br><br><br>";
		echo"<html><center><b>Invalid usernames and passwords! :(</b></center></html>";
		?>
		<form action="index.php">
        <center><input type="submit" value="Back"></center>
        </form>
		<?php
	}
}
else
{
	echo "<html><center><b>Enter both username and password! :)</b></center></html>";
	?>
		<form action="index.php">
        <center><input type="submit" value="Back"></center>
        </form>
		<?php
}
?>
</font>
</body>
</html>