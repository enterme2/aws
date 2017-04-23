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
	<th align="left"><b>Welcome : <i><?php echo $employee_name; ?></i></b></th>
	<th><b>&nbsp&nbsp&nbsp Level : <i><?php echo $user_type; ?></i></b></th>
	<th align="right"><b><a href="php/logout.php">Log Out</a></b></th>
</tr>
<tr>
	<th align="left"><a href="wReqForm.php"> <br><br>Add Work Request</button></th>
</tr>
<tr>
	<th align="left"><a href="showAll_wRequest.php?page=1">Show Work Request</button></th>
</tr>
<tr>
	<th align="left"><a href="pMainForm.php">Add Preventive Maintenance Work</button></th>
</tr>
<tr>
	<th align="left"><a href="showAll_pMaintenance.php">Show Preventive Maintenance Work</button></th>
</tr>
</table>
</center>
</body>
</html>