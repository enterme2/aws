<?php
include('php/login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
</head>
<body>
<center>
<table>
<tr>
	<th colspan="2"><h1>AWS</h1><th>
</tr>
<tr>
	<th colspan="2"><h2>Login</h2></th>
</tr>

<form action="" method="post">
<tr>
	<th><label>Username :</label></th>
	<td><input id="name" name="username" placeholder="abcdefg" type="text"></td>
</tr>
<tr>
	<th><label>Password :</label></th>
	<td><input id="password" name="password" placeholder="**********" type="password"></td>
	
</tr>
<tr>
	<th colspan="2"><input name="submit" type="submit" value=" Login "></th>
</tr>
<tr>
	<th colspan="2"><span><?php echo $error; ?></span></th>
</tr>
</table>
</center>	
</form>
</div>
</div>
</body>
</html>
