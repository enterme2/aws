<?php
require('php/view_pMainForm.php');
?>

 <!DOCTYPE html>


<html>
<head>
<title>Work Request</title>
</head>
<body>

<center><h1>Work Request (FEMS)</h1></center>

<form method='post'>
<table>

<tr><th><b>A. <u>Work Request</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th>Requested by :</th><th><input type='text' name='RequestedBy' value='<?php echo $v1 ?>'</th>
	<th>Job Title :</th><th><input type='text' name='JobTitle' value='<?php echo $v2 ?>'> </th>
	<th>Ref :</th><th><input type='text' name='Ref'> </th>
</tr>
<tr>
	<th>Contact No :</th><th><input type='text' name='ContactNo' value='<?php echo $v3 ?>' ></th>
	<th>Dept :</th><th><input type='text' name='Dept' value='<?php echo $v4 ?>'></th>
</tr>
<tr>
	<th>AssetNo : </th><th><input type='text' name='AssetNo' value='<?php echo $v5 ?>'></th>
	<th>Asset name : </th><th><input type='text' name='AssetName' value='<?php echo $v6 ?>'></th>
</tr>
<tr>
	<th>Location Code :</th><th> <input type='text' name='LocationCode' value='<?php echo $v7 ?>'></th>
	<th>Location Name :</th><th> <input type='text' name='LocationName' value='<?php echo $v8 ?>'></th>
</tr>
<tr>
	<th>Work Group : </th><th><input type='text' name='WorkGroup' value='<?php echo $v9 ?>'></th>
	<th>Variation Status : </th><th><input type='text' name='VariationStatus' value='<?php echo $v10 ?>'></th>
</tr>
<tr>
	<th>Work Category : </th><th><input type='text' name='WorkCategory' value='<?php echo $v11 ?>'></th>
	<th>Condition Status : </th><th><input type='text' name='ConditionStatus' value='<?php echo $v12 ?>'></th>
</tr>
<tr>
	<th>Requested Details : </th><th><input type='text' name='RequestedDetails' value='<?php echo $v13 ?>'></th>
</tr>
<tr><th></th></tr>
<tr><th><b>B. <u>Assessment </b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th>ID/Name : </th><th><input type='text' name='IDName' value='<?php echo $v14 ?>'></th>
	<th>Target Date : </th><th><input type='text' name='TargetDate' value='<?php echo $v15 ?>'></th>
</tr>
<tr>
	<th>Requestor Signature : </th><th><input type='text' name='rSignature' value='<?php echo $v16 ?>'></th>
	<th>Date/Time : </th><th><input type='text' name='dTime' value='<?php echo $v17 ?>'></th>
</tr>
<tr>
	<th>Assesment Details : </th><th><input type='text' name='aDetails' value='<?php echo $v18 ?>'></th>
</tr>
<tr>
	<th>Assessment Maint Status : </th><th><input type='text' name='amStatus' value='<?php echo $v19 ?>'></th>
	<th>Loaner Provided : </th><th><input type='text' name='lProvided' value='<?php echo $v20 ?>'></th>
</tr>
<tr>
	<th>Loaner Info</th>
	<th>Asset Info - </th><th><input type='text' name='aInfo' value='<?php echo $v21 ?>'></th>
</tr>
<tr>
	<th></th>
	<th>Loaner Start Date/Time : </th><th><input type='text' name='lStartDateTime' value='<?php echo $v22 ?>'></th>
	<th>Loaner End Date/Time : </th><th><input type='text' name='lEndDateTime' value='<?php echo $v23 ?>'></th>
</tr>
<tr>
	<th></th>
	<th>Loaner Received By : </th><th><input type='text' name='lReceivedBy' value='<?php echo $v24 ?>'></th>
	<th>Loaner Return By : </th><th><input type='text' name='lReturnBy' value='<?php echo $v25 ?>'></th>
</tr>
<tr><th></th></tr>
<tr><th><b>C. <u>Part Details</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th>Description</th>
	<th>UoM</th>
	<th>Qty used(U)/Returned(Rt)</th>
</tr>
<tr>
	<th><input type='text' name='d1' value='<?php echo $v26 ?>'></th>
	<th><input type='text' name='u1' value='<?php echo $v27 ?>'></th>
	<th><input type='text' name='q1' value='<?php echo $v28 ?>'></th>
</tr>
<tr>
	<th><input type='text' name='d2' value='<?php echo $v29 ?>'></th>
	<th><input type='text' name='u2' value='<?php echo $v30 ?>'></th>
	<th><input type='text' name='q2' value='<?php echo $v31 ?>'></th>
</tr>
<tr>
	<th><input type='text' name='d3' value='<?php echo $v32 ?>'></th>
	<th><input type='text' name='u3' value='<?php echo $v33 ?>'></th>
	<th><input type='text' name='q3' value='<?php echo $v34 ?>'></th>
</tr>
<tr><th></th></tr>
<tr><th><b>D. <u>Employee</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th>Employee No</th>
	<th>Employee Name</th>
	<th>Task Code</th>
	<th>Date</th>
	<th>Start Time</th>
	<th>End Time</th>
	<th>Repair Hours</th>
</tr>
<tr>
	<th><input type='text' name='eNo1' value='<?php echo $v35 ?>'></th>
	<th><input type='text' name='eN1'  value='<?php echo $v36 ?>'></th>
	<th><input type='text' name='tC1' value='<?php echo $v37 ?>'></th>
	<th><input type='text' name='date1' value='<?php echo $v38 ?>'></th>
	<th><input type='text' name='sTime1' value='<?php echo $v39 ?>'></th>
	<th><input type='text' name='eTime1' value='<?php echo $v40 ?>'></th>
	<th><input type='text' name='rHour1' value='<?php echo $v41 ?>'></th>
</tr>
<tr>
	<th><input type='text' name='eNo2' value='<?php echo $v42 ?>'></th>
	<th><input type='text' name='eN2' value='<?php echo $v43 ?>'></th>
	<th><input type='text' name='tC2' value='<?php echo $v44 ?>'></th>
	<th><input type='text' name='date2' value='<?php echo $v45 ?>'></th>
	<th><input type='text' name='sTime2' value='<?php echo $v46 ?>'></th>
	<th><input type='text' name='eTime2' value='<?php echo $v47 ?>'></th>
	<th><input type='text' name='rHour2' value='<?php echo $v48 ?>'></th>
</tr>
<tr>
	<th><input type='text' name='eNo3' value='<?php echo $v49 ?>'></th>
	<th><input type='text' name='eN3' value='<?php echo $v50 ?>'></th>
	<th><input type='text' name='tC3' value='<?php echo $v51 ?>'></th>
	<th><input type='text' name='date3' value='<?php echo $v52 ?>'></th>
	<th><input type='text' name='sTime3' value='<?php echo $v53 ?>'></th>
	<th><input type='text' name='eTime3' value='<?php echo $v54 ?>'></th>
	<th><input type='text' name='rHour3' value='<?php echo $v55 ?>'></th>
</tr>
<tr>
	<th><input type='text' name='eNo4' value='<?php echo $v56 ?>'></th>
	<th><input type='text' name='eN4' value='<?php echo $v57 ?>'></th>
	<th><input type='text' name='tC4' value='<?php echo $v58 ?>'></th>
	<th><input type='text' name='date4' value='<?php echo $v59 ?>'></th>
	<th><input type='text' name='sTime4' value='<?php echo $v60 ?>'></th>
	<th><input type='text' name='eTime4' value='<?php echo $v61 ?>'></th>
	<th><input type='text' name='rHour4' value='<?php echo $v62 ?>'></th>
</tr>
<tr><th></th></tr>
<tr><th><b>E. <u>Completion</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th>Date/Time Work Started : </th><th><input type='text' name='dtwS' value='<?php echo $v63 ?>'></th>
	<th>Date/Time Work Completed : </th><th><input type='text' name='dtwC' value='<?php echo $v64 ?>'></th>
</tr>
<tr>
	<th>Action Taken </th><th><input type='text' name='aTaken' value='<?php echo $v65 ?>'></th>
</tr>
<tr>
	<th>Electrical Safety Test </th><th><input type='text' name='esTest' value='<?php echo $v66 ?>'></th>
	<th>Performance Test </th><th><input type='text' name='pTest' value='<?php echo $v67 ?>'></th>
</tr>
<tr>
	<th>QC PPM </th><th><input type='text' name='qcppm' value='<?php echo $v68 ?>'></th>
	<th>QC Uptime </th><th><input type='text' name='qcuptime' value='<?php echo $v69 ?>'></th>
</tr>
<tr><th></th></tr>
<tr>
	<th colspan='4'>Completed By (SSB) </th>
	<th colspan='4'>Verified By (MoH) </th>
</tr>
<tr><th></th></tr>
<tr>
	<th>Name: </th><th><input type='text' name='nameCompleted' value='<?php echo $v70 ?>'></th>
	<th>Signature: </th><th><input type='text' name='sCompleted' value='<?php echo $v71 ?>'></th>

	<th>Name: </th><th><input type='text' name='nameVerified' value='<?php echo $v72 ?>'></th>
	<th>Signature: </th><th><input type='text' name='sVerified' value='<?php echo $v73 ?>'></th>
</tr>
<tr>
	<th></th><br><th></th>
	<th></th><br><th></th>
	<th>Designation: </th><th><input type='text' name='dVerified' value='<?php echo $x5 ?>'></th>	
</tr>

<tr>
	<th>Date: </th><th><input type='text' name='dateCompleted' value='<?php echo $v74 ?>'></th>
	<th>Time: </th><th><input type='text' name='timeCompleted' value='<?php echo $v75 ?>'></th>

	<th>Date: </th><th><input type='text' name='dateVerified' value='<?php echo $v76 ?>'></th>
	<th>Time: </th><th><input type='text' name='timeVerified' value='<?php echo $v77 ?>'></th>
</tr>
<tr><th><br></th></tr>
<tr>
	<th colspan='4'></th>
	<th colspan='4'>(Random Sampling Verification(DVC))</th>
</tr>
<tr>
	<th colspan='4'>1st Verification performed by (DVO1): </th>
	<th colspan='4'>2nd Verification performed by (DVO2): </th>
</tr>
<tr>
	<th>Name: </th><th><input type='text' name='nameDV01' value='<?php echo $v71 ?>'></th>
	<th></th>
	<th></th>
	<th>Name: </th><th><input type='text' name='nameDV02' value='<?php echo $v73 ?>'></th>
	<th></th>
</tr>
<tr>
	<th>Date: </th><th><input type='text' name='dateDV01' value='<?php echo $x1 ?>'></th>
	<th>Time: </th><th><input type='text' name='timeDV01' value='<?php echo $x2 ?>'></th>
	<th>Date: </th><th><input type='text' name='dateDV02' value='<?php echo $x3 ?>'></th>
	<th>Time: </th><th><input type='text' name='timeDV02' value='<?php echo $x4 ?>'></th>
</tr>
<tr><th><br></th></tr>
<tr><th><b>F. <u>Validation (For Internal Use Only)</b></u></th></tr>

<tr>
	<th>Validation (Yes/No) </th>
	<th>F1 </th>
	<th>F4 </th>
	<th>F5 </th>
	<th>F6 </th>
</tr>
<tr>
	<th><input type='text' name='validaton' value='<?php echo $v78 ?>'></th>
	<th><input type='text' name='vF1' value='<?php echo $v79 ?>'></th>
	<th><input type='text' name='vF4' value='<?php echo $v80 ?>'></th>
	<th><input type='text' name='vF5' value='<?php echo $v81 ?>'></th>
	<th><input type='text' name='vF6' value='<?php echo $v82 ?>'></th>
</tr>
<tr><th><br></th></tr>	
<tr>

	<th>If No. Please Justify</th>
	<th><textarea rows='4' cols='25' input type='text' name='vJustify'></textarea></th>
</tr>
</table>
<br>
<!--<center><input type='submit' name='Add'></center>-->
<center><button type="button" onclick="window.location='index.php'">Back</button></center>
</form>

</body>
</html> 