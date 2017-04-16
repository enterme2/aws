<?php
include('php/session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Main</title>
<!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
</head>
<body>

<center>
<table>
<tr>
	<th align="left"><b>Welcome : <i><?php echo $login_session; ?></i></b></th>
	<th><b>&nbsp&nbsp&nbsp Privilege : <i><?php echo $user_type; ?></i></b></th>
	<th align="right"><b><a href="php/logout.php">Log Out</a></b></th>
</tr>
<tr>
	<th align="left"><a href="wReqForm.php"> <br><br>Add Work Request</button></th>
</tr>
<tr>
	<th align="left"><a href="pMainForm.php">Add Preventive Maintenance Work</button></th>
</tr>
</table>
</center>
</body>
</html>