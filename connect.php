<?php
define('DB_NAME', 'sedafiat');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

//$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if($db->connect_errno > 0){
    //for debug purpose remove when in public website
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    echo "Sorry, this website is experiencing problems.";
    exit;
}
/*
if (!$link){
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected){
	die('Can\'t use' . DB_NAME . ': '  . mysql_error());
}
*/

//mysql_close();
?>