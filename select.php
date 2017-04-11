<?php
require("connect.php");
$id =$_REQUEST['ID'];

$result = mysql_query("SELECT * FROM sedafiatform WHERE ID  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$RequestedBy=$test['requestedBy'] ;
				//$Author= $test['Author'] ;					
				//$PublisherName=$test['PublisherName'] ;
				//$CopyrightYear=$test['CopyrightYear'] ;

?>