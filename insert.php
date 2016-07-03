<html>
<head>
<title>INSERTION</title>
</head>
<br>
<br><br><br><br><br><br><br><br><br><br><br>
<body background="bg10.jpg">
<font size="30px" color="blue">
<?php
$k=mysql_connect('localhost','root','') or die(mysql_error());
if(!$k)
{
	echo"error";
}
mysql_select_db('quiz');
$n=$_POST['name'];
$a=$_POST['age'];
$b=$_POST['gen'];
$c=$_POST['adr'];
$d=$_POST['phno'];
$e=$_POST['eid'];
$p=$_POST['pwd'];
if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-ZA-z!@#$%]{8,12}$/',$p))
{
		echo"the password does not match requirements!";
}
else
{
if($n!='' && $p!='' && $a!='' && $b!='' && $c!='' && $d!='' && $e!='')
{
	if (trim($n) != '' && trim($p) !="" && trim($a) !="" && trim($b) !="" && trim($c)!="")//to check for white spaces
	{
	$sql=mysql_query("insert into details values('$n','$a','$b','$c','$d','$e','$p')");
	echo"<html><center><b>Inserted successfully! :)</b></center></html>";
	}
}
else
{
	echo"enter all the values";
}
}
?>
<br><br><br><br>
<form action="index.php">
<tr><td><center><input type="image" value="submit" src="button(9).png" alt="submit Button" onMouseOver="this.src='button(9).png'"></center></td></tr>
</form>
