<HEAD>
<TITLE>
CREATE AN ACCOUNT
</TITLE>
</HEAD>
<style>
input 
{
	border: 1px solid olive;
	border-radius: 5px;
}
h1
{
	 color:darkgreen;
	 font-align:center;
	 font-size:20px;
}
</style>
<body background="bg9.jpg">
<center><b>
<font size="30px" color="darkpink">
WELCOME :)<br>
</font>
<p style="color:green;font-size:30px;font-family:comics sans ms">
PLEASE ENTER YOUR DETAILS TO SIGN UP
</p>
</center></b>
<form action='insert.php' method='post'>
<table align='center' cellspacing='5'>
<tr><td><h1>NAME:</h1></td><td><input type='text' name="name" required></td></tr>
<tr><td><h1>PASSWORD:</h1></td><td><input type='password' name='pwd' pattern="^(?=.*\d)(?=.*[A-Za-z])[0-9A-ZA-z!@#$%]{8,12}$" title="The password must be 8 to 12 characters long and should contain alphanumeric characters and a special character too!" required/></td></tr>
<tr><td><h1>AGE:</h1></td><td><input type='number' min="1" step="1" name='age' required></td></tr>
<tr><td><h1>GENDER:</h1></td><td><select name="gen"><option value="male">male</option><option value="female">female</option></select></td></tr>
<tr><td><h1>ADDRESS:</h1></td><td><input type='text' name='adr' required></td></tr>
<tr><td><h1>PHONE NUMBER:</h1></td><td><input type="tel" pattern="^\d{10}$" title="The phone number must be 10 charactes long!" name="phno" required></td></tr>
<tr><td><h1>EMAIL ID:</h1></td><td><input type='email' name='eid' required></td></tr>
<tr><td><center><input type="image" value="submit" src="button(8).png" alt="submit Button" onMouseOver="this.src='button(8).png'"></center></td></tr>
</form><br>
</body>
</HTML>