<?php
require("Connection.php");
?>
<html>
<head>
<title>admin page</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="admincss.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>

<div class="login-form">
    <h2>Admin Login</h2>
    <form method="POST">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Admin name" name="AdminName">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="Password" name="AdminPassword">
        </div>
        
        <button type="submit" name="Login">Log-In</button>

        <div class="extra">
            <a href="#">Forgot Passward</a>
            
        </div>

    </form>
</div>
<?php

if(isset($_POST['Login']))
{
    $query="SELECT * FROM `admin` WHERE 'Admin name'='$_POST[AdminName]' AND 'Password'='$_POST[AdminPassword]'";
    $result=mysqli_query($con,$query); 
   if(mysqli_num_rows($result)==1)
   {
    echo"<script>alert('Correct password')</script>";
   }
   else
   {
    echo"<script>alert('Incorrect password')</script>";
   }
}
?>

</body>
</html>