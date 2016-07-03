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
		    echo "<center>Congrats &nbsp".$p."!&nbspYou have got it right too! :D </center><br>";
			echo "<center>You have just one more to go! :)</center>";
		    echo "<br><br>";
			
			//$session = implode(", ", $_SESSION['quiz']);
			//$query = "select * from quiz WHRE `id` NOT IN (".$session.") order by rand() LIMIT 1";
			//$result_get_question = mysql_query($query);
			
			//$row_get_question = mysql_fetch_array($result_get_question,MYSQL_ASSOC);
			
			$get_question = "SELECT * from questions where status='0' order by rand() limit 1;";
			$result_get_question = mysql_query($get_question);
			$row_get_question = mysql_fetch_array($result_get_question,MYSQL_ASSOC);
			
			echo "<center>".$row_get_question['qst']."</center>";
			
			$session = implode(", ", $_SESSION['quiz']);
			$query = "select * from quiz WHRE `id` NOT IN (".$session.") order by rand() LIMIT 1";
			$result_get_question = mysql_query($query);
			
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
<form method ="post" action ="final.php">

 <span style="padding-left:500px"> <input type="radio" name="radio" value="<?=$a1?>"><?=$a1?><br></span>

  <span style="padding-left:500px"> <input type="radio" name="radio" value="<?=$a2?>"><?=$a2?><br></span>

  <span style="padding-left:500px"> <input type="radio" name="radio" value="<?=$a3?>"><?=$a3?><br></span><br>
<center><input type="image" value="submit" src="button(8).png" alt="submit Button" onMouseOver="this.src='button(8).png'"></center>
</form>
<?php			
}
else
{
	echo "<html><center><b>SORRY WRONG ANSWER! :/ </b></center></html>";
	echo "<html><center><b>TRY AGAIN! :/ </b></center></html>";
	echo "<html><center><b>THANK YOU! :) </b></center></html>";
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