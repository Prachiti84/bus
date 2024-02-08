<?php
include 'Connection.php';
if (isset($_POST['submit']))
{
$name=$_POST['name'];
$password=$_POST['password'];
$sql = "INSERT INTO login(name,password) VALUES ('$name', '$password');";
if(mysqli_query($cn, $sql))
{  
	$message = "You have been successfully registered";
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>

<HTML>
<HEAD>
<TITLE>Login</TITLE>
<style type="text/css">
html {
	background: url(airline4.jpg) no-repeat center center;
	background-size: cover;
}

#register_form	{
	width: 40%;
	margin: auto;
	border-radius: 25px;
	border: 2px solid blue;
	margin-top: 30px;
	padding-bottom: 20px;
	background-color: rgba(0,0,0,0.2);
    box-shadow: inset -2px -2px rgba(0,0,0,0.5);
}
.button	{
	border-radius: 5px;
	background-color: rgba(0,0,0,0);
 	padding: 7px 7px 7px 7px;
 	box-shadow: inset -1px -1px rgba(0,0,0,0.5);
 	font-family:"Comic Sans MS", cursive, sans-serif;
	font-size: 15px;
}
</style>
<script src="validation.js"></script>
</HEAD>
<BODY>
<div id="register_form" align="center" height="200" width="200">
<FORM name="register" method="post" action="register.php" onsubmit="return validate()">
<TABLE border="0">
<CAPTION><FONT size="6"><br/>Login :</FONT></CAPTION>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">Name:</FONT></TD>
<TD><INPUT name="name" type="TEXT" placeholder="Enter your name" size="30" maxlength="30" align="center" id="sname"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">Password:</FONT></TD>
<TD><INPUT type="PASSWORD" name="password" size="30"  id="password"></TD>
</TR><tr></tr><tr></tr>
</TABLE>
<P><INPUT TYPE="Submit" value="Submit" name="submit" id="submit" class="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<HR width="450" style="border-color: blue;display: block;" noshade>
<FORM action="register.php">
<P align="CENTER"><FONT size="6" face="Arial">
New Registration<BR></FONT><br/><br/>
<INPUT TYPE="submit" value="SignUp" id="login" class="button">
</P>
</FORM></div>
</BODY>
</HTML>