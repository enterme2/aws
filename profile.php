<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
</head>
<body>
<div>
<b>Welcome : <i><?php echo $login_session; ?></i></b>
<b>User : <i><?php echo $user_type; ?></i></b>
<b><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>