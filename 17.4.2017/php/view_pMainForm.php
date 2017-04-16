<?php
require('php/connect.php');
$id=4;

// Perform an SQL query
$sql = "SELECT * FROM workrequest WHERE ID = $id";
if (!$result = $db->query($sql)) {
    // Oh no! The query failed. 
    echo "Sorry, the website is experiencing problems.";

    // Again, do not do this on a public site, but we'll show you how
    // to get the error information
    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $db->errno . "\n";
    echo "Error: " . $db->error . "\n";
    exit;
}

//$result = mysql_query("SELECT * FROM sedafiatform WHERE ID  = '$id'");
//$test=mysql_fetch_array($result);

$test = $result->fetch_assoc();

if (!$result) 
		{
		die('Error: Data not found..');
		}

$v1 = $test['requestedBy'];
$v2 = $test['jobTitle'];
$v3 = $test['ContactNo'];
$v4 = $test['Dept'];
$v5 = $test['AssetNo'];
$v6 = $test['AssetName'];
$v7 = $test['LocationCode'];
$v8 = $test['LocationName'];
$v9 = $test['WorkGroup'];
$v10 = $test['VariationStatus'];
$v11 = $test['WorkCategory'];
$v12 = $test['ConditionStatus'];
$v13 = $test['RequestedDetails'];
$v14 = $test['IDName'];
$v15= $test['TargetDate'];
$v16= $test['rSignature'];
$v17 = $test['dTime'];
$v18 = $test['aDetails'];
$v19 = $test['amStatus'];
$v20 = $test['lProvided'];
$v21 = $test['aInfo'];
$v22 = $test['lStartDateTime'];
$v23 = $test['lEndDateTime'];
$v24 = $test['lReceivedBy'];
$v25 = $test['lReturnBy'];
$v26 = $test['d1'];
$v27 = $test['u1'];
$v28 = $test['q1'];
$v29 = $test['d2'];
$v30 = $test['u2'];
$v31 = $test['q2'];
$v32 = $test['d3'];
$v33 = $test['u3'];
$v34 = $test['q3'];
$v35 = $test['eNo1'];
$v36 = $test['eN1'];
$v37 = $test['tC1'];
$v38 = $test['date1'];
$v39 = $test['sTime1'];
$v40 = $test['eTime1'];
$v41 = $test['rHour1'];
$v42 = $test['eNo2'];
$v43 = $test['eN2'];
$v44 = $test['tC2'];
$v45 = $test['date2'];
$v46 = $test['sTime2'];
$v47 = $test['eTime2'];
$v48 = $test['rHour2'];
$v49 = $test['eNo3'];
$v50 = $test['eN3'];
$v51 = $test['tC3'];
$v52 = $test['date3'];
$v53 = $test['sTime3'];
$v54 = $test['eTime3'];
$v55 = $test['rHour3'];
$v56 = $test['eNo4'];
$v57 = $test['eN4'];
$v58 = $test['tC4'];
$v59 = $test['date4'];
$v60 = $test['sTime4'];
$v61 = $test['eTime4'];
$v62 = $test['rHour4'];
$v63 = $test['dtwS'];
$v64 = $test['dtwC'];
$v65 = $test['aTaken'];
$v66 = $test['esTest'];
$v67 = $test['pTest'];
$v68 = $test['qcppm'];
$v69 = $test['qcuptime'];
//start here
$v70 = $test['nameCompleted'];
$v71 = $test['sCompleted'];
$v72 = $test['nameVerified'];
$v73 = $test['sVerified'];

/*
//MissedStart
	 $x1 = $test['dateDV01'];
	 $x2 = $test['timeDV01'];
	 $x3 = $test['dateDV02'];
	 $x4 = $test['timeDV02'];
	 $x5 = $test['dVerified'];
//MissedEnd
$v74 = $test['dateCompleted'];
$v75 = $test['timeCompleted'];
$v76 = $test['dateVerified'];
$v77 = $test['timeVerified'];
$v78 = $test['validaton'];
$v79 = $test['vF1'];
$v80 = $test['vF4'];
$v81 = $test['vF5'];
$v82 = $test['vF6'];
$v83 = $test['vJustify'];
*/

$result->free();
$db->close();
?>